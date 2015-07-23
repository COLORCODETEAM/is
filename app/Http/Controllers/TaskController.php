<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Task;
use DateUtils;
use Helper;

class TaskController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // ผู้ร้องขอ
        // ผู้มอบหมายงาน
        // ผู้รับมอบหมายงาน
        xxxx
        $data = Task::where('flag', '=', '1')
                ->where('flag', '=', '1')
                ->orderBy('create_date', 'desc')->get();
        
        return view('store.manageTask')->with('tasks', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createRequestRoom() {
//        $users = $compact['users'];
//        $documentNumber = $compact['documentNumber'];
//        $priority = $compact['priority'];
        xxxx
        return view('store.formRequestRoom');
    }
    public function createRequestRepair() {
        xxxx
        return view('store.formRequestRepair');
    }
    public function createRequestOther() {
        xxxx
        return view('store.formRequestOther');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        
        // เช็ค hidden ว่ามาจากฟอร์มไหน
        // สร้างเอกสาร bookingRoom, Reprair, Other
        xxxx
        
        
        $input = Request::all();
        $task = new Task ();
        $task->request_no = $input ['requestNo'];
        $task->contact_person = $input ['contactPerson'];
        $task->assign_person = $input ['AssignPerson'];
        $task->description = $input ['description'];
        $task->priorty = $input ['priorty'];
        $task->create_user = Helper::loginUser();
        $task->create_date = DateUtils::getDBDateTime();
        $task->update_user = Helper::loginUser();
        $task->update_date = DateUtils::getDBDateTime();
        $task->flag = '1';
        $task->save();
        return redirect('viewManageTask');
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
        $data = Task::find($id);
        
        return view('store.formEditRequestRoom')->with('task', $data);
        return view('store.formEditRequestRepair')->with('task', $data);
        return view('store.formEditRequestOther')->with('task', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $task = Task::find($id);
        $task->request_no = $input ['requestNo'];
        $task->contact_person = $input ['contactPerson'];
        $task->assign_person = $input ['AssignPerson'];
        $task->description = $input ['description'];
        $task->priorty = $input ['priorty'];
        $task->update_user = Helper::loginUser();
        $task->update_date = DateUtils::getDBDateTime();
        $task->flag = '1';
        $task->save();
        return redirect('viewManageTask');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        xxxx
        Task::where('id', '=', $id)->update(['flag' => '0'], ['update_user' => Helper::loginUser()], 
                                            ['update_date' => DateUtils::getDBDateTime()]);
        
        return redirect('viewManageTask');
    }

}
