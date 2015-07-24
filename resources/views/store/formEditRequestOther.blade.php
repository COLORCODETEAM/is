@extends('store.app')
@section('content')
<?php
$requestOther = $compact['data'];
$users = $compact['users'];
$priority = $compact['priority'];
?>
{!! Form::open( ['route'=>['updateTask',$requestOther['id'] ]])  !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">แจ้งขอความช่วยเหลืออื่นๆ</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                ฟอร์มแจ้งขอความช่วยเหลืออื่นๆ
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Request No : </label>
                                <div class="col-lg-6">
                                    <input class="form-control disabled" value="{{$requestOther['request_no']}}" disabled/>
                                    <input type="hidden" name="formType" value="9"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                <div class="col-lg-4">
                                    <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($requestOther['create_date'])}}"/>
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
                                    <input class="form-control" disabled name="requestPerson" value="{{$requestOther->userRequest->firstname}} {{$requestOther->userRequest->lastname}}"/>
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
                </div>
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Request Topic : </label>
                                <div class="col-lg-6">
                                    <input class="form-control" name="topic" value="{{$requestOther['topic']}}" {{Helper::canEditDocument($requestOther['create_user'])}}/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Description : </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" rows="3" name="description" {{Helper::canEditDocument($requestOther['create_user'])}}>{{$requestOther['description']}}</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Priority : </label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="priority" {{Helper::canEditDocument($requestOther['create_user'])}}>
                                        @foreach($priority as $tmp => $val)
                                            <option value="{{$tmp}}" {{$requestOther['priority']==$tmp?'selected':''}}>{{$val}}</option>
                                        @endforeach
                                    </select>
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
