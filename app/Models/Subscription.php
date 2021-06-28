<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'stripe_plan',
        'trial_ends_at',
        'ends_at',
        'stripe_status',
        'dni',
        'password',
        'description',
        'birthdate',

    ];
}
