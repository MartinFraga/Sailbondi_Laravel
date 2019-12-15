<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class ProdCart extends Model
{
    public $table = 'prod_cart';
    public $primayKey = ['user_id', 'pasaje_id'];
    public $incrementing = false;

    public function pasaje() {
        return $this->belongsTo('App\Pasajes');
      }

    protected function setKeysForSaveQuery(Builder $query) {
        return $query->where('user_id', $this->getAttribute('user_id'))
            ->where('pasaje_id', $this->getAttribute('pasaje_id'));
    }
}
