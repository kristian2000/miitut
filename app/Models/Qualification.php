<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    public $fillable = [
        'contract_id',
        'user_id',
        'score',
        'comment',
        'type'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contracts(){
        return $this->belongsTo(Contract::class);
    }
}
