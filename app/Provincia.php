<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $fillable=['delegacao'];

    
    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }
}
