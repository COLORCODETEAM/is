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
        $bookingRooms = BookingRoom::where('start_time', '>=', date('Y-m-d').' 00:00:00')
                                    ->orWhere('start_time', '<=', date('Y-m-d').' 23:59:59')
                                    ->get();
        
        foreach ($bookingRooms as $bookingRoom) {
            $tmp['id'] = $bookingRoom->id;
            $tmp['title'] = $bookingRoom->room->name. ' : ' .$bookingRoom->events;
            $tmp['start'] = $bookingRoom->start_time;
            $tmp['end'] = $bookingRoom->end_time;            
            $events[] = $tmp;
        }
        echo json_encode($events);
    }
}
