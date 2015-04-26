@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการยืม-คืนอุปกรณ์</h1>
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
                                <a href="{{ action('LendDeviceController@create')}}"><button type="button" class="btn btn-primary">ยืมอุปกรณ์</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการยืม-คืนอุปกรณ์
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Rent No.</th>
                                                    <th>Date</th>
                                                    <th>Person</th>
                                                    <th>Purpose</th>
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
                                                                    <a href="{{route('editLendDevice',$lendDevice['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-default">แก้ไข</button>
                                                                    </a>
                                                                    <a href="{{route('delLendDevice',$lendDevice['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-danger">ลบ</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$lendDevice['lend_no']}}</td>
                                                    <td>{{$lendDevice['create_date']}}</td>
                                                    <td>{{$lendDevice['rent_person']}}</td>
                                                    <td>{{$lendDevice['purpose']}}</td>
                                                    <td>{{($lendDevice['approvement']=='1' ? 'OK':'CANCEL')}}</td>
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