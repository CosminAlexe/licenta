<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Internships</title>

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
    <script src="/js/plugins/pickers/pickadate/picker.js"></script>
    <script src="/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script src="/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script src="/js/plugins/pickers/pickadate/legacy.js"></script>

    <script src="/js/app.js"></script>
    <script src="/js/demo_pages/dashboard.js"></script>
    <script src="/js/demo_pages/picker_date.js"></script>

    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">

    <a class="text-white m-auto font-weight-bold font-italic" href="{{route('studentHome')}}">
        YourInternship
    </a>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

        <ul class="navbar-nav">

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ Auth::user()->picture}}" class="rounded-circle mr-2" width="34" height="34" alt="">
                    <span>{{ Auth::user()->name}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('studentShowProfile')}}" class="dropdown-item"><i class="icon-user-plus"></i>Profilul Tau</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper px-5">

        <!-- Page header -->
        @yield('page-header')
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            @yield('content')

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
