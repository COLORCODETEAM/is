<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BookingRoom;
use DateUtils;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('store.home');
    }
    
    public function calendar() {
        $bookingRoom = new BookingRoom ();
        $bookingRooms = $bookingRoom->getCurrentBookingRoom();
        
        foreach ($bookingRooms as $bookingRoom) {
            $tmp['id'] = $bookingRoom['id'];
            $tmp['title'] = $bookingRoom['events'];
            $tmp['start'] = $bookingRoom['start_time'];
            $tmp['end'] = $bookingRoom['end_time'];            
            $events[] = $tmp;
        }
        echo json_encode($events);
    }
}
