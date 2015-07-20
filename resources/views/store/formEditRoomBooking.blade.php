@extends('store.app')
@section('content')
<?php
$roomBooking = $compact['data'];
$rooms = $compact['rooms'];
$roomBookingDetails = $compact['bookingRoomDetails'];
$users = $compact['users'];
?>
{!! Form::open( ['route'=>['updateRoomBooking',$roomBooking['id'] ]])  !!}
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จองห้อง และอุปกรณ์ </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มจองห้อง และอุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Booking No : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="bookingNo" value="{{$roomBooking['booking_no']}}" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                    <div class="col-lg-4">
                                        <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($roomBooking['create_date'])}}"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Events : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="events" value="{{$roomBooking['events']}}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Purpose of use : </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" rows="3" name="purpose">{{$roomBooking['events']}}</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Description : </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" rows="3" name="description">{{$roomBooking['description']}}</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Contact person : </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="contactPerson" required>
                                            @foreach($users as $user)
                                            <option value="{{$user['id']}}" {{$user['selected']}}>{{$user['firstname']}} {{$user['lastname']}}</option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Email address : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="email" value="{{$roomBooking['email']}}"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Event : </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input class="form-control datepicker" name="eventDate" value="{{DateUtils::getDateFromStr($roomBooking['start_time'])}}" required/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Start time : </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input class="form-control timepicker" name="startTime" value="{{DateUtils::getTimeFromStr($roomBooking['start_time'])}}" required/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Finish time : </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input class="form-control timepicker" name="endTime" value="{{DateUtils::getTimeFromStr($roomBooking['end_time'])}}" required/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Space needed (please select) : </label>
                                    <div class="col-lg-2">
                                        <select class="form-control" name="roomId" required>
                                            @foreach($rooms as $room)
                                            <option value="{{$room['id']}}" {{$room['selected']}}>{{$room['name']}}</option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Service/equipment needed
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="items-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item No.</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($roomBookingDetails as $roomBookingDetail)
                                                <tr>
                                            <input type="hidden" flag="new" name="hiddenRoomBookingDetailId[]" value="{{ $roomBookingDetail->id }}">
                                            <td class="col-lg-2">
                                                <div class="col-lg-8" style="padding:0 0 0 5px;">
                                                    <a href-link="{{ route('deviceInformation',$roomBookingDetail->device_id) }}" class="deviceItemDetailPopup form-control btn btn-default">รายละเอียด</a>
                                                </div>
                                                <div class="col-lg-4" style="padding:0 0 0 5px;">
                                                    <a href-link="{{ route('delRoomBookingDetail',$roomBookingDetail->id) }}" class="form-control btn btn-danger" data-confirm="table-items">ลบ</a>
                                                </div>
                                            </td>
                                            <td>{{ $roomBookingDetail->device->device_no }}</td>
                                            <td>{{ $roomBookingDetail->device->description }}</td>
                                            <td><input class="form-control" name="amount[]" disabled value="{{ $roomBookingDetail->amount }}"/></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" id="openDeviceItemsBtn" page="room-booking" class="pull-right btn btn-primary">Add Items</button>
                                </div>
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
            </div>
        </div>
    </div>
</form>
@stop