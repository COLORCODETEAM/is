@extends('store.app')
@section('content')
<form>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">สั่งซื้อวัสดุ-อุปกรณ์ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มสั่งซื้อวัสดุ-อุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>เลขที่ใบสั่งซื้อ : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-4 col-lg-offset-4">
                            <div class="form-group">
                                <label>วันที่ : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Purpose of request : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการสั่งซื้อ
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Item No.</th>
                                                    <th>Brand/Model/Description</th>
                                                    <th>Amount</th>
                                                    <th>Unit Price</th>
                                                    <th>Total</th>
                                                    <th>Remark</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>อุปกรณ์ 123</td>
                                                    <td>2</td>
                                                    <td>3,500</td>
                                                    <td>7,000</td>
                                                    <td>สินค้ามีแต่สีดำ</td>
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
                        <div class="col-lg-5">    
                            <div class="form-group">
                                <label>Order by : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Date of Order : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-5">                                    
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Approvement : </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-control">
                                        <option>OK</option>
                                        <option>CANCEL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Date of Approved : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Received by : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Date of Received : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Checked by : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Date of Checked : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
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