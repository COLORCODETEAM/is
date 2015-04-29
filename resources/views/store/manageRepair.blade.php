@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการแจ้งซ่อมอุปกรณ์</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
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
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการส่งซ่อม
                                </div>
                                <!-- /.panel-heading -->
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
                                                                    <a href="{{route('editRepair',$repairDevice['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-default">แก้ไข</button>
                                                                    </a>
                                                                    <a href="{{route('delRepair',$repairDevice['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-danger">ลบ</button>
                                                                    </a>
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
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</form>
@stop       