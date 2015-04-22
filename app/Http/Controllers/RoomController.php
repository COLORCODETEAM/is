<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Room;

class RoomController extends Controller {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$room = new Room ();
		$data = $room->all ()->toArray ();
		// var_dump($data);
		return view ( 'store.manageRoom' )->with ( 'rooms', $data );
		// return "index";
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view ( 'store.formRoom' );
		// return "create";
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$input = Request::all ();
		$room = new Room ();
		$room->room_no = $input ['roomNo'];
		$room->name = $input ['roomName'];
		$room->description = $input ['description'];
		$room->save ();
		return redirect ( 'viewManageRoom' );
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
		$room = Room::find ( $id );
		$data = $room;
		return view ( 'store.formEditRoom' )->with ( 'room', $data );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function update($id) {
		$input = Request::all ();
		$room = Room::find ( $id );
		$room->room_no = $input ['roomNo'];
		$room->name = $input ['roomNname'];
		$room->description = $input ['description'];
		$room->save ();
		return redirect ( 'viewManageRoom' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function destroy($id) {
		$room = Room::find ( $id );
		$room->delete ();
		return redirect ( 'viewManageRoom' );
	}
}
