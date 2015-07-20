<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Room;
use App\BookingRoom;
use App\BookingRoomDetail;
use DateUtils;
use App\User;
use Helper;

class RoomBookingController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data =  BookingRoom::where('flag', '=', '1')
                ->orWhere('create_user', '=', Helper::loginUser())
                ->orderBy('create_date', 'desc')->get();

        return view('store.manageRoomBooking')->with('bookingRooms', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $documentNumber = Helper::get_running_number("2", "6");
        $users = User::all()->toArray();
        $rooms = Room::where('flag', '=', '1')->get();
        
        return view('store.formRoomBooking')->with('compact', compact('users', 'documentNumber', 'rooms'));
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
        $bookingRoom->events = $input ['events'];
        $bookingRoom->purpose = $input ['purpose'];
        $bookingRoom->description = $input ['description'];
        $bookingRoom->contact_person = $input ['contactPerson'];
        $bookingRoom->email = $input ['email'];
        $bookingRoom->start_time = DateUtils::getConcatDBDateTime($input['eventDate'], $input ['startTime']);
        $bookingRoom->end_time = DateUtils::getConcatDBDateTime($input['eventDate'], $input ['endTime']);
        $bookingRoom->create_user = Helper::loginUser();
        $bookingRoom->create_date = DateUtils::getDBDateTime();
        $bookingRoom->update_user = Helper::loginUser();
        $bookingRoom->update_date = DateUtils::getDBDateTime();
        $bookingRoom->flag = '1';
        $bookingRoom->save();
        
        // save details
        if (isset($input ['hiddenDeviceId'])) {
            $items = $input ['hiddenDeviceId'];
            $i = 0;
            foreach ($items as $item) {
                $detail = new BookingRoomDetail();
                $detail->device_id = $item;
                $detail->amount = $input ['amount'][$i];
                $detail->flag = '1';

                $details[] = $detail;
                $i++;
            }
            $bookingRoom->bookingRoomDetail()->saveMany($details);
        }
        
        return redirect('viewManageRoomBooking');
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
        $data = BookingRoom::find($id);
        $rooms = Room::where('flag', '=', '1')->get();
        $bookingRoomDetails = BookingRoomDetail::where('flag', '=', '1')
                ->where('booking_room_id', '=', $id)
                ->get();
                
        foreach ( $rooms as &$tmp ) {
            if ($data['room_id']==$tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }
        
        $users = Helper::get_user_list(User::all()->toArray(), $data['contact_person']);
        
        return view('store.formEditRoomBooking')->with('compact', compact('data', 'rooms', 'bookingRoomDetails', 'users'));
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
        $bookingRoom->events = $input ['events'];
        $bookingRoom->purpose = $input ['purpose'];
        $bookingRoom->description = $input ['description'];
        $bookingRoom->contact_person = $input ['contactPerson'];
        $bookingRoom->email = $input ['email'];
        $bookingRoom->start_time = DateUtils::getConcatDBDateTime($input['eventDate'], $input ['startTime']);
        $bookingRoom->end_time = DateUtils::getConcatDBDateTime($input['eventDate'], $input ['endTime']);
        $bookingRoom->update_user = Helper::loginUser();
        $bookingRoom->update_date = DateUtils::getDBDateTime();
        $bookingRoom->save();
        
        // save details
        if (isset($input ['hiddenDeviceId'])) {
            $items = $input ['hiddenDeviceId'];
            $i = 0;
            foreach ($items as $item) {
                $detail = new BookingRoomDetail();
                $detail->device_id = $item;
                $detail->amount = $input ['amount'][$i];
                $detail->flag = '1';

                $details[] = $detail;
                $i++;
            }
            $bookingRoom->bookingRoomDetail()->saveMany($details);
        }
        
        return redirect('viewManageRoomBooking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        BookingRoom::where('id', '=', $id)->update(['flag' => '0']);
        BookingRoomDetail::where('booking_room_id', '=', $id)->update(['flag' => '0']);
        
        return redirect('viewManageRoomBooking');
    }

    public function destroyDetail($id) {
        BookingRoomDetail::where('id', '=', $id)->update(['flag' => '0']);
    }
    
    public function bookingCalendar() {
        $bookingRooms = BookingRoom::where('start_time', '>=', date('Y-m-d').' 00:00:00')
                                    ->orWhere('start_time', '<=', date('Y-m-d').' 23:59:59')
                                    ->get();
        $events = '';
        
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
