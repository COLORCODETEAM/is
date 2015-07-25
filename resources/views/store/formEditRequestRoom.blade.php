@extends('store.app')
@section('content')
<?php
$requestRoom = $compact['data'];
$users = $compact['users'];
$rooms = $compact['rooms'];
?>
{!! Form::open(array('url'=>'addTask')) !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">แจ้งขอจองห้อง</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                ฟอร์มแจ้งขอจองห้อง
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Request No : </label>
                                <div class="col-lg-6">
                                    <input class="form-control disabled" value="{{$requestRoom['request_no']}}" disabled/>
                                    <input type="hidden" name="formType" value="7"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                <div class="col-lg-4">
                                    <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($requestRoom['create_date'])}}"/>
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
                                    <input class="form-control" disabled name="requestPerson" value="{{$requestRoom->userRequest->firstname}} {{$requestRoom->userRequest->lastname}}"/>
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
                                    <input class="form-control" name="topic" value="{{$requestRoom['topic']}}" {{Helper::canEditDocument($requestRoom['create_user'])}}/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Events : </label>
                                <div class="col-lg-6">
                                    <input class="form-control" name="events" value="{{$requestRoom['events']}}" {{Helper::canEditDocument($requestRoom['create_user'])}}/>
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
                                    <textarea class="form-control" rows="3" name="description" {{Helper::canEditDocument($requestRoom['create_user'])}}>{{$requestRoom['description']}}</textarea>
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
                                            <input class="form-control datepicker" name="eventDate" value="{{DateUtils::getDateFromStr($requestRoom['start_time'])}}" {{Helper::canEditDocument($requestRoom['create_user'])}} />
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
                                            <input class="form-control timepicker" name="startTime" value="{{DateUtils::getTimeFromStr($requestRoom['start_time'])}}" {{Helper::canEditDocument($requestRoom['create_user'])}} />
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
                                            <input class="form-control timepicker" name="endTime" value="{{DateUtils::getTimeFromStr($requestRoom['end_time'])}}" {{Helper::canEditDocument($requestRoom['create_user'])}} />
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
                                <label class="control-label col-lg-2">Room : </label>
                                <div class="col-lg-2">
                                    <select class="form-control" name="roomId" {{Helper::canEditDocument($requestRoom['create_user'])}} >
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
                <div class="form-horizontal">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right" style="margin-left:10px;">Update</button>
                            <button type="button" class="btn btn-primary pull-right" {{Helper::canOpenAsssignedDocument($requestRoom['contact_person'])}}>Open Document</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop
