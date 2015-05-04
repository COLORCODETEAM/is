@extends('store.app')
@section('content')
<?php 
    $bringMaterial = $compact['data'];
    $bringMaterialDetails = $compact['bringMaterialDetails'];
?>
{!! Form::open( ['route'=>['updateBringMaterial',$bringMaterial['id'] ]])  !!}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เบิก-จ่ายวัสดุ </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ฟอร์มเบิก-จ่ายวัสดุ
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Withdraw No : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="bringNo" value="{{$bringMaterial['bring_no']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-3">Date : </label>
                            <div class="col-lg-2">
                                <input class="form-control" disabled name="documentDate" value="{{DateUtils::getDateFromStr($bringMaterial['create_date'])}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Purpose of use : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="purpose">{{$bringMaterial['purpose']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description : </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="description">{{$bringMaterial['description']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Withdraw person : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="withdrawPerson" value="{{$bringMaterial['withdraw_person']}}"/>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Email address : </label>
                            <div class="col-lg-3">
                                <input class="form-control" name="email" value="{{$bringMaterial['email']}}"/>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List of Withdraw
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="items-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item No.</th>
                                                    <th>Items</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bringMaterialDetails as $bringMaterialDetail)
                                                <tr>
                                                    <input type="hidden" flag="new" name="hiddenBringMaterialDetailId[]" value="{{ $bringMaterialDetail->id }}">
                                                    <td><a href-link="{{ route('delBringMaterialDetail',$bringMaterialDetail->id) }}" class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>
                                                    <td>{{ $bringMaterialDetail->material->material_no }}</td>
                                                    <td>{{ $bringMaterialDetail->material->description }}</td>
                                                    <td><input class="form-control" name="amount[]" disabled value="{{ $bringMaterialDetail->amount }}"/></td>
                                                    <td>
                                                        <select class="form-control" name="status[]">
                                                            <option value="1" {{($bringMaterialDetail->status=='1'?'selected':'')}}>OK</option>
                                                            <option value="0" {{($bringMaterialDetail->status=='0'?'selected':'')}}>CANCEL</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" id="openMaterialItemsBtn" page="bring" class="pull-right btn btn-primary" data-toggle="modal" data-target="#materialItemsPopup" data-whatever="@mdo">Add Items</button>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Approvement : </label>
                            <div class="col-lg-2">
                                <select class="form-control" name="approvement">
                                    <option value="1" {{ ($bringMaterial['approvement']=='1' ? 'selected' : '') }}>OK</option>
                                    <option value="0" {{ ($bringMaterial['approvement']=='0' ? 'selected' : '') }}>CANCEL</option>
                                </select>
                            </div>
                            <label class="control-label col-lg-2 col-lg-offset-1">Rmark : </label>
                            <div class="col-lg-4">
                                <textarea class="form-control" rows="3" name="remark">{{$bringMaterial['remark']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
{!! Form::close()!!}
@stop       