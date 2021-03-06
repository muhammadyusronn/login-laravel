<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>@yield('title')</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}" />
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/morrisjs/morris.min.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('resource/assets/assets/css/color_skins.css')}}">

    <!-- Datatables -->
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">

    <!-- Form Advance -->
    <!-- Morris Chart Css-->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/morrisjs/morris.css')}}" />
    <!-- Colorpicker Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/multi-select/css/multi-select.css')}}">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
    <!-- noUISlider Css -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/nouislider/nouislider.min.css')}}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('resource/assets/plugins/select2/select2.css')}}" />
    
    <link rel="stylesheet" href="{{asset('resource/assets/assets/css/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('resource/assets/assets/css/color_skins.css')}}">
</head>

<body class="theme-purple authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">Oreo</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index-2.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Search Result</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-facebook"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">                        
                        <i class="zmdi zmdi-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="sign-up.html">SIGN UP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(../assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <div class="logo-container">
                            <img src="https://thememakker.com/templates/oreo/html/assets/images/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Enter User Name">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="index-2.html" class="btn btn-primary btn-round btn-lg btn-block ">SIGN IN</a>
                        <h5><a href="forgot-password.html" class="link">Forgot Password?</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                    <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                    <li><a href="javascript:void(0);">FAQ</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
    <script src="{{asset('resource/assets/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="{{asset('resource/assets/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="{{asset('resource/assets/assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
    <script src="{{asset('resource/assets/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{asset('resource/assets/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob, Count To, Sparkline Js -->

    <script src="{{asset('resource/assets/assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('resource/assets/assets/js/pages/index.js')}}"></script>
    <!-- Data tables -->
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('resource/assets/assets/bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{asset('resource/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('resource/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('resource/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('resource/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('resource/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('resource/assets/assets/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Form Advance -->
    <script src="{{asset('resource/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script> <!-- Bootstrap Colorpicker Js -->
    <script src="{{asset('resource/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> <!-- Input Mask Plugin Js -->
    <script src="{{asset('resource/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
    <script src="{{asset('resource/assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script> <!-- Jquery Spinner Plugin Js -->
    <script src="{{asset('resource/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script> <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('resource/assets/plugins/nouislider/nouislider.js')}}"></script> <!-- noUISlider Plugin Js -->
    <script src="{{asset('resource/assets/plugins/select2/select2.min.js')}}"></script> <!-- Select2 Js -->
    <script src="{{asset('resource/assets/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
    <script src="{{asset('resource/assets/plugins/jquery-validation/jquery.validate.js')}}"></script> <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('resource/assets/plugins/jquery-steps/jquery.steps.js')}}"></script> <!-- JQuery Steps Plugin Js -->
    <script src="{{asset('resource/assets/assets/js/pages/forms/form-validation.js')}}"></script>
    <script>
    $(".navbar-toggler").on('click',function() {
        $("html").toggleClass("nav-open");
    });
    //=============================================================================
    $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
    });
    </script>
</body>
</html>