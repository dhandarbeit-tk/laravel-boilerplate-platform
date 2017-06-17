<?php

namespace App\Eloquent\Models;

use App\Eloquent\Traits\IsModel;
use Illuminate\Notifications\Notifiable;

class User extends AuthenticatableModel
{
    use Notifiable, IsModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * RELATIONS
     */


    /*
     * INVERSE RELATIONS
     */


    /*
     * RELATIONS THROUGH PIVOTS
     */
}
