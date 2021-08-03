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
        'type',
        'amount',
        'contract_id',
        'status_id',
        'user_id',
        "parent_id",
        'data',
        'ref'
    ];

    public function parent(){
        return $this->belongsTo(Payment::class, 'parent_id');
    }

    public function contract(){
        return $this->belongsTo(Contract::class, 'contract_id')
            ->with('categoryUser.user.account');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
