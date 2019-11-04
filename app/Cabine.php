<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabine extends Model
{
    //

    public function fila(){
        return $this->hasOne('App\Fila');
    }
}
