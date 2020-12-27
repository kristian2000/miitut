<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\SocialProfile;
use App\Models\CategoryUser;
use App\Models\Status;
use App\Models\Category;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'phone',
        'gender',
        'dni',
        'email_check',
        'profile_check',
        'password',
        'verification_code',
        'userType',
        'address',
        'lat',
        'lng',
        'fase_registry',
        'birthdate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verification_code',
        'remember_me'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Social Profile Relacion
    public function socialProfiles(){
        return $this->hasMany(SocialProfile::class);
    }

    public function categories()
    {
        return $this->hasMany(CategoryUser::class)->with('status', 'category', 'timesAvailable');
    }
}
