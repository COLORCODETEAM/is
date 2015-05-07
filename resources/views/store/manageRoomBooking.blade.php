@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการจองห้องแลป และอุปกรณ์</h1>
        </div>
    </div>
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
                    </div>
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
                                                    <th>Contact person</th>
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
                                                                    <a href="{{route('editRoomBooking',$bookingRoom->id)}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delRoomBooking',$bookingRoom->id)}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$bookingRoom->booking_no}}</td>
                                                    <td>{{$bookingRoom->room->room_no}}</td>
                                                    <td>{{$bookingRoom->purpose}}</td>
                                                    <td>{{$bookingRoom->contact_person}}</td>
                                                    <td>{{DateUtils::getDateFromStr($bookingRoom->start_time)}}</td>
                                                    <td>{{DateUtils::getTimeFromStr($bookingRoom->start_time)}}</td>
                                                    <td>{{DateUtils::getTimeFromStr($bookingRoom->end_time)}}</td>
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