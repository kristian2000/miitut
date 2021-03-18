<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'status_id',
        'user_id'
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contract(){
        return $this->belongsTo(Contract::class, 'contract_id');
    }
}
