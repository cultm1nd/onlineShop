<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Users as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;

    protected $casts = [
        'password' => 'hashed',
    ];
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'email',
        'login',
        'password',
    ];
}
