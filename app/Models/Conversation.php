<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    public $fillable = [
        'user_work_id',
        'user_help_id',
        'message',
        'status'
    ];
   
    public function userWork()
    {
        // Usuario Empleado
        return $this->belongsTo(User::class, 'user_work_id');
    }

    public function userHelp()
    {
        // Usuario Empleador
        return $this->belongsTo(User::class, 'user_help_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
