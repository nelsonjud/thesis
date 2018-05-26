<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Announcement extends Authenticatable
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $hidden = ['user_id','created_at','updated_at','deleted_at'];

    protected $fillable = ['title','conetent'];

}