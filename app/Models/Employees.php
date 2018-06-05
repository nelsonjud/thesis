<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class Employees extends Authenticatable
{
    use SoftDeletes;

    public $force_null = [];

    protected $table = 'Employees';

    protected $dates = ['deleted_at'];

    protected $hidden = ['user_id', 'created_at','updated_at','deleted_at'];

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'birthday', 'contact', 'gender'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}