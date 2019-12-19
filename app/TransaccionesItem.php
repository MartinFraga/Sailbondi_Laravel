<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaccionesItem extends Model
{
    public function transaccion() {
        return $this->belongsTo('App\Transaccion');
    }
}
