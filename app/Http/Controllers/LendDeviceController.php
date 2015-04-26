<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Device;
use App\LendDevice;
use App\LendDeviceType;
use App\LendDeviceDetail;
use DateUtils;

class LendDeviceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $lendDevice = new LendDevice ();
        $data = $lendDevice->all()->toArray();
        
        return view('store.manageLendDevice')->with('lendDevices', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('store.formLendDevice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $lendDevice = new LendDevice();
        $lendDevice->lend_device_type_id = '1';
        $lendDevice->lend_no = $input ['lendNo'];
        $lendDevice->purpose = $input ['purpose'];
        $lendDevice->rent_person = $input ['rentPerson'];
        $lendDevice->email = $input ['email'];
        $lendDevice->approvement = $input ['approvement'];
        $lendDevice->remark = $input ['remark'];
        $lendDevice->create_user = '1';
        $lendDevice->create_date = DateUtils::getDBDateTime();
        $lendDevice->update_user = '1';
        $lendDevice->update_date = DateUtils::getDBDateTime();
        $lendDevice->save();
        return redirect('viewManageLendDevice');
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
        $lendDevice = LendDevice::find($id);
        $data = $lendDevice;
        return view('store.formEditLendDevice')->with('lendDevice', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $lendDevice = LendDevice::find($id);
        $lendDevice->lend_device_type_id = '1';
        $lendDevice->lend_no = $input ['lendNo'];
        $lendDevice->purpose = $input ['purpose'];
        $lendDevice->rent_person = $input ['rentPerson'];
        $lendDevice->email = $input ['email'];
        $lendDevice->approvement = $input ['approvement'];
        $lendDevice->remark = $input ['remark'];
        $lendDevice->update_user = '1';
        $lendDevice->update_date = DateUtils::getDBDateTime();
        $lendDevice->save();
        return redirect('viewManageLendDevice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        $lendDevice = LendDevice::find($id);
        $lendDevice->delete();
        return redirect('viewManageLendDevice');
    }

}
