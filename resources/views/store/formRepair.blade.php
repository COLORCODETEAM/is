@extends('store.app')
@section('content')
{!! Form::open(array('url'=>'addRepair')) !!}
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
                                    <input class="form-control" name="repairNo" required/>
                                    <div class="help-block with-errors"></div>
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
                                <label class="control-label col-lg-2">Repair person : </label>
                                <div class="col-lg-3">
                                    <input class="form-control" name="person" required/>
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
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Date of Approved : </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control datepicker" name="approvedDate"/>
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
                                    <input class="form-control" name="receivedBy"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-lg-6">Date of Received : </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control datepicker" name="receivedDate"/>
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
