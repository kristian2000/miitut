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
use App\Models\SystemConstant;
use Illuminate\Support\Arr;

class PaymentController extends Controller
{
    public function __construct() {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function formatNumber($number){
        return floatval(number_format((float)($number), 2, '.', ''));
    }

    public function getAll(){
        $user = Auth::user();
        $payments = Payment::where('user_id', $user->id)
            ->where('status_id', Status::where('name', 'finalized')->first()->id)
            ->with('contract')
            ->get();

        return response()->json([
            'payments' => $payments
        ]);
    }

    public function calculatePayContractOccasional($price, $porcentageCommision, $porcentageIva, $hours){
        $priceTotal = $this->formatNumber($price * $hours);
        $commission = $this->formatNumber($priceTotal * $porcentageCommision);
        $subtotal = $this->formatNumber($priceTotal + $commission);
        $iva = $this->formatNumber($subtotal * $porcentageIva);
        $amount = $this->formatNumber($subtotal + $iva);

        return [
            "typeContract" => "occasional",
            "priceHour" => $price,
            "hours" => $hours,
            "porcentageComission" => $porcentageCommision,
            "porcentageIva" => $porcentageIva,
            "totalComission" => $commission,
            "subtotal" => $subtotal,
            "totalIva" => $iva,
            "priceTotal" => $priceTotal, 
            "totalAmount" => $amount
        ];
    }

    public function calculatePayContractHabitual(
        $price, $porcentageCommision, $porcentageIva, $hours, $daysSem, $dateStart
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
        $priceTotal = $this->formatNumber($price * $hours * $totalDays);
        $commission = $this->formatNumber($priceTotal * $porcentageCommision);
        $subtotal = $this->formatNumber($priceTotal + $commission);
        $iva = $this->formatNumber($subtotal * $porcentageIva);
        $amount = $this->formatNumber($subtotal + $iva);

        return [
            "typeContract" => "habitual",
            "daysSem" => $daysSem,
            "dateStart" => Carbon::create($dateStart)->format('Y-m-d'),
            "dateEnd" => Carbon::create($dateStart)->addMonth()->format('Y-m-d'),
            "hoursByDay" => $hours,

            "porcentageComission" => $porcentageCommision,
            "totalComission" => $commission,
            "porcentageIva" => $porcentageIva,
            "subtotal" => $subtotal,
            "totalIva" => $iva,

            "days" => $daysRange,
            "priceHour" => $price,
            "totalHours" => $hours * $totalDays,
            "priceTotal" => $priceTotal, 
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

        // buscar comision
        $commissions = SystemConstant::where('type', 'commission')->get();
        $commission_pay = Arr::first($commissions, function ($value, $key) {
            return $value->name == 'commission_pay';
        });
        $iva_pay = Arr::first($commissions, function ($value, $key) {
            return $value->name == 'iva_pay';
        });

        if (!$commissions){
            return response()->json(["error" => 'constants system'], 402);
        }
        $porcentageCommision = $commission_pay->amount;
        $porcentageIva= $iva_pay->amount;

        if ($typeContract === 'habitual'){
            return response()->json(
                $this->calculatePayContractHabitual(
                    $price, $porcentageCommision, $porcentageIva, $hours, $daysSem, $dateStart
                )
            );
        }

        return response()->json(
            $this->calculatePayContractOccasional(
                $price, $porcentageCommision, $porcentageIva, $hours
            )
        );
    }

    public function payContractOccasional(Request $request){

        $contract = Contract::find($request['contract']);
        $user = Auth::user();

        // buscar comision
        $commissions = SystemConstant::where('type', 'commission')->get();
        $commission_pay = Arr::first($commissions, function ($value, $key) {
            return $value->name == 'commission_pay';
        });
        $iva_pay = Arr::first($commissions, function ($value, $key) {
            return $value->name == 'iva_pay';
        });

        if (!$commissions){
            return response()->json(["error" => 'constants system'], 402);
        }

        $porcentageCommision = $commission_pay->amount;
        $porcentageIva= $iva_pay->amount;

        $calculateContract = $this->calculatePayContractOccasional(
            $contract->price, 
            $porcentageCommision, 
            $porcentageIva,
            $contract->hours
        );

        $totalAmount = $calculateContract['totalAmount'] * 100;

        $charge = Charge::create([
            'customer' => $user->stripe_id,
            'amount' => $totalAmount,
            'currency' => 'EUR',
            'description' => 'Pago contrato id:'.$contract->id
        ]);

        // Buscar direccion y nombre del cliente y de miitut
        $bills = SystemConstant::where('type', 'bill')->get();
        $bill_name = Arr::first($bills, function ($value, $key) {
            return $value->name == 'name_bill';
        });
        $bill_dni = Arr::first($bills, function ($value, $key) {
            return $value->name == 'nif_bill';
        });
        $bill_address = Arr::first($bills, function ($value, $key) {
            return $value->name == 'address_bill';
        });

        // Crear pago en BD
        $payment = Payment::create([
            'method_payment' => 'stripe',
            'type_payment' => 'contract',
            'amount' => $calculateContract['totalAmount'],
            'contract_id' => $contract->id,
            'type' => 'in',
            "status_id" => Status::where('name', 'finalized')->first()->id,
            'user_id' => $user->id,
            'ref' => $charge->id,
            "data" => [
                "info" => $calculateContract,
                "infoClient" => [
                    "name" => $user->name,
                    "CIF" => $user->dni,
                    "address" => $user->address
                ],
                "infoMiitut" => [
                    "name" => $bill_name->value,
                    "CIF" => $bill_dni->value,
                    "address" => $bill_address->value
                ]
            ]
        ]);

        // Modificar status del contrato
        $contract->status_id = Status::where('name', 'process')->first()->id;
        $contract->save();
        
        // Relaciones
        $contract->status;
        $contract->categoryUser;
        $contract->user;

        // Enviar notificacion (Contrato Pagado)
        $contract
            ->categoryUser
            ->user
            ->notify(new ContractNotification([
                "title" => "Notificacion de Contrato",
                "desc" => "Contrato Pagado, en espera de efectuar el servicio",
                "contract" => $contract
            ]));

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
            $paymentOut->type = 'out';
            $paymentOut->save();

            
            $dateStart = Carbon::create($contract->date_start)->addMonth()->toString();
            $dateInitial = strtotime($dateStart);
            $dateFinal = strtotime(Carbon::create($contract->date_start)->addMonth(2));
            
            $contract->date_start = date('Y-m-d' , $dateInitial);
            $contract->date_end = date('Y-m-d' , $dateFinal);
        }

        // buscar comision
        $commissions = SystemConstant::where('type', 'commission')->get();
        $commission_pay = Arr::first($commissions, function ($value, $key) {
            return $value->name == 'commission_pay';
        });
        $iva_pay = Arr::first($commissions, function ($value, $key) {
            return $value->name == 'iva_pay';
        });

        if (!$commissions){
            return response()->json(["error" => 'constants system'], 402);
        }

        $porcentageCommision = $commission_pay->amount;
        $porcentageIva= $iva_pay->amount;

        $calculateContract = $this->calculatePayContractHabitual(
            $price, $porcentageCommision, $porcentageIva, $hours, $daysSem, $dateStart
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

        // Buscar direccion y nombre del cliente y de miitut
        $bills = SystemConstant::where('type', 'bill')->get();
        $bill_name = Arr::first($bills, function ($value, $key) {
            return $value->name == 'name_bill';
        });
        $bill_dni = Arr::first($bills, function ($value, $key) {
            return $value->name == 'nif_bill';
        });
        $bill_address = Arr::first($bills, function ($value, $key) {
            return $value->name == 'address_bill';
        });

        // Crear pago en BD
        $payment = Payment::create([
            'method_payment' => 'stripe',
            'type_payment' => 'contract',
            'amount' => $totalAmount,
            'contract_id' => $contract->id,
            'type' => 'in',
            "status_id" => Status::where('name', 'finalized')->first()->id,
            'user_id' => $user->id,
            "data" => [
                "info" => $calculateContract,
                "infoClient" => [
                    "name" => $user->name,
                    "CIF" => $user->dni,
                    "address" => $user->address
                ],
                "infoMiitut" => [
                    "name" => $bill_name->value,
                    "CIF" => $bill_dni->value,
                    "address" => $bill_address->value
                ]
            ],
            'ref' => $charge->id
        ]);

        // Si se esta renovando modificar fecha de inicio y fin

        // Modificar status del contrato
        $contract->status_id = Status::where('name', 'process')->first()->id;
        $contract->save();
        
        // Relaciones
        $contract->status;
        $contract->categoryUser;
        $contract->user;

        // Enviar notificacion (Contrato Pagado)
        $contract
            ->categoryUser
            ->user
            ->notify(new ContractNotification([
                "title" => "Notificacion de Contrato",
                "desc" => "Contrato Pagado, en espera de efectuar el servicio",
                "contract" => $contract
            ]));
        
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
