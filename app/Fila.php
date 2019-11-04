<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fila extends Model
{
    //

    public function cabine(){
        return $this->belongsTo('App\Cabine');
    }

    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }
}
