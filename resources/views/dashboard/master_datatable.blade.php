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


<!-- jquery -->
<script src="{{asset('admin/dashboard/js/jquery-3.6.0.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{asset('admin/dashboard/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script> var plugin_path = 'admin/dashboard/js/';</script>

<!-- chart -->
<script src="{{asset('admin/dashboard/js/chart-init.js')}}"></script>

<!-- calendar -->
<script src="{{asset('admin/dashboard/js/calendar.init.js')}}"></script>

<!-- charts sparkline -->
<script src="{{asset('admin/dashboard/js/sparkline.init.js')}}"></script>

<!-- charts morris -->
<script src="{{asset('admin/dashboard/js/morris.init.js')}}"></script>

{{--<!-- datepicker -->--}}
{{--<script src="{{asset('admin/dashboard/js/datepicker.js')}}"></script>--}}

<!-- sweetalert2 -->
<script src="{{asset('admin/dashboard/js/sweetalert2.js')}}"></script>

<!-- toastr -->
<script src="{{asset('admin/dashboard/js/toastr.js')}}"></script>

<!-- validation -->
<script src="{{asset('admin/dashboard/js/validation.js')}}"></script>

<!-- lobilist -->
<script src="{{asset('admin/dashboard/js/lobilist.js')}}"></script>

<!-- custom -->
<script src="{{asset('admin/dashboard/js/custom.js')}}"></script>
<script  src="{{asset('admin/dashboard/js/nicescroll/jquery.nicescroll.js')}}"></script>
<script  src="{{asset('admin/dashboard/js/bootstrap-datatables/jquery.dataTables.min.js')}}"></script>
<script  src="{{asset('admin/dashboard/js/bootstrap-datatables/dataTables.bootstrap4.min.js')}}"></script>


</body>
</html>
