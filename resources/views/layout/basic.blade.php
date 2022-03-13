<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Bullish Experts') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/waves/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('styles')
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        @yield('content')

    </div>

    <script src="{{ asset('assets/js/global.js') }}"></script>
    <script src="{{ asset('assets/vendor/waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/validator/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/validator/validator-init.js') }}"></script>

    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    @stack('scripts')
</body>

</html>
