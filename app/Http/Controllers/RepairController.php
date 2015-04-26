<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Device;
use App\RepairDevice;
use App\RepairDeviceDetail;
use DateUtils;

class RepairController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $repairDevice = new RepairDevice ();
        $data = $repairDevice->all()->toArray();
        
        return view('store.manageRepair')->with('repairDevices', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('store.formRepair');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $repairDevice = new RepairDevice ();
        $repairDevice->repair_no = $input ['repairNo'];
        $repairDevice->person = $input ['person'];
        $repairDevice->approvement = $input ['approvement'];
        $repairDevice->approved_date = DateUtils::getDBDateTimeFromStr($input ['approvedDate']);
        $repairDevice->received_by = $input ['receivedBy'];
        $repairDevice->received_date = DateUtils::getDBDateTimeFromStr($input ['receivedDate']);
        $repairDevice->create_user = '1';
        $repairDevice->create_date = DateUtils::getDBDateTime();
        $repairDevice->update_user = '1';
        $repairDevice->update_date = DateUtils::getDBDateTime();
        $repairDevice->save();
        return redirect('viewManageRepair');
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
        $repairDevice = RepairDevice::find($id);
        $data = $repairDevice;
        return view('store.formEditRepair')->with('repairDevice', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $repairDevice = RepairDevice::find($id);
        $repairDevice->repair_no = $input ['repairNo'];
        $repairDevice->person = $input ['person'];
        $repairDevice->approvement = $input ['approvement'];
        $repairDevice->approved_date = DateUtils::getDBDateTimeFromStr($input ['approvedDate']);
        $repairDevice->received_by = $input ['receivedBy'];
        $repairDevice->received_date = DateUtils::getDBDateTimeFromStr($input ['receivedDate']);
        $repairDevice->update_user = '1';
        $repairDevice->update_date = DateUtils::getDBDateTime();
        $repairDevice->save();
        return redirect('viewManageRepair');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        $repairDevice = RepairDevice::find($id);
        $repairDevice->delete();
        return redirect('viewManageRepair');
    }

}
