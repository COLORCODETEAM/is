<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Task;
use App\TaskDetail;
use App\RepairDevice;
use App\RepairDeviceDetail;
use App\User;
use App\Room;
use DateUtils;
use Helper;

class TaskController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = array();
        if (Helper::isAdmin() || Helper::isManager()) {
            $data = Task::where('flag', '=', '1')
                            ->orderBy('create_date', 'desc')->get();
        } else if (Helper::isSupport()) {
            $data = Task::where('flag', '=', '1')
                            ->where('contact_person', '=', Helper::loginUser())
                            ->orderBy('create_date', 'desc')->get();
        } else if (Helper::isUser()) {
            $data = Task::where('flag', '=', '1')
                            ->where('create_user', '=', Helper::loginUser())
                            ->orderBy('create_date', 'desc')->get();
        }
        $priority = Helper::get_arr_priority();
        $taskType = array("7" => "แจ้งขอจองห้อง", "8" => "แจ้งอุปกรณ์ขัดข้อง", "9" => "แจ้งขอความช่วยเหลืออื่นๆ");

        return view('store.manageTask')->with('compact', compact('data', 'priority', 'taskType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createRequestRoom() {
        $documentNumber = Helper::get_running_number("7", "6");
        $users = User::where('user_role_id', '=', '3')->get();
        $priority = Helper::get_arr_priority();
        $rooms = Room::where('flag', '=', '1')->get();

        return view('store.formRequestRoom')->with('compact', compact('users', 'documentNumber', 'priority', 'rooms'));
    }

    public function createRequestRepair() {
        $documentNumber = Helper::get_running_number("8", "6");
        $users = User::where('user_role_id', '=', '3')->get();
        $priority = Helper::get_arr_priority();

        return view('store.formRequestRepair')->with('compact', compact('users', 'documentNumber', 'priority'));
    }

    public function createRequestOther() {
        $documentNumber = Helper::get_running_number("9", "6");
        $users = User::where('user_role_id', '=', '3')->get();
        $priority = Helper::get_arr_priority();

        return view('store.formRequestOther')->with('compact', compact('users', 'documentNumber', 'priority'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $task = new Task ();
        $task->task_type = $input['formType'];
        $task->request_no = $input ['requestNo'];
        if (isset($input ['contactPerson'])) {
            $task->contact_person = $input ['contactPerson'];
            $task->assign_person = Helper::loginUser();
        }
        $task->topic = $input ['topic'];
        if (isset($input['events'])) {
            $task->events = $input ['events'];
        }
        if (isset($input['roomId'])) {
            $task->room = $input ['roomId'];
        }
        if (isset($input['eventDate']) && isset($input['startTime']) && isset($input['endTime'])) {
            $task->start_time = DateUtils::getConcatDBDateTime($input['eventDate'], $input ['startTime']);
            $task->end_time = DateUtils::getConcatDBDateTime($input['eventDate'], $input ['endTime']);
        }
        $task->description = $input ['description'];
        if (isset($input['priority'])) {
            $task->priority = $input ['priority'];
        }
        $task->create_user = Helper::loginUser();
        $task->create_date = DateUtils::getDBDateTime();
        $task->update_user = Helper::loginUser();
        $task->update_date = DateUtils::getDBDateTime();
        $task->flag = '1';
        $task->save();

        if ($input['formType'] == '8') {
            // Save task details
            if (isset($input['hiddenDeviceId'])) {
                $items = $input ['hiddenDeviceId'];
                $i = 0;
                foreach ($items as $item) {
                    $detail = new TaskDetail();
                    $detail->equipment_id = $item;
                    $detail->symptom = $input ['symptom'][$i];
                    $detail->flag = '1';

                    $details[] = $detail;
                    $i++;
                }
                $task->taskDetail()->saveMany($details);
            }
        }

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

        if ($data['task_type'] == '7') {
            $rooms_list = Room::where('flag', '=', '1')->get();
            $rooms = Helper::get_selected_room_list($rooms_list, $data['room']);
            $users = Helper::get_selected_user_list(User::all()->toArray(), $data['contact_person']);

            return view('store.formEditRequestRoom')->with('compact', compact('data', 'rooms', 'users'));
        } else if ($data['task_type'] == '8') {
            $users = Helper::get_selected_user_list(User::all()->toArray(), $data['contact_person']);
            $task_details = TaskDetail::where('flag', '=', '1')
                    ->where('task_id', '=', $data['id'])
                    ->get();
            $priority = Helper::get_arr_priority();

            return view('store.formEditRequestRepair')->with('compact', compact('data', 'users', 'task_details', 'priority'));
        } else if ($data['task_type'] == '9') {
            $users = User::where('user_role_id', '=', '3')->get();
            $priority = Helper::get_arr_priority();

            return view('store.formEditRequestOther')->with('compact', compact('data', 'users', 'priority'));
        }
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

        if (isset($input ['contactPerson'])) {
            $task->contact_person = $input ['contactPerson'];
            $task->assign_person = Helper::loginUser();
        }

        if (Helper::loginUser() == $task->create_user) {
            $task->topic = $input ['topic'];
            $task->description = $input ['description'];
            $task->priority = $input ['priority'];
        }
        $task->update_user = Helper::loginUser();
        $task->update_date = DateUtils::getDBDateTime();

        // Create real document & start work flow
        if ($input['formType'] == '7') {
            if (isset($task->assign_person)) {
                $bookingRoom = new BookingRoom ();
                $bookingRoom->room_id = $task->room;
                $bookingRoom->booking_no = Helper::get_running_number("2", "6");
                $bookingRoom->events = $task->events;
                $bookingRoom->description = $task->descriptoin;
                $bookingRoom->contact_person = $task->assign_person;
                $bookingRoom->start_time = DateUtils::getDBDateTimeFromStr($task->start_time);
                $bookingRoom->end_time = DateUtils::getDBDateTimeFromStr($task->end_time);
                $bookingRoom->create_user = Helper::loginUser();
                $bookingRoom->create_date = DateUtils::getDBDateTime();
                $bookingRoom->update_user = Helper::loginUser();
                $bookingRoom->update_date = DateUtils::getDBDateTime();
                $bookingRoom->flag = '1';
                $bookingRoom->save();

                $task->task_job = $bookingRoom->id;
            }
            $task->save();
        } else if ($input['formType'] == '8') {
            if (isset($task->assign_person)) {
                $repairDevice = new RepairDevice ();
                $repairDevice->repair_no = Helper::get_running_number("5", "6");
                $repairDevice->person = $task->contact_person;
                $repairDevice->create_user = Helper::loginUser();
                $repairDevice->create_date = DateUtils::getDBDateTime();
                $repairDevice->update_user = Helper::loginUser();
                $repairDevice->update_date = DateUtils::getDBDateTime();
                $repairDevice->flag = '1';
                $repairDevice->save();

                // Save Repair details
                $task_details = TaskDetail::where('flag', '=', '1')
                        ->where('task_id', '=', $task->id)
                        ->get();

                foreach ($task_details as $detail) {
                    $detail = new RepairDeviceDetail();
                    $detail->device_id = $detail->equipment_id;
                    $detail->symptom = $detail->symptom;
                    $detail->flag = '1';

                    $details[] = $detail;
                }
                $repairDevice->repairDeviceDetail()->saveMany($details);

                $task->task_job = $repairDevice->id;
            }
            $task->save();

            // Save Task details
            if (isset($input['hiddenDeviceId'])) {
                $items = $input ['hiddenDeviceId'];
                $i = 0;
                foreach ($items as $item) {
                    $detail = new TaskDetail();
                    $detail->equipment_id = $item;
                    $detail->symptom = $input ['symptom'][$i];
                    $detail->flag = '1';

                    $details[] = $detail;
                    $i++;
                }
                $task->taskDetail()->saveMany($details);
            }
        } else if ($input['formType'] == '9') {
            $task->save();
        }

        return redirect('viewManageTask');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        Task::where('id', '=', $id)->update(['flag' => '0'], ['update_user' => Helper::loginUser()], ['update_date' => DateUtils::getDBDateTime()]);

        return redirect('viewManageTask');
    }

    public function destroyDetail($id) {
        TaskDetail::where('id', '=', $id)->update(['flag' => '0']);
    }

}
