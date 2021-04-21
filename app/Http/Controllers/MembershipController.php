<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use Stripe\Stripe;
use Stripe\StripeClient;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Auth;


class MembershipController extends Controller
{
    public function __construct() {
        Stripe::setApiKey(env('STRIPE_SECRET'));
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
            $user->newSubscription('default', $plan)->add();
        } catch (\Exception $e) {
            return response()->json([
                'msg' => "Error creating subscription." ,
                'errors' =>  $e->getMessage()
            ], 400);
        }

        $info = $user->subscribed($plan);
            
        return response()->json([
            'msg' => 'Create Subscription exitosamente',
            'info' => $info
        ]);
    }
}
