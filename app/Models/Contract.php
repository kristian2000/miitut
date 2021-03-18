<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $casts = [
        'daysSelected' => 'array',
        'startTime' => 'datetime:H:i:s'
    ];

    protected $fillable = [
        'category_id',
        'status_id',
        'user_id',
        'user_hired_id',
        'category_user_id',
        'date_start',
        'date_end',
        'start_time',
        'hours',
        'address',
        'message',
        'type_contract',
        'daysSelected',
        'qualification_hired_id',
        'qualification_employer_id',
        'price',
        'ad'
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userHired(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categoryUser(){
        return $this->belongsTo(CategoryUser::class, 'category_user_id')
            ->with('user', 'category');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function requests(){
        return $this->hasMany(RequestContract::class)->with('user');
    }

}
