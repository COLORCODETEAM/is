<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ระบบจัดการอุปกรณ์ และห้องแลป</title>

        <!-- Bootstrap Core CSS -->
        <link
            href="{{ asset('store/components/bootstrap/dist/css/bootstrap.min.css')}}"
            rel="stylesheet">

        <!-- Datepicker 1.4.0 -->
        <link
            href="{{ asset('store/components/bootstrap-datepicker-1.4.0/css/bootstrap-datepicker3.min.css')}}"
            rel='stylesheet' />

        <!-- Timepicker -->
        <link
            href="{{ asset('store/components/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}"
            rel='stylesheet' />

        <!-- MetisMenu CSS -->
        <link
            href="{{ asset('store/components/metisMenu/dist/metisMenu.min.css')}}"
            rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('store/dist/css/timeline.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('store/components/morrisjs/morris.css')}}"
              rel="stylesheet">

        <!-- DataTables CSS -->
        <link
            href="{{ asset('store/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}"
            rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link
            href="{{ asset('store/components/datatables-responsive/css/dataTables.responsive.css')}}"
            rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('store/dist/css/sb-admin-2.css')}}"
              rel="stylesheet">

        <!-- Custom Fonts -->
        <link
            href="{{ asset('store/components/font-awesome/css/font-awesome.min.css')}}"
            rel="stylesheet" type="text/css">

        <!-- Calendar CSS -->
        <link
            href="{{ asset('store/components/fullcalendar/fullcalendar.css')}}"
            rel='stylesheet' />	
    </head>

    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation"
                 style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ action('UserController@index')}}">ระบบจัดการอุปกรณ์
                        และห้องแลป</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li style="padding-left: 15px;"><span> สวัสดี, Admin</span></li>
                    <li class="dropdown"><a class="dropdown-toggle"
                                            data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i
                                class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> ตั้งค่า
                                    ข้อมูลผู้ใช้</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>
                                    ออกจากระบบ</a></li>
                        </ul> <!-- /.dropdown-user --></li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><a href="{{ action('UserController@index')}}"><i
                                        class="fa fa-folder-open fa-fw"></i> การจัดการ<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="{{ action('StockController@index')}}">จัดการคลัง</a></li>
                                    <li><a href="{{ action('MaterialController@index')}}">จัดการวัสดุ</a></li>
                                    <li><a href="{{ action('DeviceController@index')}}">จัดการอุปกรณ์</a></li>
                                    <li><a href="{{ action('RoomController@index') }}"> จัดการห้องแลป</a></li>
                                </ul></li>
                            <li><a href="{{ action('OrderController@index') }}"><i
                                        class="fa fa-shopping-cart fa-fw"></i> สั่งซื้อวัสดุ-อุปกรณ์</a></li>
                            <li><a href="{{ action('RoomBookingController@index')}}"><i
                                        class="fa fa-calendar fa-fw"></i> จองห้องแลป และอุปกรณ์</a></li>
                            <li><a href="{{ action('BringMaterialController@index')}}"><i
                                        class="fa fa-list-alt fa-fw"></i> เบิก-จ่ายวัสดุ</a></li>
                            <li><a href="{{ action('LendDeviceController@index')}}"><i
                                        class="fa fa-edit fa-fw"></i> ยืม-คืนอุปกรณ์</a></li>
                            <li><a href="{{ action('RepairController@index')}}"><i
                                        class="fa fa-wrench fa-fw"></i> แจ้งซ่อมอุปกรณ์</a></li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-banner"></div>

            <div id="page-wrapper">@yield('content')</div>
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('store/components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script
        src="{{ asset('store/components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- Datepicker 1.4.0 -->
        <script
        src="{{ asset('store/components/bootstrap-datepicker-1.4.0/js/bootstrap-datepicker.min.js')}}"></script>

        <!-- Timepicker -->
        <script
        src="{{ asset('store/components/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script
        src="{{ asset('store/components/metisMenu/dist/metisMenu.min.js')}}"></script>

        <!-- DataTables JavaScript -->
        <script
        src="{{ asset('store/components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
        <script
        src="{{ asset('store/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('store/dist/js/sb-admin-2.js')}}"></script>

        <!-- fullcalendar -->
        <script
        src="{{ asset('store/components/fullcalendar/lib/moment.min.js')}}"></script>
        <script
        src="{{ asset('store/components/fullcalendar/fullcalendar.min.js')}}"></script>

        <script>

        $(document).ready(function () {

            // fullcalendar
            $('#event_calendar').fullCalendar({
                defaultView: 'agendaDay',
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                events: "{{url('calendar')}}"
            });

            // table responsive
            $('#dataTables-example').DataTable({
                responsive: true
            });

            // datepicker
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy'
            });

            // timepicker
            $('.timepicker').timepicker();

            // Confirm dialog
            $('a[data-confirm]').click(function(e) {
                var type = $(this).attr('data-confirm');
                
                switch (type) {
                    case 'manage-page':
                        var href = $(this).attr('href-link');
                        $('#confirmDeletePopuYesBtn').attr('href', href);
                        break;
                    case 'table-items':
                        var node = $(this).parent().parent();
                        $('#confirmDeletePopuYesBtn').click(function(e) {
                            node.remove();
                            $('#confirmDeletePopup').modal('hide');
                        });
                        break;
                }
                    
                $('#confirmDeletePopup').modal('show');
            });

            // Device items popup
            $('#deviceItemsPopup').on('show.bs.modal', function (e) {      
                // Get data form view
                $.get("{{url('listDeviceItems')}}", function (data) {
                    $('#dataTables-deviceItemsPopup .modal-body').html(data);
                });

                // Add items to main-page
                $('#addDeviceItemsBtn').on('click', function (e) {
                    var page = $('#openDeviceItemsBtn').attr('page');
                    var nodeCheck = $('#dataTables-deviceItemsPopup tbody input:checked').parent().parent();
                    
                    nodeCheck.each(function () {
                        var list = $(this).find('td').first();
                        var device_id = '';
                        var item_no = list.next().next().text();
                        var description = list.next().next().next().next().next().text();
                        var serial_no = list.next().next().next().next().next().next().text();
                        
                        var row = '';
                        switch (page) {
                            case 'repair':
                                row = '<tr>' +
                                        '<input type="hidden" flag="new" name="hiddenDeviceId[]" value="' + device_id + '">' +
                                        '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                                        '<td>' + item_no + '</td>' +
                                        '<td>' + description + '</td>' +
                                        '<td>' + serial_no + '</td>' +
                                        '<td><input class="form-control" name="symptom[]"/></td>' +
                                      '</tr>';
                                break;
                            case 'room-booking':
                                row = '<tr>' +
                                        '<input type="hidden" flag="new" name="hiddenDeviceId[]" value="' + device_id + '">' +
                                        '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                                        '<td>' + item_no + '</td>' +
                                        '<td>' + description + '</td>' +
                                        '<td><input class="form-control" name="amount[]"/></td>' +
                                      '</tr>';
                                break;
                            case 'lend-device':
                                row = '<tr>' +
                                    '<input type="hidden" flag="new" name="hiddenDeviceId[]" value="' + device_id + '">' +
                                    '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                                    '<td>' + item_no + '</td>' +
                                    '<td>' + description + '</td>' +
                                    '<td><input class="form-control" name="amount[]"/></td>' +
                                  '</tr>';
                                break;
                        }
                        $('#items-table tbody').append(row);
                    });
                });
            });
            
            // Order items popup
            $('#orderItemsPopup').on('show.bs.modal', function (e) {   
                // Add items to main-page
                $('#addOrderItemsBtn').on('click', function (e) {
                   
                    var nodeCheck = $('#dataTables-orderItemsPopup tbody input:checked').parent().parent();
                    
                    nodeCheck.each(function () {
                        var list = $(this).find('td').first();
                        var item_no = list.val();
                        var brand = list.next().val();
                        var amount = list.next().next().val();
                        var unitPrice = list.next().next().next().val();;
                        var total = list.next().next().next().next().val();;
                        var remark = list.next().next().next().next().next().val();;
                        
                        alert(remark);
                        
                        var row = '<tr>' +
                                    '<input type="hidden" name="itemNo[]" value="' + item_no + '">' +
                                    '<input type="hidden" name="brand[]" value="' + brand + '">' +
                                    '<input type="hidden" name="amount[]" value="' + amount + '">' +
                                    '<input type="hidden" name="unitPrice[]" value="' + unitPrice + '">' +
                                    '<input type="hidden" name="total[]" disabled value="' + total + '">' +
                                    '<input type="hidden" name="remark[]" value="' + remark + '">' +
                                    '<td>' + item_no + '</td>' +
                                    '<td>' + brand + '</td>' +
                                    '<td>' + amount + '</td>' +
                                    '<td>' + unitPrice + '</td>' +
                                    '<td>' + total + '</td>' +
                                    '<td>' + remark + '</td>' +
                                  '</tr>';
                        $('#items-table tbody').append(row);
                    });
                });
            });
        });


