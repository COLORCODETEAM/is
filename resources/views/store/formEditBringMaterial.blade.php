@extends('store.app')
@section('content')
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
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Item No.</th>
                                                    <th>Items</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>อุปกรณ์ 123</td>
                                                    <td>1</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>ยืนยัน</option>
                                                            <option>ยกเลิก</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
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
                    </div>
                    <div class="row">
                        <div class="col-lg-offset-11">
                            <button type="submit" class="btn btn-primary">OK</button>
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