@extends('store.app')
@section('content')
{!! Form::open( ['route'=>['updateRepair',$repairDevice['id'] ]])  !!}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">แจ้งซ่อมอุปกรณ์</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มแจ้งซ่อมอุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Repair No : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="repairNo" value="{{$repairDevice['repair_no']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-3">Date : </label>
                            <div class="col-lg-2">
                                <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($repairDevice['create_date'])}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Repair person : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="person" value="{{$repairDevice['person']}}"/>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการส่งซ่อม
                                </div>
                                <!-- /.panel-heading -->
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
                                <button type="button" id="openDeviceItemsBtn" page="repair" class="pull-right btn btn-primary" data-toggle="modal" data-target="#deviceItemsPopup" data-whatever="@mdo">Add Items</button>
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
                                    <option value="1" {{ ($repairDevice['approvement']=='1' ? 'selected' : '') }}>OK</option>
                                    <option value="0" {{ ($repairDevice['approvement']=='0' ? 'selected' : '') }}>CANCEL</option>
                                </select>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Date of Approved : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control datepicker" name="approvedDate" value="{{DateUtils::getDateFromStr($repairDevice['approved_date'])}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Received by : </label>
                            <div class="col-lg-2">
                                <input class="form-control" name="receivedBy" value="{{$repairDevice['received_by']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Date of Received : </label>
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <input class="form-control datepicker" name="receivedDate" value="{{DateUtils::getDateFromStr($repairDevice['received_date'])}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
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
{!! Form::close() !!}
@stop