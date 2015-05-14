@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการผู้ใช้-คลัง</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('UserStockController@create')}}" class="loadingButton btn btn-primary">เพิ่มผู้ใช้-คลัง</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการผู้ใช้-คลัง
                                </div>
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Stock No.</th>
                                                    <th>Stock Name</th>
                                                    <th>Firstname Lastname</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($userStocks as $userStock)
                                                <?php
                                                $stock = $userStock->stock;
                                                $user = $userStock->user;                                                
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editUserStock',$userStock->id)}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delUserStock',$userStock->id)}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$stock->stock_no}}</td>
                                                    <td>{{$stock->name}}</td>
                                                    <td>{{$user->firstname}} {{$user->lastname}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop