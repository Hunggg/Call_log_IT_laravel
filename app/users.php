<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class users extends Authenticatable
{
     protected $fillable = [
        'name'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
