<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrefixPhone extends Model
{
    protected $table = 'prefixes_phones';

    protected $fillable = ['prefix'];

    public function pais()
    {
        return $this->belongsToMany(Pais::class, 'pais_prefix_phone')->withTimestamps();
    }
}
