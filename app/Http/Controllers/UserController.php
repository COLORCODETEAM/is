<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		return view ( 'store.home' );
	}
	public function viewStock() {
		return view ( 'store.formStock' );
	}
	public function viewMaterial() {
		return view ( 'store.formMaterial' );
	}
	public function viewDevice() {
		return view ( 'store.formDevice' );
	}
	public function viewRoom() {
		return view ( 'store.formRoom' );
	}
	public function viewOrder() {
		return view ( 'store.formOrder' );
	}
	public function viewRoomBooking() {
		return view ( 'store.formRoomBooking' );
	}
	public function viewLend() {
		return view ( 'store.formLend' );
	}
	public function viewBring() {
		return view ( 'store.formBring' );
	}
	public function viewRepair() {
		return view ( 'store.formRepair' );
	}
}
