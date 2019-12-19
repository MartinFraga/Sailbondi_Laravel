<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $table = "transacciones";

    public function transacciones_items() {
        return $this->hasMany('App\TransaccionesItem');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
