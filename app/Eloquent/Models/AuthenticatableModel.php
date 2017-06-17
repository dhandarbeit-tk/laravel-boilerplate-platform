<?php

namespace App\Eloquent\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class AuthenticatableModel extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use \Illuminate\Auth\Authenticatable, Authorizable, CanResetPassword;
}
