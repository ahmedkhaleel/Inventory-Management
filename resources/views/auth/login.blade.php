<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Admin Dashboard || Login" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Admin Dashboard || Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/dashboard/images/favicon.ico')}}" />

    <!-- Font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/dashboard/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>

<body>

<div class="wrapper">

    <!--=================================
    preloader -->
    <div id="pre-loader">
        <img src="{{asset('admin/dashboard/images/pre-loader/loader-01.svg')}}" alt="">
    </div>
    <!--=================================
    preloader -->

    <!--=================================
    login-->
    <section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url('admin/dashboard/images/bg-login.png');" >
        <div class="container">
            <div class="row justify-content-center g-0 vertical-align">
                <div class="col-lg-4 col-md-6 login-fancy-bg bg" style="background-image: url(admin/dashboard/images/bg-lin-login.png);">
                    <div class="login-fancy">
                        <h2 class="text-white mb-20">Inventory Management</h2>
                        <p class="mb-20 text-white">Welcome to the warehouse management system Developed by Dr Ahmed Khaleel.</p>
                        <ul class="list-unstyled  pos-bot pb-30">
                            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
                            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bg-dark">
                    <div class="login-fancy pb-40 clearfix">
                        <h3 class="mb-30">Sign In To Admin</h3>
                       <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                           <div class="section-field mb-20">
                               <label class="mb-10" for="user_name">User Name * </label>
                               <input id="user_name" class="web form-control" type="user_name" placeholder="User name" name="user_name">
                           </div>
                           <div class="section-field mb-20">
                               <label class="mb-10" for="password">Password* </label>
                               <input id="password" class="Password form-control" type="password" placeholder="Password" name="password">
                           </div>

                        <div class="section-field">
                            <div class="remember-checkbox mb-30">
                                <input type="checkbox" class="form-control" name="remember_me" id="remember_me" />
                                <label for="two"> Remember me</label>
                                <a href="#" class="float-sm-end d-block mt-1 mt-sm-0">Forgot Password?</a>
                            </div>
                        </div>

                           <button type="submit" class="button">
                            <span>Log in</span>
                            <i class="fa fa-check"></i>
                        </button>
                       </form>
                        <p class="mt-20 mb-0">Don't have an account? <a href="register.html"> Create one here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    login-->
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
<script src="{{asset('admin/dashboard/js/chart-init.js')}}"></script>

<!-- calendar -->
<script src="{{asset('admin/dashboard/js/calendar.init.js')}}"></script>

<!-- charts sparkline -->
<script src="{{asset('admin/dashboard/js/sparkline.init.js')}}"></script>

<!-- charts morris -->
<script src="{{asset('admin/dashboard/js/morris.init.js')}}"></script>

<!-- datepicker -->
<script src="{{asset('admin/dashboard/js/datepicker.js')}}"></script>

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
