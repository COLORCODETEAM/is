@extends('store.app')
@section('content')
<?php
$order = $compact['data'];
$orderDetails = $compact['orderDetails'];
$users = $compact['users'];
$users_received = $compact['users_received'];
$users_checked = $compact['users_checked'];
?>
{!! Form::open( ['route'=>['updateOrder',$order['id'] ]])  !!}
<form>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">สั่งซื้อวัสดุ-อุปกรณ์ </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มสั่งซื้อวัสดุ-อุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Order No : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="orderNo" value="{{$order['order_no']}}" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                    <div class="col-lg-4">
                                        <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($order['create_date'])}}"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Purpose of request : </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" rows="3" name="purpose">{{$order['purpose']}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการสั่งซื้อ
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="items-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item No.</th>
                                                    <th>Brand/Model/Description</th>
                                                    <th>Amount</th>
                                                    <th>Unit Price</th>
                                                    <th>Total</th>
                                                    <th>Remark</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orderDetails as $orderDetail)
                                                <tr>
                                            <input type="hidden" flag="new" name="hiddenItemNo[]" value="{{ $orderDetail->id }}">
                                            <td><a href-link="{{ route('delOrderDetail',$orderDetail->id) }}" class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>
                                            <td>{{ $orderDetail->item_no }}</td>
                                            <td>{{ $orderDetail->description }}</td>
                                            <td>{{ $orderDetail->amount }}</td>
                                            <td>{{ $orderDetail->unit_price }}</td>
                                            <td>{{ $orderDetail->amount*$orderDetail->unit_price }}</td>
                                            <td>{{ $orderDetail->remark }}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" id="openOrderItemsBtn" class="pull-right btn btn-primary">Add Items</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Order by : </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="orderBy">
                                                @foreach($users as $user)
                                                <option value="{{$user['id']}}" {{$user['selected']}}>{{$user['firstname']}} {{$user['lastname']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Order : </label>
                                        <div class="col-lg-6">
                                            <div class=" input-group">
                                                <input class="form-control datepicker" name="orderDate" value="{{DateUtils::getDateFromStr($order['order_date'])}}"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Approvement : </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="approvement">
                                                <option value="1" {{ ($order['approvement']=='1' ? 'selected' : '') }}>OK</option>
                                                <option value="0 "{{ ($order['approvement']=='0' ? 'selected' : '') }}>CANCEL</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Approved : </label>
                                        <div class="col-lg-6">
                                            <div class=" input-group">
                                                <input class="form-control datepicker" name="approvedDate" value="{{DateUtils::getDateFromStr($order['approved_date'])}}"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Received by : </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="receivedBy">
                                                @foreach($users_received as $user)
                                                <option value="{{$user['id']}}" {{$user['selected']}}>{{$user['firstname']}} {{$user['lastname']}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Received : </label>
                                        <div class="col-lg-6">
                                            <div class=" input-group">
                                                <input class="form-control datepicker" name="receivedDate" value="{{DateUtils::getDateFromStr($order['received_date'])}}"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Checked by : </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="checkedBy">
                                                @foreach($users_checked as $user)
                                                <option value="{{$user['id']}}" {{$user['selected']}}>{{$user['firstname']}} {{$user['lastname']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Checked : </label>
                                        <div class="col-lg-6">
                                            <div class=" input-group">
                                                <input class="form-control datepicker" name="checkedDate" value="{{DateUtils::getDateFromStr($order['checked_date'])}}"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
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
</form>
{!! Form::close() !!}
@stop