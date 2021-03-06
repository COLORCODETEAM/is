<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LendDeviceDetail extends Model {

    protected $table = 'lend_device_detail';
    public $timestamps = false;

    public function device() {
        return $this->belongsTo('App\Device');
    }
}
