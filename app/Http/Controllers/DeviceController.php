<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Device;
use App\DeviceType;
use App\Stock;

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
        $stock = new Stock();
        $stocks = $stock->all()->toArray();
        
        $deviceType = new DeviceType();
        $deviceTypes = $deviceType->all()->toArray();
        
        return view('store.formDevice')->with('compact', compact('stocks', 'deviceTypes'));
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
        $device->description = $input ['description'];
        $device->serial_no = $input ['serialNo'];
        $device->warranty = $input ['warranty'];
        $device->amount = $input ['amount'];
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
        
        $stock = new Stock();
        $stocks = $stock->all()->toArray();
        
        $deviceType = new DeviceType();
        $deviceTypes = $deviceType->all()->toArray();
        
        foreach ( $stocks as &$tmp ) {
            if ($data['stock_id']==$tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }
        
        foreach ( $deviceTypes as &$tmp ) {
            if ($data['device_type_id']==$tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }
        
        return view('store.formEditDevice')->with('compact', compact('data', 'stocks', 'deviceTypes'));
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
        $device->description = $input ['description'];
        $device->serial_no = $input ['serialNo'];
        $device->warranty = $input ['warranty'];
        $device->amount = $input ['amount'];
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
        $device->delete();
        return redirect('viewManageDevice');
    }

}
