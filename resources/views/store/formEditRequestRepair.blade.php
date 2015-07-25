@extends('store.app')
@section('content')
<?php
$requestRepair = $compact['data'];
$users = $compact['users'];
$priority = $compact['priority'];
$taskDetails = $compact['task_details'];
?>
{!! Form::open( ['route'=>['updateTask',$requestRepair['id'] ]])  !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">แจ้งอุปกรณ์ขัดข้อง</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                ฟอร์มแจ้งอุปกรณ์ขัดข้อง
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Request No : </label>
                                <div class="col-lg-6">
                                    <input class="form-control disabled" value="{{$requestRepair['request_no']}}" disabled/>
                                    <input type="hidden" name="formType" value="8"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                <div class="col-lg-4">
                                    <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($requestRepair['create_date'])}}"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Request person : </label>
                                <div class="col-lg-3">
                                    <input class="form-control" disabled name="requestPerson" value="{{$requestRepair->userRequest->firstname}} {{$requestRepair->userRequest->lastname}}"/>
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
                                    <select class="form-control" name="contactPerson" {{Helper::canAssignDocument()}}>
                                        <option />
                                        @foreach($users as $user)
                                        <option value="{{$user['id']}}">{{$user['firstname']}} {{$user['lastname']}}</option>
                                        @endforeach
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Request Topic : </label>
                                <div class="col-lg-6">
                                    <input class="form-control" name="topic" value="{{$requestRepair['topic']}}" {{Helper::canEditDocument($requestRepair['create_user'])}}/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Description : </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" rows="3" name="description" {{Helper::canEditDocument($requestRepair['create_user'])}}>{{$requestRepair['description']}}</textarea>
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
                                            @foreach ($taskDetails as $taskDetail)
                                            <tr>
                                        <input type="hidden" flag="new" name="hiddenRepairDeviceDetailId[]" value="{{ $taskDetail->id }}">
                                        <td class="col-lg-2">
                                            <div class="col-lg-8" style="padding:0 0 0 5px;">
                                                <a href-link="{{ route('deviceInformation',$taskDetail->device_id) }}" class="deviceItemDetailPopup form-control btn btn-default">รายละเอียด</a>
                                            </div>
                                            <div class="col-lg-4" style="padding:0 0 0 5px;">
                                                <a href-link="{{ route('delTaskDetail',$taskDetail->id) }}" class="form-control btn btn-danger {{Helper::canEditDocument($requestRepair['create_user'])}}" data-confirm="table-items">ลบ</a>
                                            </div>
                                        </td>
                                        <td>{{ $taskDetail->device->device_no }}</td>
                                        <td>{{ $taskDetail->device->description }}</td>
                                        <td>{{ $taskDetail->device->serial_no }}</td>
                                        <td><input class="form-control" namee="symptom[]" disabled value="{{ $taskDetail->symptom }}"/></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" id="openDeviceItemsBtn" page="repair" class="pull-right btn btn-primary" {{Helper::canEditDocument($requestRepair['create_user'])}}>Add Items</button>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Priority : </label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="priority" {{Helper::canEditDocument($requestRepair['create_user'])}}>
                                        @foreach($priority as $tmp => $val)
                                            <option value="{{$tmp}}" {{$requestRepair['priority']==$tmp?'selected':''}}>{{$val}}</option>
                                        @endforeach
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary pull-right" style="margin-left:10px;">Update</button>
                            <button type="button" class="btn btn-primary pull-right" {{Helper::canOpenAsssignedDocument($requestRepair['contact_person'])}}>Open Document</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop
