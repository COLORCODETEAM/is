@extends('store.app')
@section('content')
<?php
$documentNumber = $compact['documentNumber'];
$rooms = $compact['rooms'];
?>
{!! Form::open(array('url'=>'addMappingComputer')) !!}
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">คอมพิวเตอร์ </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มเครื่องคอมพิวเตอร์
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Mapping No : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="mappingNo" value="{{$documentNumber}}" disabled/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                    <div class="col-lg-4">
                                        <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDate()}}"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Computer name : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="computerName" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Serial number : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="serialNo" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">IP : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="ip" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Product-Key OS : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="productKey" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Brand : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="brand" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">CPU : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="cpu" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Model : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="model" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">RAM : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="ram" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">OS : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="os" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Video card : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="vga" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">HDD : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="hdd" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">CD/DVD : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="cd" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Antivirus : </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="antivirus" required>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                    </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Status : </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="status" required>
                                        <option value="1">WORKING</option>
                                        <option value="0">NO</option>
                                    </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Department : </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="roomId" required>
                                                @foreach($rooms as $room)
                                                <option value="{{$room['id']}}">{{$room['name']}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">room : </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" name="room"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Remark : </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" name="remark"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
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