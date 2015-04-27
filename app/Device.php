<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model {

    protected $table = 'device';
    public $timestamps = false;

    public function stock() {
        return $this->belongsTo('App\Stock');
    }
}
