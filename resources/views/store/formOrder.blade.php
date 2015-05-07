@extends('store.app')
@section('content')
{!! Form::open(array('url'=>'addOrder')) !!}
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
                                        <input class="form-control" name="orderNo" required/>
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
                                    <label class="control-label col-lg-2">Purpose of request : </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" rows="3" name="purpose" required></textarea>
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
                                        <input class="form-control" name="orderBy" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Order : </label>
                                        <div class="col-lg-6">
                                        <div class=" input-group">
                                            <input class="form-control datepicker" name="orderDate" value="{{DateUtils::getDate()}}" required/>
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
                                        <div class=" input-group">
                                            <input class="form-control datepicker" name="approvedDate" value="{{DateUtils::getDate()}}" required/>
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
                                        <input class="form-control" name="receivedBy"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Received : </label>
                                        <div class="col-lg-6">
                                        <div class=" input-group">
                                            <input class="form-control datepicker" name="receivedDate" value="{{DateUtils::getDate()}}" required/>
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
                                        <input class="form-control" name="checkedBy"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Date of Checked : </label>
                                        <div class="col-lg-6">
                                        <div class=" input-group">
                                            <input class="form-control datepicker" name="checkedDate" value="{{DateUtils::getDate()}}" required/>
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
                                <button type="submit" class="btn btn-primary pull-right">OK</button>
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