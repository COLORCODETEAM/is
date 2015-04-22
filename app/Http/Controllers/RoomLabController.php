<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\RoomLab;
use App\RoomLabs;
use Symfony\Component\VarDumper\VarDumper;

class RoomLabController extends Controller {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$room = new RoomLabs ();
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
		$room = new RoomLabs ();
		$room->room_no = $input ['roomNo'];
		$room->name = $input ['name'];
		$room->description = $input ['des'];
		$room->create_date = date ( 'Y-m-d' );
		$room->update_date = date ( 'Y-m-d' );
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
		$room = RoomLabs::find ( $id );
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
		$room = RoomLabs::find ( $id );
		$room->room_no = $input ['roomNo'];
		$room->name = $input ['name'];
		$room->description = $input ['des'];
		$room->update_date = date ( 'Y-m-d' );
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
		$room = RoomLabs::find ( $id );
		$room->delete ();
		return redirect ( 'viewManageRoom' );
	}
}
