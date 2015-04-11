@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการอุปกรณ์ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    จัดการอุปกรณ์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">      
                        <div class="form-group">
                            <label class="control-label col-lg-2">Item No : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Brand : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Model : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Serial No. : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">IP. : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Amount : </label>
                            <div class="col-lg-3">
                                <input class="form-control"/>
                            </div>
                        </div>
                    </div>
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