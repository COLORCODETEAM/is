@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการเบิก-จ่ายวัสดุ</h1>
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
                                <a href="{{ action('UserController@viewFormBring')}}"><button type="button" class="btn btn-primary">เบิกวัสดุ</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการเบิก-จ่ายวัสดุ
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Withdraw No.</th>
                                                    <th>Date</th>
                                                    <th>Person</th>
                                                    <th>Purpose</th>
                                                    <th>Approvement</th>
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
                                                    <td>Withdraw-No 1</td>
                                                    <td>11/04/2015</td>
                                                    <td>Staff-1</td>
                                                    <td>Withdraw-Purpose 1</td>
                                                    <td>OK</td>
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
                                                    <td>Withdraw-No 2</td>
                                                    <td>11/04/2015</td>
                                                    <td>Staff-2</td>
                                                    <td>Withdraw-Purpose 2</td>
                                                    <td>OK</td>
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
                                                    <td>Withdraw-No 3</td>
                                                    <td>11/04/2015</td>
                                                    <td>Staff-3</td>
                                                    <td>Withdraw-Purpose 3</td>
                                                    <td>OK</td>
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