@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการจองห้องแลป และอุปกรณ์</h1>
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
                                <a href="{{ action('UserController@viewFormRoomBooking')}}"><button type="button" class="btn btn-primary">จองห้องแลป</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการจองห้องแลป และอุปกรณ์
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Booking No.</th>
                                                    <th>Room No.</th>
                                                    <th>Purpose</th>
                                                    <th>Date</th>
                                                    <th>Start time</th>
                                                    <th>Finish time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Booking-No 1</td>
                                                    <td>Room-No ROOM1</td>
                                                    <td>Purpose 1</td>
                                                    <td>11/04/2015</td>
                                                    <td>10.00</td>
                                                    <td>17.00</td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Booking-No 2</td>
                                                    <td>Room-No ROOM2</td>
                                                    <td>Purpose 2</td>
                                                    <td>11/04/2015</td>
                                                    <td>10.00</td>
                                                    <td>17.00</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Booking-No 3</td>
                                                    <td>Room-No ROOM3</td>
                                                    <td>Purpose 3</td>
                                                    <td>11/04/2015</td>
                                                    <td>10.00</td>
                                                    <td>17.00</td>
                                                </tr>
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