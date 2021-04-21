<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\PaymentIntent;
use App\Models\Contract;
use App\Models\Payment;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ContractNotification;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function __construct() {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function getAll(){
        $user = Auth::user();
        $payments = Payment::where('user_id', $user->id)
            ->with('contract')
            ->get();

        return response()->json([
            'payments' => $payments
        ]);
    }

    public function calculatePayContractOccasional($price, $porcentageCommision, $hours){
        $priceTotal = $price * $hours;
        $commission = $priceTotal * $porcentageCommision;
        $amount = $priceTotal + $commission;

        return [
            "typeContract" => "occasional",
            "priceHour" => $price,
            "hours" => $hours,
            "porcentageComission" => $commission,
            "totalComission" => $commission,
            "totalAmount" => $amount
        ];
    }

    public function calculatePayContractHabitual(
        $price, $porcentageCommision, $hours, $daysSem, $dateStart
    ){
        $dateInitial = strtotime($dateStart);
        $dateFinal = strtotime(Carbon::create($dateStart)->addMonth());
    
        $daysRange = [];
        
        for ($i = $dateInitial; $i <= $dateFinal; $i += 86400){
            $daySem = array_search(date('N', $i), $daysSem);
           
            if ($daySem !== false){
                $daysRange[] = [ 
                    "date" => date('d-m-y', $i) ,
                    "daySem" => $daysSem[$daySem] 
                ];
                // $daysSem[] = date('l', $i)." | ".date('N', $i);
            }
        }

        $totalDays = count($daysRange);
        $priceTotal = $price * $hours * $totalDays;
        $commission = $priceTotal * $porcentageCommision;
        $amount = $priceTotal + $commission;

        return [
            "typeContract" => "habitual",
            "daysSem" => $daysSem,
            "dateStart" => Carbon::create($dateStart)->format('Y-m-d'),
            "dateEnd" => Carbon::create($dateStart)->addMonth()->format('Y-m-d'),
            "hoursByDay" => $hours,

            "porcentageComission" => $porcentageCommision,
            "totalComission" => $commission,

            "days" => $daysRange,
            "priceHour" => $price,
            "totalHours" => $hours * $totalDays,
            "totalAmount" => $amount,
        ];
    }

    public function calculate(Request $request){

        $this->validate($request, [
            'typeContract' => 'required|string',
            'dateStart' => 'date',
            'price' => 'required|numeric',
            'daysSelected' => 'array',
            'hours' => 'required|numeric',
        ]);
        
        $typeContract = $request['typeContract'];
        $price = $request['price'];
        $hours = $request['hours'];
        $daysSem = $request['daysSelected'];
        $dateStart = $request['dateStart'];
        $porcentageCommision = 0.10;

        if ($typeContract === 'habitual'){
            return response()->json(
                $this->calculatePayContractHabitual(
                    $price, $porcentageCommision, $hours, $daysSem, $dateStart
                )
            );
        }

        return response()->json(
            $this->calculatePayContractOccasional(
                $price, $porcentageCommision, $hours
            )
        );
    }

    public function payContractOccasional(Request $request){

        $contract = Contract::find($request['contract']);
        $user = Auth::user();

        $calculateContract = $this->calculatePayContractOccasional(
            $contract->price, 
            0.10, 
            $contract->hours
        );

        $totalAmount = $calculateContract['totalAmount'] * 100;

        $charge = Charge::create([
            'customer' => $user->stripe_id,
            'amount' => $totalAmount,
            'currency' => 'EUR',
            'description' => 'Pago contrato id:'.$contract->id
        ]);
        

        // Crear pago en BD
        $payment = Payment::create([
            'method_payment' => 'stripe',
            'type_payment' => 'contract',
            'amount' => $calculateContract['totalAmount'],
            'contract_id' => $contract->id,
            // 'type' => 'in',
            "status_id" => Status::where('name', 'finalized')->first()->id,
            'subscription' => false,
            'user_id' => $user->id,
            'charge' => $charge->id
        ]);

        // Modificar status del contrato
        $contract->status_id = Status::where('name', 'process')->first()->id;
        $contract->save();
        
        // Relaciones
        $contract->status;
        $contract->categoryUser;
        $contract->user;

        // enviar notificacion
        $contract->categoryUser->user->notify(new ContractNotification($contract));

        return response()->json([
            'charge' => $charge,
            'payment' => $payment,
            'contract' => $contract
        ]);
    }

    public function payContractHabitual(Request $request){

        $contract = Contract::find($request['contract']);
        $user = Auth::user();

        $price = $contract->price;
        $hours = $contract->hours;
        $daysSem = $contract->daysSelected;

        $dateStart = $contract->date_start;
        $dateInitial = strtotime($dateStart);
        $dateFinal = strtotime(Carbon::create($dateStart)->addMonth());

        if ($request['renovation']){
            $paymentIn = Payment::whereMonth('created_at', '=', Carbon::create($contract->date_start)->format('m'))
                ->where('contract_id', '=' ,$contract->id)
                ->first();
            
            // Registrar Pago Anterior Para el admin
            $paymentOut = new Payment();
            $paymentOut->method_payment = 'manual';
            $paymentOut->type_payment = 'withdrawal';
            $paymentOut->amount = $paymentIn->amount;
            $paymentOut->user_id = $user->id;
            $paymentOut->contract_id = $contract->id;
            $paymentOut->status_id = Status::where('name', 'pending')->first()->id;
            // $paymentOut->type = 'out';
            $paymentOut->save();

            
            $dateStart = Carbon::create($contract->date_start)->addMonth()->toString();
            $dateInitial = strtotime($dateStart);
            $dateFinal = strtotime(Carbon::create($contract->date_start)->addMonth(2));
            
            $contract->date_start = date('Y-m-d' , $dateInitial);
            $contract->date_end = date('Y-m-d' , $dateFinal);
        }

        $calculateContract = $this->calculatePayContractHabitual(
            $price, 0.10, $hours, $daysSem, $dateStart
        );
        
        $totalAmount = $calculateContract['totalAmount'];
        $totalAmountCentimos = $totalAmount * 100;
        $days = $calculateContract['days'];

        // se crea el cargo
        $charge = Charge::create([
            'customer' => $user->stripe_id,
            'amount' => $totalAmountCentimos,
            'currency' => 'EUR',
            'description' => 'Pago contrato id:'
                .$contract->id
                .' | Fecha inicio: '
                .date('d-m-y', $dateInitial)
        ]);

        // Crear pago en BD
        $payment = Payment::create([
            'method_payment' => 'stripe',
            'type_payment' => 'contract',
            'amount' => $totalAmount,
            'contract_id' => $contract->id,
            // 'type' => 'in',
            "status_id" => Status::where('name', 'finalized')->first()->id,
            'subscription' => false,
            'user_id' => $user->id,
            'data' => [
                'days' => $days
            ],
            'charge' => $charge->id
        ]);

        // Si se esta renovando modificar fecha de inicio y fin

        // Modificar status del contrato
        $contract->status_id = Status::where('name', 'process')->first()->id;
        $contract->save();
        
        // Relaciones
        $contract->status;
        $contract->categoryUser;
        $contract->user;

        // enviar notificacion
        $contract->categoryUser->user->notify(new ContractNotification($contract));
        
        return response()->json([
            // 'charge' => $charge,
            'payment' => $payment,
            'contract' => $contract,
            'amount' => $totalAmount,
            'dateInitial' => date("d-m-y", $dateInitial),
            'dateFinal' => date("d-m-y", $dateFinal),
            'days' => $days
        ]);
    }    
}
