<?php

namespace App\Models;

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
        'username', 'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }

    public function isAdmin()
    {
        return $this->role->nombreR === 'admin';
    }

    public function getFullNameAttribute()
    {
        return $this->first_name .' '. $this->last_name;
    }


}
