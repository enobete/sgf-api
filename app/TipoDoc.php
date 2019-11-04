<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDoc extends Model
{
    //

    public function cidadaos(){
        return $this->hasMany('App\Cidadao');
    }

    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }
}
