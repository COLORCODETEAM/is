<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model {

    protected $table = 'booking_room';
    public $timestamps = false;
    
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
    
    public function bookingRoomDetail()
    {
        return $this->hasMany('App\BookingRoomDetail');
    }
}
