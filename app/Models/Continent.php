<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = ['nameC'];

    public function paises()
    {
        return $this->belongsTo(Pais::class);
    }
}
