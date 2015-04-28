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
		<!-- modal -->
		<script
        src="{{ asset('store/components/bootstrap/js/modal.js')}}"></script>

        <script>
            $(document).ready(function () {

                $('#event_calendar').fullCalendar({
                    defaultView: 'agendaDay',
                    editable: false,
                    eventLimit: true, // allow "more" link when too many events
                    events: "{{url('calendar')}}"
                });

                $('#dataTables-example').DataTable({
                    responsive: true
                });
                
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy'
                });
                
                $('.timepicker').timepicker();
            });
        </script>

    </body>

</html>
