@extends('store.app')
@section('content')
<?php
$users = $compact['users'];
$documentNumber = $compact['documentNumber'];
$rooms = $compact['rooms'];
?>
{!! Form::open(array('url'=>'addRoomBooking')) !!}
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
                                        <input class="form-control" value="{{$documentNumber}}" disabled/>
                                        <input type="hidden" name="bookingNo" value="{{$documentNumber}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                    <div class="col-lg-4">
                                        <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDate()}}"/>
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
                                        <input class="form-control" name="events"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Purpose of use : </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" rows="3" name="purpose"></textarea>
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
                                        <textarea class="form-control" rows="3" name="description"></textarea>
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
                                            <option value="{{$user['id']}}">{{$user['firstname']}} {{$user['lastname']}}</option>
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
                                        <input class="form-control" name="email"/>
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
                                                <input class="form-control datepicker" name="eventDate" value="{{DateUtils::getDate()}}" required/>
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
                                                <input class="form-control timepicker" name="startTime" required/>
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
                                                <input class="form-control timepicker" name="endTime" required/>
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
                                            <option value="{{$room['id']}}">{{$room['name']}}</option>
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
                                <button type="submit" class="btn btn-primary pull-right">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop