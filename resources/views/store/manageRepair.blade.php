@extends('store.app')
@section('content')
<form role="form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">รายการแจ้งซ่อมอุปกรณ์</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="form-group">
                                <a href="formRepair.html"><button type="button" class="btn btn-primary">แจ้งซ่อม</button></a>
                            </div>
                        </div>
                        <!-- /.col-lg-5 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    รายการส่งซ่อม
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th>Engine version</th>
                                                    <th>CSS grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 4.0</td>
                                                    <td>Win 95+</td>
                                                    <td class="center">4</td>
                                                    <td class="center">X</td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 5.0</td>
                                                    <td>Win 95+</td>
                                                    <td class="center">5</td>
                                                    <td class="center">C</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 5.5</td>
                                                    <td>Win 95+</td>
                                                    <td class="center">5.5</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="even gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 6</td>
                                                    <td>Win 98+</td>
                                                    <td class="center">6</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 7</td>
                                                    <td>Win XP SP2+</td>
                                                    <td class="center">7</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="even gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Trident</td>
                                                    <td>AOL browser (AOL desktop)</td>
                                                    <td>Win XP</td>
                                                    <td class="center">6</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Firefox 1.0</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td class="center">1.7</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Firefox 1.5</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td class="center">1.8</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Firefox 2.0</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td class="center">1.8</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Firefox 3.0</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td class="center">1.9</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Camino 1.0</td>
                                                    <td>OSX.2+</td>
                                                    <td class="center">1.8</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Camino 1.5</td>
                                                    <td>OSX.3+</td>
                                                    <td class="center">1.8</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Netscape 7.2</td>
                                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                    <td class="center">1.7</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Netscape Browser 8</td>
                                                    <td>Win 98SE+</td>
                                                    <td class="center">1.7</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Netscape Navigator 9</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td class="center">1.8</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.0</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td class="center">1</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.1</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td class="center">1.1</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.2</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td class="center">1.2</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.3</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td class="center">1.3</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.4</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td class="center">1.4</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.5</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td class="center">1.5</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <button type="button" class="form-control btn btn-default">แก้ไข</button>
                                                                    <button type="button" class="form-control btn btn-danger">ลบ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.6</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td class="center">1.6</td>
                                                    <td class="center">A</td>
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
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</form>
@stop