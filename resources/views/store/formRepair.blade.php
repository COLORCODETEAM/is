@extends('store.app')
@section('content')
{!! Form::open(array('url'=>'addRepair')) !!}
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
                            <input class="form-control" name="repairNo"/>
                        </div>
                        <label class="control-label col-lg-2 col-lg-offset-3">Date : </label>
                        <div class="col-lg-2">
                            <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDate()}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Repair person : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="person"/>
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
                                                <th>ItemNo.</th>
                                                <th>Item Description</th>
                                                <th>Serial No.</th>
                                                <th>อาการขัดข้อง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>123</td>
                                                <td>อุปกรณ์ 123</td>
                                                <td>sn-123</td>
                                                <td>
                                                    <input class="form-control" name="symptom[]"/>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" id="openDeviceItemsBtn" class="pull-right btn btn-primary" data-toggle="modal" data-target="#deviceItemsPopup" data-whatever="@mdo">Add Items</button>
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
                                <option value="1">OK</option>
                                <option value="0">CANCEL</option>
                            </select>
                        </div>
                        <label class="control-label col-lg-2 col-lg-offset-1">Date of Approved : </label>
                        <div class="col-lg-2">
                            <div class="input-group">
                                <input class="form-control datepicker" name="approvedDate"/>
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Received by : </label>
                        <div class="col-lg-2">
                            <input class="form-control" name="receivedBy"/>
                        </div>
                        <label class="control-label col-lg-2 col-lg-offset-1">Date of Received : </label>
                        <div class="col-lg-2">
                            <div class="input-group">
                                <input class="form-control datepicker" name="receivedDate"/>
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 (nested) -->
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary pull-right">OK</button>
                        </div>
                    </div>
                    <!-- /.col-lg-5 (nested) -->
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

<!-- Modal Popup -->
<div id="deviceItemsPopup" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Items</h4>
            </div>
            <div class="modal-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-deviceItemsPopup">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Stock</th>
                                <th>Item No.</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Item Description</th>
                                <th>Serial No.</th>
                                <th>Warranty</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="itemCbx[]"></td>
                                <td>stock1</td>
                                <td>Item 1</td>
                                <td>tttt</td>
                                <td>bbbb</td>
                                <td>aaaaa</td>
                                <td>xxxxxx No.</td>
                                <td>1</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="itemCbx[]"></td>
                                <td>stock2</td>
                                <td>Item 2</td>
                                <td>tttt</td>
                                <td>yyyyyy</td>
                                <td>ttttttt</td>
                                <td>xxxxxx No.</td>
                                <td>1</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="addDeviceItemsBtn" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
@stop
