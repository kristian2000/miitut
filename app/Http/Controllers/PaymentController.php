<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Contract;
use App\Models\Payment;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ContractNotification;
use Carbon\Carbon;
use PhpParser\Node\Expr\Cast\Bool_;

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
            "dateStart" => $dateStart,
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

        $token = $request['token']['id'];
        $contract = Contract::find($request['contract']);
        $user = Auth::user();

        $priceCentimos =  $contract->price * 100;
        $price = $priceCentimos * $contract->hours;
        $commission = $price * 0.10;
        $amount = $price + $commission;

        $charge = Charge::create([
            'amount' => $amount,
            'currency' => 'EUR',
            'description' => 'Pago contrato id:'.$contract->id,
            'source' => $token,
            // 'receipt_mail' => $user->email
        ]);

        // Crear pago en BD
        $payment = Payment::create([
            'method_payment' => 'stripe',
            'type_payment' => 'contract',
            'amount' => $amount/100,
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
        $token = $request['token']['id'];
        $contract = Contract::find($request['contract']);
        $user = Auth::user();

        /*
            Calcular los dias del mes, 
            segun los dias seleccionados en el contrato
        */
        
        $contractDateInitial = date($contract['date_start']);
        $dateInitial = strtotime($contractDateInitial);
        $dateFinal = strtotime(Carbon::create($contractDateInitial)->addMonth());
        
        $daysSem = $contract['daysSelected'];
        $daysRange = [];
        
        for ($i = $dateInitial; $i <= $dateFinal; $i += 86400){
            if (array_search(date('N', $i), $daysSem)){
                $daysRange[] = date('d-m-y', $i);
                // $daysSem[] = date('l', $i)." | ".date('N', $i);
            }
        }

        $priceCentimos =  $contract->price * 100;
        $price = $priceCentimos * $contract->hours * count($daysRange);
        $commission = $price * 0.10;
        $amount = $price + $commission;

        // se crea el cargo
        $charge = Charge::create([
            'amount' => $amount,
            'currency' => 'EUR',
            'description' => 'Pago contrato id:'
                .$contract->id
                .' | Fecha inicio: '
                .date('d-m-y', $dateInitial),
            'source' => $token,
            // 'receipt_mail' => $user->email
        ]);

        // Crear pago en BD
        $payment = Payment::create([
            'method_payment' => 'stripe',
            'type_payment' => 'contract',
            'amount' => $amount/100,
            'contract_id' => $contract->id,
            // 'type' => 'in',
            "status_id" => Status::where('name', 'finalized')->first()->id,
            'subscription' => false,
            'user_id' => $user->id,
            'data' => [
                'daysSem' => $daysSem,
                'daysMonth' => $daysRange
            ],
            'charge' => $charge->id
        ]);

        // Si se esta renovando modificar fecha de inicio y fin
        if ($request['renovation']){
            $contract->date_start = date('Y-m-d' , $dateFinal);

            $paymentOut = new Payment();
            $paymentOut->method_payment = 'manual';
            $paymentOut->type_payment = 'withdrawal';
            $paymentOut->amount = $amount/100;
            $paymentOut->user_id = $user->id;
            $paymentOut->contract_id = $contract->id;
            $paymentOut->status_id = Status::where('name', 'pending')->first()->id;
            // $paymentOut->type = 'out';
            $paymentOut->save();
        }

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
            'amount' => $amount,
            'dateInitial' => date("d-m-y", $dateInitial),
            'dateFinal' => date("d-m-y", $dateFinal),
            'daysRange' => $daysRange,
            'daysSem' => $daysSem
        ]);
    }    
}
