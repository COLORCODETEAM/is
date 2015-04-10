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
        public function viewManageStock() {
		return view ( 'store.manageStock' );
	}
        public function viewManageMaterial() {
		return view ( 'store.manageMaterial' );
	}
	public function viewManageDevice() {
		return view ( 'store.manageDevice' );
	}
	public function viewManageRoom() {
		return view ( 'store.manageRoom' );
	}
	public function viewManageOrder() {
		return view ( 'store.manageOrder' );
	}
	public function viewManageRoomBooking() {
		return view ( 'store.manageRoomBooking' );
	}
	public function viewManageLend() {
		return view ( 'store.manageLend' );
	}
	public function viewManageBring() {
		return view ( 'store.manageBring' );
	}
	public function viewManageRepair() {
		return view ( 'store.manageRepair' );
	}
	public function viewFormStock() {
		return view ( 'store.formStock' );
	}
	public function viewFormMaterial() {
		return view ( 'store.formMaterial' );
	}
	public function viewFormDevice() {
		return view ( 'store.formDevice' );
	}
	public function viewFormRoom() {
		return view ( 'store.formRoom' );
	}
	public function viewFormOrder() {
		return view ( 'store.formOrder' );
	}
	public function viewFormRoomBooking() {
		return view ( 'store.formRoomBooking' );
	}
	public function viewFormLend() {
		return view ( 'store.formLend' );
	}
	public function viewFormBring() {
		return view ( 'store.formBring' );
	}
	public function viewFormRepair() {
		return view ( 'store.formRepair' );
	}
}
