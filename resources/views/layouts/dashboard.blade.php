<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    @yield('meta')

    <title>@yield('title', 'Dashboard') | 2017 Final Four</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/global/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
    @yield('customCss')

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/material/material-design.min.css') }}">
    @yield('customFonts')

</head>
<body style="padding-top: 70px;">

    <!-- Start Navbar -->
    @include('dashboard.partials.navbar')
    <!-- End Navbar -->

    <!-- Start Sidebar -->
    {{--@include('dashboard.partials.sidebar')--}}
    <!-- End Sidebar -->

    <!-- Start Content -->
    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- End Content -->


    <!-- Start Footer -->
    @include('dashboard.partials.footer')
    <!-- End Footer -->

    <!-- Footer Scripts -->
    <script src="{{ asset('js/global/jquery.min.js') }}"></script>
    <script src="{{ asset('js/global/bootstrap.min.js') }}"></script>
    @yield('footer.scripts')
</body>
</html>