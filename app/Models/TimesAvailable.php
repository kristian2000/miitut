<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryUser;

class TimesAvailable extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'times_available';
    protected $fillable = [ 'category_user_id', 'day', 'hours' ];

    public function categoryUser(){
        return $this->belongsTo(CategoryUser::class);
    }
}
