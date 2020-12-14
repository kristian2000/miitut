<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryUser extends Model
{
    use HasFactory;

    protected $table = 'categories_user';

    protected $fillable = [
        'user_id',
        'category_id'
    ];
}
