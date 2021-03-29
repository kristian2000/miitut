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
        $plans = $this->retrievePlans();
        $user = Auth::user();

        return response()->json([
            'user' => $user,
            'intent' => $user->createSetupIntent(),
            'plans' => $plans
        ]);
    }
}
