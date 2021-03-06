<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class Announcement extends Authenticatable
{
    use SoftDeletes;

    public $force_null = [];

    protected $table = 'users_announcements';

    protected $dates = ['deleted_at'];

    protected $hidden = ['user_id', 'created_at','updated_at','deleted_at'];

    protected $fillable = ['title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}