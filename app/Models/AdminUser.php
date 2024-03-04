<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class AdminUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function post()
    {
        $this->belongsTo(Post::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function roles()
    {
        return $this->belongsToMany();
    }
}
