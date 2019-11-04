<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidadao extends Model
{
    //

    public function tipo_doc(){
        return $this->belongsTo('App\TipoDoc');
    }

    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }
}
