<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Device;

class DeviceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $device = new Device ();
        $data = $device->all()->toArray();
        // var_dump($data);
        return view('store.manageDevice')->with('devices', $data);
        // return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('store.formDevice');
        // return "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $device = new Device ();
        $device->stock_id = $input ['stockId'];
        $device->device_type_id = $input ['deviceTypeId'];
        $device->device_no = $input ['deviceNo'];
        $device->brand = $input ['brand'];
        $device->model = $input ['model'];
        $device->ip_address = $input ['ipAddress'];
        $device->description = date('description');
        $device->serial_no = date('serialNo');
        $device->warranty = date('warranty');
        $device->amount = date('amount');
        $device->save();
        return redirect('viewManageDevice');
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
        $device = Device::find($id);
        $data = $device;
        return view('store.formEditDevice')->with('device', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $device = Device::find($id);
        $device->stock_id = $input ['stockId'];
        $device->device_type_id = $input ['deviceTypeId'];
        $device->device_no = $input ['deviceNo'];
        $device->brand = $input ['brand'];
        $device->model = $input ['model'];
        $device->ip_address = $input ['ipAddress'];
        $device->description = date('description');
        $device->serial_no = date('serialNo');
        $device->warranty = date('warranty');
        $device->amount = date('amount');
        $device->save();
        return redirect('viewManageDevice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        $device = Device::find($id);
        $device->Device();
        return redirect('viewManageDevice');
    }

}
