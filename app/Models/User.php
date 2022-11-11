<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Profile;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['firstName','lastName','email', 'acceptMarketing','last_login_at','isActivated','last_login_ip','password'];

    // public function getAcceptMarketingAttribute($value)
    // {
    //     return $value == 1 ? true : false;
    // }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'acceptMarketing' => 'boolean'
    ];

    public function getFullNameAttribute() {
        return ucfirst($this->firstName) . ' ' . ucfirst($this->lastName);
    }

    public function profile() {
        return $this->hasOne(Profile::class);
    }
}
