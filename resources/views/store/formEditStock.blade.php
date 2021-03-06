@extends('store.app')
@section('content')
{!! Form::open( ['route'=>['updateStock',$stock['id'] ]])  !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">จัดการคลัง </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                จัดการคลัง
            </div>
            <div class="panel-body">
                <div class="form-horizontal">      
                    <div class="form-group">
                        <label class="control-label col-lg-2">Stock No : </label>
                        <div class="col-lg-3"> 
                            <input class="form-control" name="stockNo" value="{{$stock['stock_no']}}" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Name : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="stockName" value="{{$stock['name']}}" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Description : </label>
                        <div class="col-lg-6">
                            <textarea class="form-control" rows="3" name="description" >{{$stock['description']}}</textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary pull-right">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop