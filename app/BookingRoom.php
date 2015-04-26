<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model {

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
