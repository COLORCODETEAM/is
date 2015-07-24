<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Device;
use App\LendDevice;
use App\LendDeviceType;
use App\LendDeviceDetail;
use DateUtils;
use App\User;
use Helper;

class LendDeviceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = LendDevice::where('flag', '=', '1')
                        ->where('create_user', '=', Helper::loginUser())
                        ->orderBy('create_date', 'desc')->get();
        
        return view('store.manageLendDevice')->with('lendDevices', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $documentNumber = Helper::get_running_number("4", "6");
        $users = User::all()->toArray();
        return view('store.formLendDevice')->with('compact', compact('users', 'documentNumber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $lendDevice = new LendDevice();
        $lendDevice->lend_no = $input ['lendNo'];
        $lendDevice->purpose = $input ['purpose'];
        $lendDevice->rent_person = $input ['rentPerson'];
        $lendDevice->email = $input ['email'];
        $lendDevice->start_time = DateUtils::getDBDateTimeFromStr($input ['startTime']);
        $lendDevice->end_time = DateUtils::getDBDateTimeFromStr($input ['endTime']);
        $lendDevice->approvement = $input ['approvement'];
        $lendDevice->remark = $input ['remark'];
        $lendDevice->create_user = Helper::loginUser();
        $lendDevice->create_date = DateUtils::getDBDateTime();
        $lendDevice->update_user = Helper::loginUser();
        $lendDevice->update_date = DateUtils::getDBDateTime();
        $lendDevice->flag = '1';
        $lendDevice->save();

        // save details
        if (isset($input ['hiddenDeviceId'])) {
            $items = $input ['hiddenDeviceId'];
            $i = 0;
            foreach ($items as $item) {
                $detail = new LendDeviceDetail();
                $detail->device_id = $item;
                $detail->amount = $input ['amount'][$i];
                $detail->flag = '1';

                $details[] = $detail;
                $i++;
            }
            $lendDevice->lendDeviceDetail()->saveMany($details);
        }

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
        $data = LendDevice::find($id);
        $lendDeviceDetails = LendDeviceDetail::where('flag', '=', '1')
                ->where('lend_device_id', '=', $id)
                ->get();
        $users = Helper::get_selected_user_list(User::all()->toArray(), $data['rent_person']);

        return view('store.formEditLendDevice')->with('compact', compact('data', 'lendDeviceDetails', 'users'));
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
        $lendDevice->purpose = $input ['purpose'];
        $lendDevice->rent_person = $input ['rentPerson'];
        $lendDevice->email = $input ['email'];
        $lendDevice->start_time = DateUtils::getDBDateTimeFromStr($input ['startTime']);
        $lendDevice->end_time = DateUtils::getDBDateTimeFromStr($input ['endTime']);
        $lendDevice->approvement = $input ['approvement'];
        $lendDevice->remark = $input ['remark'];
        $lendDevice->update_user = Helper::loginUser();
        $lendDevice->update_date = DateUtils::getDBDateTime();
        $lendDevice->save();

        // save details
        if (isset($input ['hiddenDeviceId'])) {
            $items = $input ['hiddenDeviceId'];
            $i = 0;
            foreach ($items as $item) {
                $detail = new LendDeviceDetail();
                $detail->device_id = $item;
                $detail->amount = $input ['amount'][$i];
                $detail->flag = '1';

                $details[] = $detail;
                $i++;
            }
            $lendDevice->lendDeviceDetail()->saveMany($details);
        }

        return redirect('viewManageLendDevice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        LendDevice::where('id', '=', $id)->update(['flag' => '0']);
        LendDeviceDetail::where('lend_device_id', '=', $id)->update(['flag' => '0']);

        return redirect('viewManageLendDevice');
    }

    public function destroyDetail($id) {
        LendDeviceDetail::where('id', '=', $id)->update(['flag' => '0']);
    }

}
