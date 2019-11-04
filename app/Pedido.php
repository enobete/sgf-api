<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //

    public function cidadao(){
        return $this->belongsTo('App\Cidadao');
    }


    public function tipo_doc(){
        return $this->belongsTo('App\TipoDoc');
    }

    public function provincia(){
        return $this->belongsTo('App\Provincia');
    } 

    public function fila(){
        return $this->belongsTo('App\Fila');
    }
}
