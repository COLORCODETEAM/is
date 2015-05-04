<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MappingComputerDetail extends Model {

    protected $table = 'mapping_computer_detail';
    public $timestamps = false;

    public function device() {
        return $this->belongsTo('App\Material');
    }
}
