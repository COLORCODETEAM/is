@extends('store.app')
@section('content')
<?php 
    $lendDevice = $compact['data'];
    $lendDeviceDetails = $compact['lendDeviceDetails'];
?>
{!! Form::open( ['route'=>['updateLendDevice',$lendDevice['id'] ]])  !!}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ยืม-คืนอุปกรณ์ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มยืม-คืนอุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Rent No : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="lendNo" value="{{$lendDevice['lend_no']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-3">Date : </label>
                            <div class="col-lg-2">
                                <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($lendDevice['create_date'])}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Purpose of use : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="purpose">{{$lendDevice['purpose']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Rent person : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="rentPerson" value="{{$lendDevice['rent_person']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Email address : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="email" value="{{$lendDevice['email']}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Start Date : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control datepicker" name="startTime" value="{{DateUtils::getDateFromStr($lendDevice['start_time'])}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                            <label class="control-label col-lg-2">Finish Date : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control datepicker" name="endTime" value="{{DateUtils::getDateFromStr($lendDevice['end_time'])}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List of rent
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
                                                @foreach ($lendDeviceDetails as $lendDeviceDetail)
                                                <tr>
                                                    <input type="hidden" flag="new" name="hiddenLendDeviceDetailId[]" value="{{ $lendDeviceDetail->id }}">
                                                    <td><a href-link="{{ route('delLendDeviceDetail',$lendDeviceDetail->id) }}" class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>
                                                    <td>{{ $lendDeviceDetail->device->device_no }}</td>
                                                    <td>{{ $lendDeviceDetail->device->description }}</td>
                                                    <td><input class="form-control" name="amount[]" disabled value="{{ $lendDeviceDetail->amount }}"/></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <button type="button" id="openDeviceItemsBtn" page="lend-device" class="pull-right btn btn-primary" data-toggle="modal" data-target="#deviceItemsPopup" data-whatever="@mdo">Add Items</button>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Approvement : </label>
                            <div class="col-lg-2">
                                <select class="form-control" name="approvement">
                                    <option value="1" {{ ($lendDevice['approvement']=='1' ? 'selected' : '') }}>OK</option>
                                    <option value="0" {{ ($lendDevice['approvement']=='0' ? 'selected' : '') }}>CANCEL</option>
                                </select>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Rmark : </label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="remark">{{$lendDevice['remark']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
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
{!! Form::close()!!}
@stop 