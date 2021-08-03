<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use Stripe\Stripe;
use Stripe\StripeClient;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\Status;
use App\Models\SystemConstant;
use Illuminate\Support\Arr;

class MembershipController extends Controller
{
    public function __construct() {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function formatNumber($number){
        return floatval(number_format((float)($number), 2, '.', ''));
    }

    public function index()
    {
        $memberships = Membership::all();

        return response()->json($memberships);
    }

    public function retrievePlans(){
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $plansRaw = $stripe->plans->all();
        $plans = $plansRaw->data;

        foreach($plans as $plan) {
            $prod = $stripe->products->retrieve(
                $plan->product,[]
            );
            $plan->product = $prod;
        }
        return response()->json($plans);
    }

    public function showSubscription() {
        $user = Auth::user();
        $verify = $user->subscribed();
        $subcriptions = [];

        if ($verify){
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $subcriptionsRaw = $user->subscriptions->all();

            foreach($subcriptionsRaw as $subcription) {
                $id_plan = $subcription->stripe_plan;

                $subcriptions[] = [
                    'subcription' => $subcription,
                    'plan' => $stripe->plans->retrieve(
                        $id_plan,
                        []
                    )
                ];
            }
        }
        
        return response()->json([
            'user' => $user,
            "subscribed" => $verify,
            "subscriptions" => $subcriptions,
        ]);
    }

    public function processSubscription(Request $request)
    {
        $user = Auth::user();
        $plan = $request->input('plan');

        $verify = $user->subscribed();

        if ($verify){
            // Ya esta subcrito a un plan
            return response()->json([
                "error" => true,
                "verify" => $verify,
                'msg' => 'Ya esta subcrito a un plan'
            ], 400);

        }

        try {
            $user->newSubscription('default', $plan['id'])->add();

        } catch (\Exception $e) {
            return response()->json([
                'msg' => "Error creating subscription." ,
                'errors' =>  $e->getMessage()
            ], 400);
        }

        $info = $user->subscribed($plan);

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

        $price = $plan['amount'];
        $totalIva = $this->formatNumber($porcentageIva * $price);
        $amount = $price - $totalIva;
        $subtotal = $amount;
        $totalAmount = $price;

        // Crear pago en BD
        $payment = Payment::create([
            'method_payment' => 'stripe',
            'type_payment' => 'subscription',
            'amount' => $plan['amount'],
            'contract_id' => null,
            'type' => 'in',
            "status_id" => Status::where('name', 'finalized')->first()->id,
            'user_id' => $user->id,
            "data" => [
                "info" => [
                    'amount' => $amount,
                    'subtotal' => $subtotal,
                    'porcentageIva' => $porcentageIva,
                    'totalIva' => $totalIva,
                    "priceTotal" => $price, 
                    'totalAmount' => $totalAmount
                ],
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
            'ref' => ""
        ]);
            
        return response()->json([
            'msg' => 'Create Subscription exitosamente',
            'info' => $info,
            'payment' => $payment
        ]);
    }
}
