<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';

    protected $fillable = ['nameP', 'name_short', 'continent_id'];

    public function prefixesPhones()
    {
        return $this->belongsToMany(PrefixPhone::class, 'pais_prefix_phone')->withTimestamps();
    }

    public function continent()
    {
        return $this->hasMany(Continent::class);
    }

    public function fileUpload()
    {
        return $this->morphMany(FileUpload::class, 'file');
    }
}
