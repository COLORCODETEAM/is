<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Device;
use App\DeviceType;
use App\Stock;
use Illuminate\Support\Facades\DB;
use DateUtils;

class DeviceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = Device::where('flag', '=', '1')->get();
        
        return view('store.manageDevice')->with('devices', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $stocks = Stock::where('flag', '=', '1')->get();
        $deviceTypes = DeviceType::all()->toArray();
        
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
        $device->create_user = '1';
        $device->create_date = DateUtils::getDBDateTime();
        $device->update_user = '1';
        $device->update_date = DateUtils::getDBDateTime();
        $device->flag = '1';
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
        $data = Device::find($id);
        $stocks = Stock::where('flag', '=', '1')->get();
        $deviceTypes = DeviceType::where('flag', '=', '1')->get();
        
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
        $device->update_user = '1';
        $device->update_date = DateUtils::getDBDateTime();
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
        Device::where('id', '=', $id)->update(['flag' => '0']);
        
        return redirect('viewManageDevice');
    }

    public function listAvailableDeviceItems() {
        $devices = DB::select('select * from view_availableDevice');

        foreach ($devices as $device) {
            $row['id'] = $device->id;
            $row['stockName'] = $device->stock_name;
            $row['deviceNo'] = $device->device_no;
            $row['brand'] = $device->brand;
            $row['model'] = $device->model;
            $row['description'] = $device->description;
            $row['serialNo'] = $device->serial_no;
            $row['warranty'] = $device->warranty;
            $row['amount'] = $device->amount;
            
            $rows[] = $row;
        }
        
        return json_encode($rows);
    }
    
    public function deviceInformation($id) {
        $device = Device::find($id);        
        
        $row['stock_name'] = $device->stock->name;
        $row['id'] = $device->id;
        $row['device_type_id'] = $device->device_type_id;
        $row['device_no'] = $device->device_no;
        $row['brand'] = $device->brand;
        $row['model'] = $device->model;
        $row['ip_address'] = $device->ip_address;
        $row['description'] = $device->description;
        $row['serial_no'] = $device->serial_no;
        $row['warranty'] = $device->warranty;
        $row['amount'] = $device->amount;
        $row['create_user'] = $device->create_user;
        $row['create_date'] = $device->create_date;
        $row['update_user'] = $device->update_user;
        $row['update_date'] = $device->update_date;
        $row['flag'] = $device->flag;
               
        $rows[] = $row;
        
        return json_encode($rows);
    }
}
