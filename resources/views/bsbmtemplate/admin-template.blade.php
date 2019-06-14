<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{env('APP_NAME','eKantor Application')}}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('template/bsbm/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('template/bsbm/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('template/bsbm/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('template/bsbm/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('template/bsbm/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('template/bsbm/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        @include('bsbmtemplate.partial.top-bar')
    </nav>
    <!-- #Top Bar -->
    <section>
        @include('bsbmtemplate.partial.sidebar')
    </section>

    <section class="content">
        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="{{asset('template/bsbm/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('template/bsbm/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('template/bsbm/plugins/node-waves/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('template/bsbm/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('template/bsbm/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('template/bsbm/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('template/bsbm/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('template/bsbm/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('template/bsbm/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('template/bsbm/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('template/bsbm/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('template/bsbm/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('template/bsbm/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('template/bsbm/plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('template/bsbm/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('template/bsbm/js/admin.js')}}"></script>
    <script src="{{asset('template/bsbm/js/pages/index.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('template/bsbm/js/demo.js')}}"></script>
</body>

</html>