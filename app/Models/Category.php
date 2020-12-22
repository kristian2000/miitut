<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryUser;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'name',
        'parent_id'
    ];

    public function CategoriesUsers(){
        return $this->hasMany(CategoryUser::class);
    }

    public function categoryParent(){
        return $this->belongsTo('category', 'parent_id');
    }

    public function subcategories(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
