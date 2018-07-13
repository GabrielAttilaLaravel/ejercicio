<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'avatar', 'direccion', 'telefono'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
