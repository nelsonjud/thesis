<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Announcement;
use App\Models\Employees;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        if ($value)
        {
            $this->attributes['password'] = \Hash::make($value);
        }
    }

    public function announcement()
    {
        return $this->hasMany('App\Models\Announcement');
    }

    public function employees()
    {
        return $this->hasOne('App\Models\Employees');
    }
}
