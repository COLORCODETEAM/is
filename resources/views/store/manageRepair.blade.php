@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการแจ้งซ่อมอุปกรณ์</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('RepairController@create')}}"><button type="button" class="btn btn-primary">แจ้งซ่อม</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการส่งซ่อม
                                </div>
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Repair No.</th>
                                                    <th>Date</th>
                                                    <th>Person</th>
                                                    <th>Approvement</th>
                                                    <th>Received by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($repairDevices as $repairDevice)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editRepair',$repairDevice['id'])}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delRepair',$repairDevice['id'])}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$repairDevice['repair_no']}}</td>
                                                    <td>{{date('d/m/Y', strtotime($repairDevice['create_date']))}}</td>
                                                    <td>{{$repairDevice['person']}}</td>
                                                    <td>{{($repairDevice['approvement']=='1' ? 'OK':'CANCEL')}}</td>
                                                    <td>{{$repairDevice['received_by']}}</td>
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