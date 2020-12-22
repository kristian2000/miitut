<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Category;
use App\Models\TimesAvailable;

class CategoryUser extends Model
{
    use HasFactory;

    protected $table = 'categories_user';

    protected $fillable = [
        'user_id',
        'category_id',
        'status_id',
        'price',
        'title',
        'description',
        'address',
        'descriptionExperience',
        'yearExperience'
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function timesAvailable(){
        return $this->hasMany(TimesAvailable::class, 'category_user_id');
    }

}

