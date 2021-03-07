<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title><?= $title; ?></title>
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
    @yield('content')
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