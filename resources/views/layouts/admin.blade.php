<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Bahadir Kelesoglu">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets')}}/admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets')}}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/admin/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/admin/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/admin/assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets')}}/admin/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/assets/css/style-responsive.css" rel="stylesheet">

    <script src="{{ asset('assets')}}/admin/assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    @yield('javascript')
</head>

<body>
<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->

@include('admin._header')
@include('admin._sidebar')
@yield('maincontent')

@include('admin._footer')
@yield('footer')

</body>
</html>
