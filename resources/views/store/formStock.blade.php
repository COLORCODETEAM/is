@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการคลัง </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    จัดการคลัง
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>ชื่อคลัง : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Description : </label>
                            </div>
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการคลัง
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Stock No.</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>คลังอุปกรณ์ 1</td>
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