<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    //
    public function commune()
    {
        return $this->belongsTo('App\Commune');
    }
}
