<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database;

class BookingRoom extends Eloquent {

    protected $table = 'booking_room';
    public $timestamps = false;
    
//    public function Room()
//    {
//        return $this->belongsTo('Room');
//    }
//    
    public function room(){
        $this->hasOne('Room');
    }
}
