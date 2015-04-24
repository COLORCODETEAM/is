<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Order;
use App\OrderDetail;
use App\DeviceType;

class OrderController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $order = new Order ();
        $data = $order->all()->toArray();
        
        return view('store.manageOrder')->with('orders', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $deviceType = new DeviceType ();
        $deviceTypes = $deviceType->all()->toArray();
        
        $materialType = '';
        
        $types = '';
        
        return view('store.formOrder')->with('types', $types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $bookingRoom = new BookingRoom ();
        $bookingRoom->room_id = $input ['roomId'];
        $bookingRoom->booking_no = $input ['bookingNo'];
        $bookingRoom->event = $input ['events'];
        $bookingRoom->purpose = $input ['purpose'];
        $bookingRoom->description = $input ['description'];
        $bookingRoom->contact_person = $input ['contactPerson'];
        $bookingRoom->email = $input ['email'];  
//        eventDate
        $bookingRoom->start_time = $input ['startTime'];
        $bookingRoom->end_time = $input ['endTime'];
//        $bookingRoom->create_user = '';
//        $bookingRoom->create_date = '';
//        $bookingRoom->update_user = '';
//        $bookingRoom->update_date = '';
        $bookingRoom->save();
        return redirect('viewManageRoom');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id        	
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id        	
     * @return Response
     */
    public function edit($id) {
        $room = Room::find($id);
        $data = $room;
        return view('store.formEditRoom')->with('room', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $bookingRoom = BookingRoom::find($id);
        $bookingRoom->room_id = $input ['roomId'];
        $bookingRoom->booking_no = $input ['bookingNo'];
        $bookingRoom->event = $input ['event'];
        $bookingRoom->purpose = $input ['purpose'];
        $bookingRoom->description = $input ['description'];
        $bookingRoom->contact_person = $input ['contactPerson'];
        $bookingRoom->start_time = $input ['startTime'];
        $bookingRoom->end_time = $input ['endTime'];
//        $bookingRoom->create_user = '';
//        $bookingRoom->create_date = '';
//        $bookingRoom->update_user = '';
//        $bookingRoom->update_date = '';
        $bookingRoom->save();
        return redirect('viewManageRoom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        $bookingRoom = BookingRoom::find($id);
        $bookingRoom->delete();
        return redirect('viewManageRoom');
    }

}
