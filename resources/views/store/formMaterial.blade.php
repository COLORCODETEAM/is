@extends('store.app')
@section('content')
<?php
$stocks = $compact['stocks'];
$materialTypes = $compact['materialTypes'];
?>
{!! Form::open(array('url'=>'addMaterial')) !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">จัดการวัสดุ </h1>
    </div>
</div>
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
                                <option value="{{$stock['id']}}">{{$stock['name']}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Material Type : </label>
                        <div class="col-lg-3">
                            <select class="form-control" name="materialTypeId" required>
                                @foreach($materialTypes as $materialType)
                                <option value="{{$materialType['id']}}">{{$materialType['name']}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Item No : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="materialNo" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Brand : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="brand" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Model : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="model" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Description : </label>
                        <div class="col-lg-6">
                            <textarea class="form-control" rows="3" name="description"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Serial No. : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="serialNo" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Amount : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="amount" type="number" value="1" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary pull-right">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close()!!}
@stop  