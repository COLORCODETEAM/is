@extends('store.app')
@section('content')
<?php 
    $roomBooking = $compact['data'];
    $rooms = $compact['rooms'];
?>
{!! Form::open( ['route'=>['updateRoomBooking',$roomBooking['id'] ]])  !!}
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จองห้อง และอุปกรณ์ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มจองห้อง และอุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Booking No : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="bookingNo" value="{{$roomBooking['booking_no']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-3">วันที่ : </label>
                            <div class="col-lg-2">
                                <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($roomBooking['create_date'])}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Events : </label>
                            <div class="col-lg-6">
                                <input class="form-control" name="events" value="{{$roomBooking['events']}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Purpose of use : </label>
                            <div class="col-lg-6">
                                <input class="form-control" name="purpose" value="{{$roomBooking['events']}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="description">{{$roomBooking['description']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Contact person : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="contactPerson" value="{{$roomBooking['contact_person']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Email address : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="email" value="{{$roomBooking['email']}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Date of Event : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control datepicker" name="eventDate" value="{{DateUtils::getDateFromStr($roomBooking['start_time'])}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <label class="control-label col-lg-2">Start time : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control timepicker" name="startTime" value="{{DateUtils::getTimeFromStr($roomBooking['start_time'])}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                            <label class="control-label col-lg-2">Finish time : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control timepicker" name="endTime" value="{{DateUtils::getTimeFromStr($roomBooking['end_time'])}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">Space needed (please select) : </label>
                            <div class="col-lg-2">
                                <select class="form-control" name="roomId">
                                    @foreach($rooms as $room)
                                        <option value="{{$room['id']}}" {{$room['selected']}}>{{$room['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Service/equipment needed
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Item No.</th>
                                                    <th>Items</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>อุปกรณ์ 123</td>
                                                    <td>2</td>
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
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                        </div>
                    </div>
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