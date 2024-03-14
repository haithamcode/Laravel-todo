<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>تم لایت</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	
		<!-- Bootstrap RTL core CSS     -->
    <link href="{{asset('assets/css/bootstrap-ltr.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
	
	  <!--  Light Bootstrap RTL Version CSS    -->
    <link href="{{asset('assets/css/light-bootstrap-dashboard-rtl.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{asset('assets/img/sidebar-5.jpg')}}">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    لایت
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>الرئيسيه</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('todos.index')}}">
                        <i class="pe-7s-user"></i>
                        <p>المهام</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">تعویض ناوبری</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        @yield('titel')
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>        
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> --}}

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('assets/js/demo.js')}}"></script>
</html>
