@extends('store.app')
@section('content')
{!! Form::open(array('url'=>'addRoomBooking')) !!}
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
                                <input class="form-control" name="bookingNo"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-3">วันที่ : </label>
                            <div class="col-lg-2">
                                <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDate()}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Events : </label>
                            <div class="col-lg-6">
                                <input class="form-control" name="events"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Purpose of use : </label>
                            <div class="col-lg-6">
                                <input class="form-control" name="purpose"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Contact person : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="contactPerson"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Email address : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Date of Event : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control datepicker" name="eventDate" value="{{DateUtils::getDate()}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <label class="control-label col-lg-2">Start time : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control timepicker" name="startTime"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                            <label class="control-label col-lg-2">Finish time : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control timepicker" name="endTime"/>
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
                                        <option value="{{$room['id']}}">{{$room['name']}}</option>
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
                                    <!-- /.table-responsive -->
                                    <button type="button" id="openDeviceItemsBtn" page="room-booking" class="pull-right btn btn-primary">Add Items</button>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right">OK</button>
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