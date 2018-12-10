<?php

namespace App\Eloquent\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

/**
 * App\Eloquent\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

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
}
