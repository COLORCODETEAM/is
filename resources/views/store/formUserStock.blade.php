@extends('store.app')
@section('content')
<?php
$users = $compact['users'];
?>
{!! Form::open(array('url'=>'addUserStock')) !!}
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการผู้ใช้-คลัง </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มจัดการผู้ใช้-คลัง
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">User : </label>
                            <div class="col-lg-3">
                                <select class="form-control" name="userId" required>
                                    @foreach($users as $users)
                                    <option value="{{$users['id']}}">{{$users['firstname']}} {{$users['lastname']}}</option>
                                    @endforeach
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Stock : </label>
                            <div class="col-lg-3">
                                <select class="form-control" name="stockId" required>
                                    
                                    <!--<option value="{{-- $stock['id'] --}}">{{-- $stock['name'] --}}</option>-->
                                   
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Name : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="name" required/>
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
                    </div>
                    <div class="form-horizontal">
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
</form>
@stop