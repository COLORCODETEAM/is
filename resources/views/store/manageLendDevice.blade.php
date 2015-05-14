@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการยืม-คืนอุปกรณ์</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('LendDeviceController@create')}}" class="loadingButton btn btn-primary">ยืมอุปกรณ์</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการยืม-คืนอุปกรณ์
                                </div>
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Rent No.</th>
                                                    <th>Person</th>
                                                    <th>Purpose</th>
                                                    <th>Start time</th>
                                                    <th>Finish time</th>
                                                    <th>Approvement</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($lendDevices as $lendDevice)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editLendDevice',$lendDevice['id'])}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delLendDevice',$lendDevice['id'])}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$lendDevice['lend_no']}}</td>
                                                    <td>{{$lendDevice['rent_person']}}</td>
                                                    <td>{{$lendDevice['purpose']}}</td>
                                                    <td>{{DateUtils::getDateFromStr($lendDevice['start_time'])}}</td>
                                                    <td>{{DateUtils::getDateFromStr($lendDevice['end_time'])}}</td>
                                                    <td>{{($lendDevice['approvement']=='1' ? 'OK':'CANCEL')}}</td>
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