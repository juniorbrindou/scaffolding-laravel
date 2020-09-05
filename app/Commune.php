<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    //
    public function quartiers()
    {
        return $this->hasMany('App\Quartier');
    }
}
