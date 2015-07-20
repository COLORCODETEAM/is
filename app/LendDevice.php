<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LendDevice extends Model {

    protected $table = 'lend_device';
    public $timestamps = false;

    public function lendDeviceDetail() 
    {
        return $this->hasMany('App\LendDeviceDetail');
    }
    
    public function user() {
        return $this->belongsTo('App\User', 'rent_person');
    }
}
