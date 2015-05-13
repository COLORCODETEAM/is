<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model {

    protected $table = 'stock';
    public $timestamps = false;

    public function userStock() {
        return $this->hasMany('App\UserStock');
    }
}
