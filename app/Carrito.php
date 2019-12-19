<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Carrito extends Model
{
    public $table = 'carrito';
    public $primayKey = ['user_id', 'destino_id'];
    public $incrementing = false;

    public function destino() {
        return $this->belongsTo('App\Destinos');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    protected function setKeysForSaveQuery(Builder $query) {
        return $query->where('user_id', $this->getAttribute('user_id'))
            ->where('destino_id', $this->getAttribute('destino_id'));
    }
}
