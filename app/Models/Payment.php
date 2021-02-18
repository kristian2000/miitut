<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = [
        'method_payment',
        'type_payment',
        'amount',
        'contract_id',
        'status',
        'subscription',
        'user_id',
        'data',
        'charge'
    ];

    public function contract(){
        return $this->belongsTo(Contract::class, 'contract_id')
            ->with('categoryUser');
    }
}
