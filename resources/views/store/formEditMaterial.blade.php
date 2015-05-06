@extends('store.app')
@section('content')
<?php
$material = $compact['data'];
$stocks = $compact['stocks'];
?>
{!! Form::open( ['route'=>['updateMaterial',$material['id'] ]])  !!}
<!--form role="form"-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">จัดการวัสดุ </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                จัดการวัสดุ
            </div>
            <div class="panel-body">
                <div class="form-horizontal">    
                    <div class="form-group">
                        <label class="control-label col-lg-2">Stock : </label>
                        <div class="col-lg-3">
                            <select class="form-control" name="stockId" required>
                                @foreach($stocks as $stock)
                                <option value="{{$stock['id']}}" {{$stock['selected']}}>{{$stock['name']}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Item No : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="materialNo" value="{{$material['material_no']}} required"/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Brand : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="brand" value="{{$material['brand']}} required"/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Model : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="model" value="{{$material['model']}} required"/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Description : </label>
                        <div class="col-lg-6">
                            <textarea class="form-control" rows="3" name="description">{{$material['description']}}</textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Serial No. : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="serialNo" value="{{$material['serial_no']}}" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Amount : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="amount" type="number" value="{{$material['amount']}}" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary pull-right">Update</button>
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
{!! Form::close()!!}
<!--/form-->
@stop  