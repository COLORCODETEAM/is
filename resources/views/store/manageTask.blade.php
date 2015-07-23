@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการแจ้งงาน</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('RepairController@createRequestRoom')}}" class="loadingButton btn btn-primary">แจ้งขอจองห้อง</a>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('RepairController@createRequestRepair')}}" class="loadingButton btn btn-primary">แจ้งอุปกรณ์ขัดข้อง</a>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('RepairController@createRequestOther')}}" class="loadingButton btn btn-primary">แจ้งขอความช่วยเหลืออื่นๆ</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการแจ้งงาน
                                </div>
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Request No.</th>
                                                    <th>Date</th>
                                                    <th>Request Person</th>>
                                                    <th>Contact Person</th>
                                                    <th>Priority</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tasks as $task)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editTask',$task['id'])}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delTask',$task['id'])}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$task['request_no']}}</td>
                                                    <td>{{date('d/m/Y', strtotime($task['create_date']))}}</td>
                                                    <td>{{$task->userRequest->firstname}} {{$task->userRequest->lastname}}</td>
                                                    <td>{{$task->userContact->firstname}} {{$task->userContact->lastname}}</td>
                                                    <td>{{$task['priority']}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop       