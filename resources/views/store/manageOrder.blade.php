@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการสั่งซื้อวัสดุ-อุปกรณ์</h1>
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
                                <a href="{{ action('OrderController@create')}}"><button type="button" class="btn btn-primary">สั่งซื้อ</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการสั่งซื้อวัสดุ-อุปกรณ์
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Purchase No.</th>
                                                    <th>Date</th>
                                                    <th>Purpose</th>
                                                    <th>Order by</th>
                                                    <th>Received by</th>
                                                    <th>Check by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editOrder',$order['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-default">แก้ไข</button>
                                                                    </a>
                                                                    <a href="{{route('delOrder',$order['id'])}}">
                                                                        <button type="button"
                                                                                class="form-control btn btn-danger">ลบ</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$order['order_no']}}</td>
                                                    <td>{{DateUtils::getDateFromStr($order['order_date'])}}</td>
                                                    <td>{{$order['purpose']}}</td>
                                                    <td>{{$order['order_by']}}</td>
                                                    <td>{{$order['received_by']}}</td>
                                                    <td>{{$order['checked_by']}}</td>
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