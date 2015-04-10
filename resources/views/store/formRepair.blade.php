@extends('store.app')
@section('content')
<form role="form">
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>เลขที่ใบแจ้งซ่อม : </label>
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
                                <label>ผู้ส่งซ่อม : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการส่งซ่อม
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
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
                                                    <td>เปิดไม่ติด</td>
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
                            <div class="row">
                                <div class="form-group form-horizontal">
                                    <label class="control-label col-lg-4">Approvement : </label>
                                    <div class="col-lg-6">
                                        <select class="form-control col-lg-4">
                                            <option>OK</option>
                                            <option>CANCEL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="form-group form-horizontal">
                                    <label class="control-label col-lg-5">Date of Approved : </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="form-group form-horizontal">
                                    <label class="control-label col-lg-4">Received by : </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="form-group form-horizontal">
                                    <label class="control-label col-lg-5">Date of Received : </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-offset-11">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">OK</button>
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
</form>
@stop