//$('#addItemsBtn').on('click', function () {
//        $('#addItemsModal').modal({show:true});
//
//$.get('{{ asset('viewFormStock') }}',function(data){
//$('#addItemsModal .modal-body').html(data);
//});
//    });
//เพิ่ม $.get('{{ asset('viewFormStock') }}',function(data){
//$('#addItemsModal .modal-body').html(data);
//}); 

        </script>

        <!-- Confirm modal popup -->
        <div id="confirmDeletePopup" class="modal fade">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Confirm</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete ?</p>
                    </div>
                    <div class="modal-footer">
                        <a id="confirmDeletePopuYesBtn" class="btn btn-danger">Yes</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">No</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Device modal popup -->
        <div id="deviceItemsPopup" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Items</h4>
                    </div>
                    <div class="modal-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-deviceItemsPopup">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Stock</th>
                                        <th>Item No.</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Item Description</th>
                                        <th>Serial No.</th>
                                        <th>Warranty</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <input type="hidden" name="deviceId" value="1">
                                        <td><input type="checkbox" name="itemCbx[]"></td>
                                        <td>stock1</td>
                                        <td>Item 1</td>
                                        <td>tttt</td>
                                        <td>bbbb</td>
                                        <td>aaaaa</td>
                                        <td>xxxxxx No.</td>
                                        <td>1</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="deviceId" value="1">
                                        <td><input type="checkbox" name="itemCbx[]"></td>
                                        <td>stock2</td>
                                        <td>Item 2</td>
                                        <td>tttt</td>
                                        <td>yyyyyy</td>
                                        <td>ttttttt</td>
                                        <td>xxxxxx No.</td>
                                        <td>1</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="addDeviceItemsBtn" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Add</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Order modal popup -->
        <div id="orderItemsPopup" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Items</h4>
                    </div>
                    <div class="modal-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-orderItemsPopup">
                                <thead>
                                    <tr>
                                        <th>Item No.</th>
                                        <th>Brand/Model/Description</th>
                                        <th>Amount</th>
                                        <th>Unit Price</th>
                                        <th>Total</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="itemNo[]" class="form-control col-lg-2"></td>
                                        <td><input type="text" name="brand[]" class="form-control col-lg-2"></td>
                                        <td><input type="text" name="amount[]" class="form-control col-lg-1"></td>
                                        <td><input type="text" name="unitPrice[]" class="form-control col-lg-1"></td>
                                        <td><input type="text" name="total[]" class="form-control col-lg-1" disabled></td>
                                        <td><input type="text" name="remark[]" class="form-control col-lg-2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="addOrderItemsBtn" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>


