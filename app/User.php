<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level','avatar','birth_day','gender','phone_number','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const Admin_Type = 1;
    const Default_Type = 0;

    public function bill()
    {
        return $this->hasMany('App\Bill', 'user_id', 'id');
    }

    public function checkAdmin()
    {
        return $this->level === self::Admin_Type;
    }
}
