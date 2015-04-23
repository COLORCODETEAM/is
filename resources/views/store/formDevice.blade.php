@extends('store.app')
@section('content')
<?php
    $stocks = $compact['stocks'];
    $deviceTypes = $compact['deviceTypes'];
?>
{!! Form::open(array('url'=>'addDevice')) !!}
<!--form role="form"-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการอุปกรณ์ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    จัดการอุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Stock : </label>
                            <div class="col-lg-3">
                                <select class="form-control" name="stockId">
                                    @foreach($stocks as $stock)
                                    <option value="{{$stock['id']}}">{{$stock['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Device Type : </label>
                            <div class="col-lg-3">
                                <select class="form-control" name="deviceTypeId">
                                    @foreach($deviceTypes as $deviceType)
                                    <option value="{{$deviceType['id']}}">{{$deviceType['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Item No : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="deviceNo"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Brand : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="brand"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Model : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="model"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Serial No. : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="serialNo"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Warranty : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="warranty"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">IP. : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="ipAddress"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Amount : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="amount"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-offset-11">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">OK</button>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
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
<!--/form-->
@stop 