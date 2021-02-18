<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_reported',
        'category_id',
        'description'
    ];

    public function userReported()
    {
        return $this->belongsTo(User::class, 'user_reported');
    }
}
