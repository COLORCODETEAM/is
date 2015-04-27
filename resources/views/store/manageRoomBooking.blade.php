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
                                <a href="{{ action('RoomBookingController@create')}}"><button type="button" class="btn btn-primary">จองห้องแลป</button></a>
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
                                                @foreach($bookingRooms as $bookingRoom)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editRoomBooking',$bookingRoom->id)}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-default">แก้ไข</button>
                                                                    </a>
                                                                    <a href="{{route('delRoomBooking',$bookingRoom->id)}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-danger">ลบ</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$bookingRoom->booking_no}}</td>
                                                    <td>{{$bookingRoom->room->room_no}}</td>
                                                    <td>{{$bookingRoom->purpose}}</td>
                                                    <td>{{DateUtils::getDateFromStr($bookingRoom->start_time)}}</td>
                                                    <td>{{DateUtils::getTimeFromStr($bookingRoom->start_time)}}</td>
                                                    <td>{{DateUtils::getTimeFromStr($bookingRoom->end_time)}}</td>
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