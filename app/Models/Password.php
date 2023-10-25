<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;

    public $fillable = [
        'password_password',
        'password_login',
        'password_group_id',
        'password_user_id'
    ];
}
