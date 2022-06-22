<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Admin Dashboard || DR Ahmed Khaleel"/>
    <meta name="author" content="potenzaglobalsolutions.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Admin Dashboard || DR Ahmed Khaleel</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/dashboard/images/favicon.ico')}}"/>

    <!-- Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/dashboard/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>

<body>

<div class="wrapper">

    @include('dashboard.layouts.preloader')
    <!-- header start-->
    @include('dashboard.layouts.header')
    <!--=================================
   header End-->

    <!--=================================
    Main content -->
    <div class="container-fluid">
        <!-- Left Sidebar start-->
        @include('dashboard.layouts.sidebar')
        <!-- Left Sidebar End-->

        <!--=================================
        wrapper -->
        <div class="content-wrapper">
            @include('dashboard.layouts.page-title')
            <!-- widgets -->
            @yield('content')
            <!--=================================
            wrapper -->

            <!--=================================
            footer -->
            @include('dashboard.layouts.footer')
            <!--=================================
            footer -->
        </div>
        <!-- main content wrapper end-->
    </div>
    <!--=================================
    Main content -->
</div>

<!--=================================
jquery -->

<!-- jquery -->
<script src="{{asset('admin/dashboard/js/jquery-3.6.0.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{asset('admin/dashboard/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script>var plugin_path = 'admin/dashboard/js/';</script>

<!-- chart -->
@include('dashboard.layouts.js.chart')

<!-- calendar -->
@include('dashboard.layouts.js.calendar')

<!-- charts sparkline -->
@include('dashboard.layouts.js.charts_sparkline')

<!-- charts morris -->
@include('dashboard.layouts.js.charts_morris')

<!-- datepicker -->
@include('dashboard.layouts.js.datepicker')

<!-- sweetalert2 -->
@include('dashboard.layouts.js.sweetalert')

<!-- toastr -->
@include('dashboard.layouts.js.toastr')

<!-- validation -->
@include('dashboard.layouts.js.validation')

<!-- lobilist -->
@include('dashboard.layouts.js.lobilist')

<!-- custom -->
@include('dashboard.layouts.js.custom')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
</body>
</html>
