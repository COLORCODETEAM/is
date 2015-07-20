<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairDevice extends Model {

    protected $table = 'repair_device';
    public $timestamps = false;

    public function repairDeviceDetail() {
        return $this->hasMany('App\RepairDeviceDetail');
    }
    
    public function user() {
        return $this->belongsTo('App\User', 'person');
    }
    
    public function user_received() {
        return $this->belongsTo('App\User', 'received_by');
    }
}
