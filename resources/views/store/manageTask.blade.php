@extends('store.app')
@section('content')
<?php
$tasks = $compact['data'];
$priority = $compact['priority'];
$taskType = $compact['taskType'];
?>
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
                        <div class="col-lg-12">
                            <div class="form-group">
                                <a href="{{ action('TaskController@createRequestRoom')}}" class="loadingButton btn btn-primary">{{$taskType['7']}}</a>
                                <a href="{{ action('TaskController@createRequestRepair')}}" class="loadingButton btn btn-primary">{{$taskType['8']}}</a>
                                <a href="{{ action('TaskController@createRequestOther')}}" class="loadingButton btn btn-primary">{{$taskType['9']}}</a>
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
                                                    <th>Request</th>
                                                    <th>Request No.</th>
                                                    <th>Date</th>
                                                    <th>Request Person</th>
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
                                                    <td>
                                                        @foreach($taskType as $tmp => $val)
                                                            @if ($task['task_type']==$tmp)
                                                                {{$val}}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>{{$task['request_no']}}</td>
                                                    <td>{{date('d/m/Y', strtotime($task['create_date']))}}</td>
                                                    <td>{{$task->userRequest->firstname}} {{$task->userRequest->lastname}}</td>
                                                    <td>@if (isset($task->userContact->firstname)) $task->userContact->firstname @endif
                                                        @if (isset($task->userContact->lastname)) $task->userContact->lastname @endif
                                                    </td>
                                                    <td>
                                                        @foreach($priority as $tmp => $val)
                                                            @if ($task['priority']==$tmp)
                                                                {{$val}}
                                                            @endif
                                                        @endforeach
                                                    </td>
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