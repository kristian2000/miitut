<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Category;
use App\Models\TimesAvailable;
use App\Models\User;
use App\Models\Qualification;

class CategoryUser extends Model
{
    use HasFactory;

    protected $table = 'categories_user';

    protected $casts = [
        'shedule' => 'array',
        'sub_categories' => 'array',
    ];

    protected $fillable = [
        'user_id',
        'category_id',
        'status_id',
        'price',
        'title',
        'description',
        'address',
        'lat',
        'lng',
        'descriptionExperience',
        'yearExperience',
        'shedule',
        'sub_categories'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id')
            ->with('subcategories');
    }

    public function qualifications(){
        return $this->hasManyThrough(
            Qualification::class, 
            Contract::class
        );
    }

    public function comments(){
        return $this->hasManyThrough(
            Qualification::class, 
            Contract::class
        )->with('user')
        ->where('type', 'help');
    }
}

