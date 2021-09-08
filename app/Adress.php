<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    public function anggota()
    {
        return $this->belongsToMany('App\Anggota');
    }
}
