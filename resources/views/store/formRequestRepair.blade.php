@extends('store.app')
@section('content')
<?php
$users = $compact['users'];
$documentNumber = $compact['documentNumber'];
$priority = $compact['priority'];
?>
{!! Form::open(array('url'=>'addTask')) !!}
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
                                    <input class="form-control disabled" value="{{$documentNumber}}" disabled/>
                                    <input type="hidden" name="requestNo" value="{{$documentNumber}}"/>
                                    <input type="hidden" name="formType" value="8"/>
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
                                <label class="control-label col-lg-2">Request person : </label>
                                <div class="col-lg-3">
                                    <input class="form-control" disabled name="requestPerson" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}"/>
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
                                    <input class="form-control" name="topic" />
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
                                <label class="control-label col-lg-6">Priority : </label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="priority">
                                        @foreach($priority as $tmp => $val)
                                            <option value="{{$tmp}}">{{$val}}</option>
                                        @endforeach
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
{!! Form::close() !!}
@stop
