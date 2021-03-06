@extends('store.app')
@section('content')
<?php
$repairDevice = $compact['data'];
$repairDeviceDetails = $compact['repairDeviceDetails'];
$users = $compact['users'];
$users_received = $compact['users_received'];
?>
{!! Form::open( ['route'=>['updateRepair',$repairDevice['id'] ]])  !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">แจ้งซ่อมอุปกรณ์</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                ฟอร์มแจ้งซ่อมอุปกรณ์
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Repair No : </label>
                                <div class="col-lg-6">
                                    <input class="form-control" name="repairNo" value="{{$repairDevice['repair_no']}}" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                <div class="col-lg-4">
                                    <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($repairDevice['create_date'])}}"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Contact person : </label>
                                <div class="col-lg-3">
                                    <select class="form-control" name="person" required>
                                        @foreach($users as $user)
                                        <option value="{{$user['id']}}" {{$user['selected']}}>{{$user['firstname']}} {{$user['lastname']}}</option>
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
                                รายการส่งซ่อม
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="items-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ItemNo.</th>
                                                <th>Item Description</th>
                                                <th>Serial No.</th>
                                                <th>อาการขัดข้อง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($repairDeviceDetails as $repairDeviceDetail)
                                            <tr>
                                        <input type="hidden" flag="new" name="hiddenRepairDeviceDetailId[]" value="{{ $repairDeviceDetail->id }}">
                                        <td class="col-lg-2">
                                            <div class="col-lg-8" style="padding:0 0 0 5px;">
                                                <a href-link="{{ route('deviceInformation',$repairDeviceDetail->device_id) }}" class="deviceItemDetailPopup form-control btn btn-default">รายละเอียด</a>
                                            </div>
                                            <div class="col-lg-4" style="padding:0 0 0 5px;">
                                                <a href-link="{{ route('delRepairDetail',$repairDeviceDetail->id) }}" class="form-control btn btn-danger" data-confirm="table-items">ลบ</a>
                                            </div>
                                        </td>
                                        <td>{{ $repairDeviceDetail->device->device_no }}</td>
                                        <td>{{ $repairDeviceDetail->device->description }}</td>
                                        <td>{{ $repairDeviceDetail->device->serial_no }}</td>
                                        <td><input class="form-control" namee="symptom[]" disabled value="{{ $repairDeviceDetail->symptom }}"/></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" id="openDeviceItemsBtn" page="repair" class="pull-right btn btn-primary">Add Items</button>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Approvement : </label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="approvement">
                                        <option value="1" {{ ($repairDevice['approvement']=='1' ? 'selected' : '') }}>OK</option>
                                        <option value="0" {{ ($repairDevice['approvement']=='0' ? 'selected' : '') }}>CANCEL</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Date of Approved : </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control datepicker" name="approvedDate" value="{{DateUtils::getDateFromStr($repairDevice['approved_date'])}}"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Received by : </label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="receivedBy">
                                        @foreach($users_received as $user_received)
                                        <option value="{{$user_received['id']}}" {{$user_received['selected']}}>{{$user_received['firstname']}} {{$user_received['lastname']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Date of Received : </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control datepicker" name="receivedDate" value="{{DateUtils::getDateFromStr($repairDevice['received_date'])}}"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
{!! Form::close() !!}
@stop