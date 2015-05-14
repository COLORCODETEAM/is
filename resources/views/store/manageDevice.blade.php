@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการอุปกรณ์</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('DeviceController@create')}}" class="loadingButton btn btn-primary">เพิ่มอุปกรณ์</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการอุปกรณ์
                                </div>
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item No.</th>
                                                    <th>Item Brand</th>
                                                    <th>Item Model</th>
                                                    <th>Item Description</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($devices as $device)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editDevice',$device['id'])}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delDevice',$device['id'])}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$device['device_no']}}</td>
                                                    <td>{{$device['brand']}}</td>
                                                    <td>{{$device['model']}}</td>
                                                    <td>{{$device['description']}}</td>
                                                    <td>{{$device['amount']}}</td>
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