@extends('store.app')
@section('content')

<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการคลังวัสดุ-อุปกรณ์</h1>
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
                                <a href="{{ action('UserController@viewFormStock')}}"><button type="button" class="btn btn-primary">เพิ่มคลัง</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
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
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Stock No.</th>
                                                    <th>Stock Name</th>
                                                    <th>Stock Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											@foreach($stocks as $stock)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{ route('editStock',$stock['id']) }}"><button type="button" class="form-control btn btn-default">แก้ไข</button></a>
                                                                    <a href="{{route('delStock',$stock['id'])}}"><button type="button" class="form-control btn btn-danger">ลบ</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$stock['stock_no']}}</td>
                                                    <td>{{$stock['name']}}</td>
                                                    <td>{{$stock['description']}}</td>
                                                </tr>
                                              @endforeach
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