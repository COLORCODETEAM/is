@extends('store.app')
@section('content')
<?php
$users = $compact['users'];
$documentNumber = $compact['documentNumber'];
?>
{!! Form::open(array('url'=>'addLendDevice')) !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">ยืม-คืนอุปกรณ์ </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                ฟอร์มยืม-คืนอุปกรณ์
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Rent No : </label>
                                <div class="col-lg-6">
                                    <input class="form-control" value="{{$documentNumber}}" disabled/>
                                    <input type="hidden" name="lendNo" value="{{$documentNumber}}"/>
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
                                <label class="control-label col-lg-2">Purpose of use : </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" rows="3" name="purpose"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Rent person : </label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="rentPerson" required>
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
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Start Date : </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control datepicker" name="startTime" value="{{DateUtils::getDate()}}" required/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Finish Date : </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control datepicker" name="endTime" value="{{DateUtils::getDate()}}" required/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
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
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" id="openDeviceItemsBtn" page="lend-device" class="pull-right btn btn-primary">Add Items</button>
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
                                        <option value="1">OK</option>
                                        <option value="0">CANCEL</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="control-label col-lg-3">Remark : </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" rows="3" name="remark"></textarea>
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
{!! Form::close()!!}
@stop 