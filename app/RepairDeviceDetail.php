<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairDeviceDetail extends Model {

    protected $table = 'repair_device_detail';
    public $timestamps = false;
    
    public function device() {
        return $this->belongsTo('App\Device');
    }
}
