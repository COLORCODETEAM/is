<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model {

    protected $table = 'material';
    public $timestamps = false;

    public function stock() {
        return $this->belongsTo('App\Stock');
    }
}
