<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Room;
use DateUtils;
use Helper;

class RoomController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = Room::where('flag', '=', '1')->orderBy('create_date', 'desc')->get();
        
        return view('store.manageRoom')->with('rooms', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('store.formRoom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $room = new Room ();
        $room->room_no = $input ['roomNo'];
        $room->name = $input ['roomName'];
        $room->description = $input ['description'];
        $room->create_user = Helper::loginUser();
        $room->create_date = DateUtils::getDBDateTime();
        $room->update_user = Helper::loginUser();
        $room->update_date = DateUtils::getDBDateTime();
        $room->flag = '1';
        $room->save();
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
        $data = Room::find($id);
        
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
        $room = Room::find($id);
        $room->room_no = $input ['roomNo'];
        $room->name = $input ['roomName'];
        $room->description = $input ['description'];
        $room->update_user = Helper::loginUser();
        $room->update_date = DateUtils::getDBDateTime();
        $room->save();
        return redirect('viewManageRoom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        Room::where('id', '=', $id)->update(['flag' => '0']);
        
        return redirect('viewManageRoom');
    }

}
