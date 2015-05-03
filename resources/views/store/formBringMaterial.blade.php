@extends('store.app')
@section('content')
{!! Form::open(array('url'=>'addBringMaterial')) !!}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เบิก-จ่ายวัสดุ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มเบิก-จ่ายวัสดุ
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Withdraw No : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="bringNo"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-3">Date : </label>
                            <div class="col-lg-2">
                                <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDate()}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Purpose of use : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="purpose"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Withdraw person : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="withdrawPerson"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Email address : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="email"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List of Withdraw
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="items-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item No.</th>
                                                    <th>Item Description</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" id="openMaterialItemsBtn" page="bring" class="pull-right btn btn-primary" data-toggle="modal" data-target="#materialItemsPopup" data-whatever="@mdo">Add Items</button>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Approvement : </label>
                            <div class="col-lg-2">
                                <select class="form-control" name="approvement">
                                    <option value="1">OK</option>
                                    <option value="0">CANCEL</option>
                                </select>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Rmark : </label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="remark"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
{!! Form::close()!!}
@stop       