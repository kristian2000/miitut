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
use App\Models\Contract;
use PDO;

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
        'password',
        'description',
        'birthdate',

        'address',
        'country',
        'state',
        'lat',
        'lng',

        'score',
        'ratings',

        'email_check',
        'profile_check',
        'verification_code',

        'driving_license',
        'own_vehicle',
        'first_aid',
        'has_children',
        'nationality',
        'spoken_language',

        'userType',
        'fase_registry'
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

    public function contracts(){

        if ($this->userType !== 'work'){
            // si  es un empleador
            return $this->hasMany(Contract::class, 'user_id')
                ->with('categoryUser');

        }

        return $this->hasManyThrough(Contract::class, CategoryUser::class,'user_id', 'category_user_id')
            ->with('categoryUser', 'status');
    }
}
