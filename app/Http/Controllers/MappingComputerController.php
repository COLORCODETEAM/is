<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\MappingComputer;
use DateUtils;
use Helper;
use App\Room;

class MappingComputerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = MappingComputer::where('flag', '=', '1')
                ->orderBy('create_date', 'desc')->get();
        
        return view('store.manageMappingComputer')->with('computers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $rooms = Room::where('flag', '=', '1')->get();
        
        return view('store.formMappingComputer')->with('rooms', $rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $mappingComputer = new MappingComputer ();
        $mappingComputer->room_id = $input ['roomId'];
        $mappingComputer->mapping_no = $input ['mappingNo'];
        $mappingComputer->computer_name = $input ['computerName'];
        $mappingComputer->serial_no = $input ['serialNo'];
        $mappingComputer->ip = $input ['ip'];
        $mappingComputer->os = $input ['os'];
        $mappingComputer->product_key_os = $input ['productKey'];
        $mappingComputer->brand = $input ['brand'];
        $mappingComputer->model = $input ['model'];
        $mappingComputer->cpu = $input ['cpu'];
        $mappingComputer->ram = $input ['ram'];
        $mappingComputer->video_card = $input ['vga'];
        $mappingComputer->hdd = $input ['hdd'];
        $mappingComputer->cd_dvd = $input ['cd'];
        $mappingComputer->antivirus = $input ['antivirus'];
        $mappingComputer->status = $input ['status'];
        $mappingComputer->room = $input ['room'];
        $mappingComputer->remark = $input ['remark'];
        $mappingComputer->create_user = Helper::loginUser();
        $mappingComputer->create_date = DateUtils::getDBDateTime();
        $mappingComputer->update_user = Helper::loginUser();
        $mappingComputer->update_date = DateUtils::getDBDateTime();
        $mappingComputer->flag = '1';
        $mappingComputer->save();
        
        return redirect('viewManageMappingComputer');
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
        $data = MappingComputer::find($id);
        $rooms = Room::where('flag', '=', '1')->get();

        foreach ($rooms as &$tmp) {
            if ($data['room_id'] == $tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }
        return view('store.formEditMappingComputer')->with('compact', compact('data', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $mappingComputer = MappingComputer::find($id);
        $mappingComputer->room_id = $input ['roomId'];
        $mappingComputer->mapping_no = $input ['mappingNo'];
        $mappingComputer->computer_name = $input ['computerName'];
        $mappingComputer->serial_no = $input ['serialNo'];
        $mappingComputer->ip = $input ['ip'];
        $mappingComputer->os = $input ['os'];
        $mappingComputer->product_key_os = $input ['productKey'];
        $mappingComputer->brand = $input ['brand'];
        $mappingComputer->model = $input ['model'];
        $mappingComputer->cpu = $input ['cpu'];
        $mappingComputer->ram = $input ['ram'];
        $mappingComputer->video_card = $input ['vga'];
        $mappingComputer->hdd = $input ['hdd'];
        $mappingComputer->cd_dvd = $input ['cd'];
        $mappingComputer->antivirus = $input ['antivirus'];
        $mappingComputer->status = $input ['status'];
        $mappingComputer->room = $input ['room'];
        $mappingComputer->remark = $input ['remark'];
        $mappingComputer->update_user = Helper::loginUser();
        $mappingComputer->update_date = DateUtils::getDBDateTime();
        $mappingComputer->save();
        
        return redirect('viewManageMappingComputer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        MappingComputer::where('id', '=', $id)->update(['flag' => '0']);
        
        return redirect('viewManageMappingComputer');
    }

}
