<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $fillable = ['nameF'];

    public function file()
    {
        // transform yourself
        return $this->morphTo();
    }
}
