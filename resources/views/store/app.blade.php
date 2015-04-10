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
        <link href="{{ asset('store/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" 
              rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{ asset('store/components/datatables-responsive/css/dataTables.responsive.css')}}" 
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
                                        class="fa fa-folder-open fa-fw"></i> จัดการคลัง<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="{{ action('UserController@viewManageStock')}}">จัดการคลัง</a></li>
                                    <li><a href="{{ action('UserController@viewManageMaterial')}}">จัดการวัสดุ</a></li>
                                    <li><a href="{{ action('UserController@viewManageDevice')}}">จัดการอุปกรณ์</a></li>
                                </ul></li>
                            <li><a href="{{ action('UserController@viewManageRoom')}}"><i class="fa fa-home fa-fw"></i>
                                    จัดการห้องแลป</a></li>
                            <li><a href="{{ action('UserController@viewManageOrder') }}"><i class="fa fa-shopping-cart fa-fw"></i>
                                    สั่งซื้อวัสดุ-อุปกรณ์</a></li>
                            <li><a href="{{ action('UserController@viewManageRoomBooking')}}"><i class="fa fa-calendar fa-fw"></i>
                                    จองห้องแลป และอุปกรณ์</a></li>
                            <li><a href="{{ action('UserController@viewManageLend')}}"><i class="fa fa-edit fa-fw"></i>
                                    ยืม-คืนอุปกรณ์</a></li>
                            <li><a href="{{ action('UserController@viewManageBring')}}"><i class="fa fa-list-alt fa-fw"></i>
                                    เบิก-จ่ายวัสดุ</a></li>
                            <li><a href="{{ action('UserController@viewManageRepair')}}"><i class="fa fa-wrench fa-fw"></i>
                                    แจ้งซ่อมอุปกรณ์</a></li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-banner"></div>

            <div id="page-wrapper">
                @yield('content')
            </div>
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('store/components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script
        src="{{ asset('store/components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script
        src="{{ asset('store/components/metisMenu/dist/metisMenu.min.js')}}"></script>

        <!-- DataTables JavaScript -->
        <script src="{{ asset('store/components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('store/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
    
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('store/dist/js/sb-admin-2.js')}}"></script>

        <!-- fullcalendar -->
        <script
        src="{{ asset('store/components/fullcalendar/lib/moment.min.js')}}"></script>
        <script
        src="{{ asset('store/components/fullcalendar/fullcalendar.min.js')}}"></script>
        
        <script>
            $(document).ready(function() {

		$('#event_calendar').fullCalendar({
			defaultDate: '2015-03-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2015-03-01'
				},
				{
					title: 'Long Event',
					start: '2015-02-20',
					end: '2015-03-03'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-03-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-03-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2015-03-11',
					end: '2015-03-13'
				},
				{
					title: 'Meeting',
					start: '2015-03-28T10:30:00',
					end: '2015-04-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2015-04-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2015-03-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2015-03-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2015-04-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2015-02-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2015-02-28'
				}
			]
		});
                
                 $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>

</html>
