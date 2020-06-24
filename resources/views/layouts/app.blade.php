<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/js/main/jquery.min.js"></script>
    <script src="/js/main/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/js/plugins/pickers/daterangepicker.js"></script>

    <script src="/js/app.js"></script>
    <script src="/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="/home" class="d-inline-block">
            <img src="/images/logo_light.png" alt="">
        </a>
    </div>


    <div class="collapse navbar-collapse" id="navbar-mobile">


        <ul class="navbar-nav ml-md-auto">

            <li class="nav-item mr-3">  <a class="text-white font-weight-bold" href="{{ route('login') }}">{{ __('Autentificare') }}</a></li>
            @if (Route::has('register'))
                <li class="nav-item mr-1">
                    <a class="text-white font-weight-bold" href="{{ route('register') }}">{{ __('Inregistrare') }}</a>
                </li>
            @endif
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">




    <!-- Main content -->
    <div class="content-wrapper">


        <!-- Content area -->
        <div class="content d-flex align-items-center">

            @yield('content')

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
