@extends('store.app')
@section('content')
{!! Form::open( ['route'=>['updateRoom',$room['id'] ]])  !!}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">จัดการห้อง และอุปกรณ์ </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                จัดการห้อง และอุปกรณ์
            </div>
            <div class="panel-body">
                <div class="form-horizontal">      
                    <div class="form-group">

                        <label class="control-label col-lg-2">Room No : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="roomNo" value="{{$room['room_no']}}" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Name : </label>
                        <div class="col-lg-3">
                            <input class="form-control" name="roomName" value="{{$room['name']}}" required/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Description : </label>
                        <div class="col-lg-6">
                            <textarea class="form-control" rows="3" name="description" >{{$room['description']}}</textarea>
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
<!-- </form>  -->
@stop