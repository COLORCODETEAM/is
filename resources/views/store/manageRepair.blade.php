@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการแจ้งซ่อมอุปกรณ์</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('RepairController@create')}}"><button type="button" class="btn btn-primary">แจ้งซ่อม</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
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
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Repair No.</th>
                                                    <th>Date</th>
                                                    <th>Person</th>
                                                    <th>Approvement</th>
                                                    <th>Received by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Repair-No 1</td>
                                                    <td>11/04/2015</td>
                                                    <td>Staff-1</td>
                                                    <td>OK</td>
                                                    <td>Staff-2</td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Repair-No 2</td>
                                                    <td>11/04/2015</td>
                                                    <td>Staff-2</td>
                                                    <td>OK</td>
                                                    <td>Staff-3</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Repair-No 3</td>
                                                    <td>11/04/2015</td>
                                                    <td>Staff-3</td>
                                                    <td>OK</td>
                                                    <td>Staff-4</td>
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