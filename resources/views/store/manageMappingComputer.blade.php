@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการเครื่องคอมพิวเตอร์</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="{{ action('MappingComputerController@create')}}" class="loadingButton btn btn-primary">เพิ่มคอมพิวเตอร์</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการคอมพิวเตอร์
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>IP</th>
                                                    <th>OS</th>
                                                    <th>CPU</th>
                                                    <th>RAM</th>
                                                    <th>HDD</th>
                                                    <th>VGA</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($computers as $computer)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <a href="{{route('editMappingComputer',$computer->id)}}" class="loadingButton form-control btn btn-default">แก้ไข</a>
                                                                    <a href-link="{{route('delMappingComputer',$computer->id)}}" class="form-control btn btn-danger" data-confirm="manage-page">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$computer->computer_name}}</td>
                                                    <td>{{$computer->ip}}</td>
                                                    <td>{{$computer->os}}</td>
                                                    <td>{{$computer->cpu}}</td>
                                                    <td>{{$computer->ram}}</td>
                                                    <td>{{$computer->hdd}}</td>
                                                    <td>{{$computer->video_card}}</td>
                                                    <td>{{($computer->status=='1' ? 'WORKING':'NO')}}</td>
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