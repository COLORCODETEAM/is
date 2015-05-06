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
                            <li><a href><i class="fa fa-folder-open fa-fw"></i> การจัดการ<span
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

        <!-- Bootstrap validator -->
        <script
        src="{{ asset('store/components/bootstrap-validator/dist/validator.min.js')}}"></script>
        
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

                // validator
                $('form').validator().on('submit', function (e) {
                    if (e.isDefaultPrevented()) {
                      // handle the invalid form...
                    } else {
                        // Add loading button
                        var btn = $('button[type="submit"]').button('loading');
                        setTimeout(function () {
                            btn.button('reset');
                        }, 6000); 
                    }
                });
                $('#orderItemsPopupForm').validator().on('submit', function (e) {
                    if (e.isDefaultPrevented()) {
                      // handle the invalid form...
                        alert('11');
                    } else {
                        alert('22');
                        // Add loading button
                        var btn = $('button[type="submit"]').button('loading');
                        setTimeout(function () {
                            btn.button('reset');
                        }, 6000); 
                    }
                });
                
                // fullcalendar
                $('#event_calendar').fullCalendar({
                    defaultView: 'agendaDay',
                    editable: false,
                    eventLimit: true, // allow "more" link when too many events
                    events: "{{url('bookingCalendar')}}"
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
                $('body').on('click', 'a[data-confirm]', function(e) {
                    var type = $(this).attr('data-confirm');

                    switch (type) {
                        case 'manage-page':
                            var href = $(this).attr('href-link');
                            $('#confirmDeletePopupYesBtn').attr('href', href);
                            break;
                        case 'table-items':
                            var node = $(this).parent().parent();
                            var href = $(this).attr('href-link');
                            $('#confirmDeletePopupYesBtn').click(function(e) {
                                node.remove();
                                $.getJSON(href, function (data) {
                                   // TODO
                                });
                                $('#confirmDeletePopup').modal('hide');
                            });
                            break;
                    }
                    $('#confirmDeletePopup').modal('show');
                });

                // Device items popup
                $('#openDeviceItemsBtn').on('click', function(e) {
                    var btn = $(this).button('loading');
                    var rows = '';
                    // Load data
                    $.getJSON("{{url('listAvailableDeviceItems')}}", function (data) {
                        $.each( data, function( i, val ) {
                            var row = '<tr>' +
                                '<input type="hidden" name="hiddenDeviceIdPopup" value="' +val.id+ '">' +
                                '<td><input type="checkbox" name="itemCbx[]"></td>' +
                                '<td>' +val.stockName+ '</td>' +
                                '<td>' +val.deviceNo+ '</td>' +
                                '<td>' +val.brand+ '</td>' +
                                '<td>' +val.model+ '</td>' +
                                '<td>' +val.description+ '</td>' +
                                '<td>' +val.serialNo+ '</td>' +
                                '<td>' +val.warranty+ '</td>' +
                                '<td>' +val.amount+ '</td>' +
                            '</tr>';
                            rows += row;
                        });
                    }).done(function(e) {
                        $('#dataTables-deviceItemsPopup tbody').empty();
                        $('#dataTables-deviceItemsPopup tbody').append(rows);
                        $('#dataTables-deviceItemsPopup').dataTable({
//                            "scrollX": true, 
                            "responsive": true,
                            "bDestroy": true,
                            "lengthMenu": [[5], [5]]
                        });
                        $('#deviceItemsPopup').modal({
                            show: 'true'
                        });
                        // Add items to main-page
                        $('#addDeviceItemsBtn').unbind('click');
                        $('#addDeviceItemsBtn').on('click', function (e) {
                            var page = $('#openDeviceItemsBtn').attr('page');
                            var nodeCheck = $('#dataTables-deviceItemsPopup tbody input:checked').parent().parent();

                            nodeCheck.each(function () {
                                var device_id = $(this).find('input[name="hiddenDeviceIdPopup"]').val();
                                var row = $(this).find('td').first();
                                var device_no = row.next().next().text();
                                var description = row.next().next().next().next().next().text();
                                var serial_no = row.next().next().next().next().next().next().text();

                                var row = '';
                                switch (page) {
                                    case 'repair':
                                        row = '<tr>' +
                                                '<input type="hidden" flag="new" name="hiddenDeviceId[]" value="' + device_id + '">' +
                                                '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                                                '<td>' + device_no + '</td>' +
                                                '<td>' + description + '</td>' +
                                                '<td>' + serial_no + '</td>' +
                                                '<td><input class="form-control" name="symptom[]"/></td>' +
                                              '</tr>';
                                        break;
                                    case 'room-booking':
                                        row = '<tr>' +
                                                '<input type="hidden" flag="new" name="hiddenDeviceId[]" value="' + device_id + '">' +
                                                '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                                                '<td>' + device_no + '</td>' +
                                                '<td>' + description + '</td>' +
                                                '<td><input class="form-control" name="amount[]"/></td>' +
                                              '</tr>';
                                        break;
                                    case 'lend-device':
                                        row = '<tr>' +
                                            '<input type="hidden" flag="new" name="hiddenDeviceId[]" value="' + device_id + '">' +
                                            '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                                            '<td>' + device_no + '</td>' +
                                            '<td>' + description + '</td>' +
                                            '<td><input class="form-control" name="amount[]"/></td>' +
                                          '</tr>';
                                        break;
                                }
                                $('#items-table tbody').append(row);
                            });
                        });
                    });
                    setTimeout(function () {
                        btn.button('reset');
                    }, 5000);
                });
                
                // Material items popup
                $('#openMaterialItemsBtn').on('click', function(e) {
                    var btn = $(this).button('loading');
                    var rows = '';
                    // Load data
                    $.getJSON("{{url('listAvailableMaterialItems')}}", function (data) {
                        $.each( data, function( i, val ) {
                            var row = '<tr>' +
                                '<input type="hidden" name="hiddenMaterialIdPopup" value="' +val.id+ '">' +
                                '<td><input type="checkbox" name="itemCbx[]"></td>' +
                                '<td>' +val.stockName+ '</td>' +
                                '<td>' +val.materialNo+ '</td>' +
                                '<td>' +val.brand+ '</td>' +
                                '<td>' +val.model+ '</td>' +
                                '<td>' +val.description+ '</td>' +
                                '<td>' +val.serialNo+ '</td>' +
                                '<td>' +val.amount+ '</td>' +
                            '</tr>';
                            rows += row;
                        });
                    }).done(function(e) {
                        $('#dataTables-materialItemsPopup tbody').empty();
                        $('#dataTables-materialItemsPopup tbody').append(rows);
                        $('#dataTables-materialItemsPopup').dataTable({
//                            "scrollX": true, 
                            "responsive": true,
                            "bDestroy": true,
                            "lengthMenu": [[5], [5]]
                        });
                        $('#materialItemsPopup').modal({
                            show: 'true'
                        });
                        // Add items to main-page
                        $('#addMaterialItemsBtn').unbind('click');
                        $('#addMaterialItemsBtn').on('click', function (e) {
                            var page = $('#openMaterialItemsBtn').attr('page');
                            var nodeCheck = $('#dataTables-materialItemsPopup tbody input:checked').parent().parent();

                            nodeCheck.each(function () {
                                var material_id = $(this).find('input[name="hiddenMaterialIdPopup"]').val();
                                var row = $(this).find('td').first();
                                var material_no = row.next().next().text();
                                var description = row.next().next().next().next().next().text();
                                var amount = row.next().next().next().next().next().next().next().text();

                                var row = '';
                                switch (page) {
                                    case 'bring':
                                        row = '<tr>' +
                                                '<input type="hidden" flag="new" name="hiddenMaterialId[]" value="' + material_id + '">' +
                                                '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                                                '<td>' + material_no + '</td>' +
                                                '<td>' + description + '</td>' +
                                                '<td><input class="form-control" name="amount[]" value="' +amount+ '"/></td>' +
                                                '<td>' +
                                                    '<select class="form-control" name="status[]">' +
                                                    '<option value="1">OK</option>' +
                                                    '<option value="0">CANCEL</option>' +
                                                    '</select>' +
                                                '</td>' +
                                              '</tr>';
                                        break;
                                }
                                $('#items-table tbody').append(row);
                            });
                        });
                    });  
                    setTimeout(function () {
                        btn.button('reset');
                    }, 5000); 
                });
                  
                // Order items popup
                $('#openOrderItemsBtn').on('click', function(e) {
                    $("input[name='itemNoPopup']").val('');
                    $("input[name='descriptionPopup']").val('');
                    $("input[name='amountPopup']").val('');
                    $("input[name='unitPricePopup']").val('');
                    $("input[name='totalPopup']").val('');
                    $("input[name='remarkPopup']").val('');
                    $('#addOrderItemsBtn').unbind('click');
                    $('input[name="amountPopup"]').unbind('change');
                    $('input[name="unitPricePopup"]').unbind('change');
                    var btn = $(this).button('loading');
                    $('#orderItemsPopup').modal({
                        show: 'true'
                    });
                    
                    // Add event Amount*Unit price = Total
                    $('input[name="unitPricePopup"]').on('change', function(e) {
                        $('input[name="totalPopup"]').val($('input[name="amountPopup"]').val()*$('input[name="unitPricePopup"]').val());
                    });
                    $('input[name="amountPopup"]').on('change', function(e) {
                        $('input[name="totalPopup"]').val($('input[name="amountPopup"]').val()*$('input[name="unitPricePopup"]').val());
                    });
                  
                    // Add items to main-page
                    $('#addOrderItemsBtn').on('click', function (e) {
                        var item_no = $("input[name='itemNoPopup']").val();
                        var description = $("input[name='descriptionPopup']").val();
                        var amount = $("input[name='amountPopup']").val();
                        var unitPrice = $("input[name='unitPricePopup']").val();
                        var total = $("input[name='totalPopup']").val();
                        var remark = $("input[name='remarkPopup']").val();

                        var row = '<tr>' +
                            '<input type="hidden" name="itemNo[]" value="' + item_no + '">' +
                            '<input type="hidden" name="description[]" value="' + description + '">' +
                            '<input type="hidden" name="amount[]" value="' + amount + '">' +
                            '<input type="hidden" name="unitPrice[]" value="' + unitPrice + '">' +
                            '<input type="hidden" name="total[]" disabled value="' + total + '">' +
                            '<input type="hidden" name="remark[]" value="' + remark + '">' +
                            '<td><a class="form-control btn btn-danger" data-confirm="table-items">ลบ</a></td>' +
                            '<td>' + item_no + '</td>' +
                            '<td>' + description + '</td>' +
                            '<td>' + amount + '</td>' +
                            '<td>' + unitPrice + '</td>' +
                            '<td>' + total + '</td>' +
                            '<td>' + remark + '</td>' +
                          '</tr>';
                        $('#items-table tbody').append(row);
                    });  
                    setTimeout(function () {
                        btn.button('reset');
                    }, 3000); 
                });
            });
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
                        <a id="confirmDeletePopupYesBtn" class="btn btn-danger">Yes</a>
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
                    <div class="modal-body" style="overflow: auto; width: 100%;">
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
        
        <!-- Material modal popup -->
        <div id="materialItemsPopup" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Items</h4>
                    </div>
                    <div class="modal-body" style="overflow: auto; width: 100%;">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-materialItemsPopup">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Stock</th>
                                        <th>Item No.</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Item Description</th>
                                        <th>Serial No.</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="addMaterialItemsBtn" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Add</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Order modal popup -->
        <div id="orderItemsPopup" class="modal fade">
            <form id="orderItemsPopupForm">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Add Items</h4>
                        </div>
                        <div class="modal-body">
                            <div class="dataTable_wrapper" style="overflow: auto; width: 100%;">
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
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="itemNoPopup" class="form-control col-lg-2" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="descriptionPopup" class="form-control col-lg-2" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="amountPopup" class="form-control col-lg-1" required>
                                                    <div class="help-block with-errors"></div>        
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="unitPricePopup" class="form-control col-lg-1" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="totalPopup" class="form-control col-lg-1" disabled>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="remarkPopup" class="form-control col-lg-2" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="submit" id="addOrderItemsBtn" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

</html>


