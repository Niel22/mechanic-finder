<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mechanic Finder </title>

    <link rel="shortcut icon" href="{{ asset('assets/user/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/plugins/aos/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/plugins/boxicons/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
</head>

<body>
    <div class="main-wrapper {{ Route::is('mechanics') ? 'listing-page' : '' }} {{ Route::is('mechanic.search') ? 'listing-page' : '' }}">

        @include('user.layouts.inc.header')

        @yield('content')

        @include('user.layouts.inc.footer')


    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>


    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('assets/user/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/js/jquery.waypoints.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/user/js/jquery.counterup.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/plugins/aos/aos.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/js/backToTop.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/user/plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/plugins/moment/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/user/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/user/plugins/slick/slick.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/js/script.js') }}" type="text/javascript"></script>
    {{-- <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="|49" defer></script> --}}
</body>


</html>
