<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent</title>

    <link rel="shortcut icon" href="{{ asset('assets/user/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper login-body">

        <header class="log-header text-center">
            <a href="{{ route('mechanic.home') }}"><h3><img src="{{ asset('assets/user/img/logo-small.png') }}" class="img-fluid " alt="Logo"> Mechanic Finder</h3></a>
        </header>

        <div class="login-wrapper">
            <div class="loginbox">
                <div class="login-auth">

                    @yield('content')

                </div>
            </div>
        </div>


        <footer class="log-footer">
            <div class="container-fluid">

                <div class="copyright">
                    <div class="copyright-text">
                        <p>© 2024 Mechanics. All Rights Reserved.</p>
                    </div>
                </div>

            </div>
        </footer>

    </div>


    <script src="{{ asset('assets/user/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/user/js/script.js') }}" type="text/javascript"></script>
</body>


</html>
