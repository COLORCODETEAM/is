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
                                <a href="{{ action('MaterialController@create')}}"><button type="button" class="btn btn-primary">เพิ่มวัสดุ</button></a>
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
                                                    <th>Item Brand</th>
                                                    <th>Item Model</th>
                                                    <th>Item Description</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($materials as $material)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                   <a href="{{route('editMaterial',$material['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-default">แก้ไข</button>
                                                                    </a>
                                                                    <a href="{{route('delMaterial',$material['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-danger">ลบ</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$material['material_no']}}</td>
                                                    <td>{{$material['brand']}}</td>
                                                    <td>{{$material['model']}}</td>
                                                    <td>{{$material['description']}}</td>
                                                    <td>{{$material['amount']}}</td>
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