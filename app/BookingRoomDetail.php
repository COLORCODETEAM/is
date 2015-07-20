<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingRoomDetail extends Model {

    protected $table = 'booking_room_detail';
    public $timestamps = false;

    public function device()
    {
        return $this->belongsTo('App\Device');
    }
    
    public function user() {
        return $this->belongsTo('App\User', 'contact_person');
    }
}
