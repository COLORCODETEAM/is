<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\BookingRoom;
use App\BookingRoomDetail;
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
        
    }
}
