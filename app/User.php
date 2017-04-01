<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'matricol', 'email', 'password', 'nume', 'prenume', 'date_of_birth', 'mama', 'tata',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $attributes = [
        'mama' => '',
        'tata' => '',
        'date_of_birth' => NULL,
    ];
}
