<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Cashier\Subscription as CashierSubscription;

class Subscription extends CashierSubscription
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "stripe_id",
        'stripe_plan',
        'quantify',
        'trial_ends_at',
        'ends_at',
        'stripe_status',
    ];
}
