<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Model
{
    use Notifiable;

    protected $guard = 'company';

    protected $fillable = [
            'first_name','last_name','business_name','email', 'password',
    ];

    protected $hidden = [
            'password','remember_token',
    ];
}
