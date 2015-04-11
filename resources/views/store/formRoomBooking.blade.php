@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จองห้อง และอุปกรณ์ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มจองห้อง และอุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Order No : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-3">วันที่ : </label>
                            <div class="col-lg-2">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Events : </label>
                            <div class="col-lg-6">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Purpose of use : </label>
                            <div class="col-lg-6">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Contact person : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Email address : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Date of Event : </label>
                            <div class="col-lg-2">
                                <input class="form-control"/>
                            </div>
                            <label class="control-label col-lg-2">Start time : </label>
                            <div class="col-lg-2">
                                <input class="form-control"/>
                            </div>
                            <label class="control-label col-lg-2">Finish time : </label>
                            <div class="col-lg-2">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">Space needed (please select) : </label>
                            <div class="col-lg-2">
                                <select class="form-control">
                                        <option>ห้องแลป 1 </option>
                                        <option>ห้องแลป 2</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Service/equipment needed
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Item No.</th>
                                                    <th>Items</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>อุปกรณ์ 123</td>
                                                    <td>2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-offset-11">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">OK</button>
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
</form>
@stop