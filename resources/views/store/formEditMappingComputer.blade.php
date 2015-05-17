@extends('store.app')
@section('content')
<?php
$computer = $compact['data'];
$rooms = $compact['rooms'];
?>
{!! Form::open( ['route'=>['updateMappingComputer',$computer['id'] ]])  !!}
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
                                        <input class="form-control" name="mappingNo" value="{{$computer['mapping_no']}}" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4 col-lg-offset-4">Date : </label>
                                    <div class="col-lg-4">
                                        <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($computer['create_date'])}}"/>
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
                                        <input class="form-control" name="computerName" value="{{$computer['computer_name']}}" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Serial number : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="serialNo" value="{{$computer['serial_no']}}" required/>
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
                                        <input class="form-control" name="ip" value="{{$computer['ip']}}" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Product-Key OS : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="productKey" value="{{$computer['product_key_os']}}" required/>
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
                                        <input class="form-control" name="brand" value="{{$computer['brand']}}" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">CPU : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="cpu" value="{{$computer['cpu']}}" required/>
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
                                        <input class="form-control" name="model" value="{{$computer['model']}}" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">RAM : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="ram" value="{{$computer['ram']}}" required/>
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
                                        <input class="form-control" name="os" value="{{$computer['os']}}" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Video card : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="vga" value="{{$computer['video_card']}}" required/>
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
                                        <input class="form-control" name="hdd" value="{{$computer['hdd']}}" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">CD/DVD : </label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="cd" value="{{$computer['cd_dvd']}}" required/>
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
                                        <option value="1" {{ ($computer['antivirus']=='1' ? 'selected' : '') }}>YES</option>
                                        <option value="0" {{ ($computer['antivirus']=='0' ? 'selected' : '') }}>NO</option>
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
                                        <option value="1" {{ ($computer['status']=='1' ? 'selected' : '') }}>WORKING</option>
                                        <option value="0" {{ ($computer['status']=='0' ? 'selected' : '') }}>NO</option>
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
                                                <option value="{{$room['id']}}" {{$room['selected']}}>{{$room['name']}}</option>
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
                                            <input class="form-control" name="room" value="{{$computer['room']}}"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label col-lg-6">Remark : </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" name="remark" value="{{$computer['remark']}}"/>
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