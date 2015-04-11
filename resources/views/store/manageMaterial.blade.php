@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการวัสดุ</h1>
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
                                <a href="{{ action('UserController@viewFormMaterial')}}"><button type="button" class="btn btn-primary">เพิ่มวัสดุ</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการวัสดุ
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item No.</th>
                                                    <th>Item Name</th>
                                                    <th>Item Description</th>
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
                                                    <td>Item-No 1</td>
                                                    <td>Item-Name 1</td>
                                                    <td>Item-Description 1</td>
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
                                                    <td>Item-No 2</td>
                                                    <td>Item-Name 2</td>
                                                    <td>Item-Description 2</td>
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
                                                    <td>Item-No 3</td>
                                                    <td>Item-Name 3</td>
                                                    <td>Item-Description 3</td>
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