@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการเบิก-จ่ายวัสดุ</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('BringMaterialController@create')}}" class="loadingButton btn btn-primary">เบิกวัสดุ</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการเบิก-จ่ายวัสดุ
                                </div>
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Withdraw No.</th>
                                                    <th>Date</th>
                                                    <th>Person</th>
                                                    <th>Purpose</th>
                                                    <th>Approvement</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bringMaterials as $bringMaterial)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editBringMaterial',$bringMaterial['id'])}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delBringMaterial',$bringMaterial['id'])}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$bringMaterial['bring_no']}}</td>
                                                    <td>{{DateUtils::getDateFromStr($bringMaterial['create_date'])}}</td>
                                                    <td>{{$bringMaterial['withdraw_person']}}</td>
                                                    <td>{{$bringMaterial['purpose']}}</td>
                                                    <td>{{($bringMaterial['approvement']=='1' ? 'OK':'CANCEL')}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop