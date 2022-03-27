<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.partials.head-meta')
    <title> @yield('title') Tradio</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.min.css')}}"> --}}
    <link rel="stylesheet" href="./vendor/waves/waves.min.css">
    <link rel="stylesheet" href="./vendor/toastr/toastr.min.css">
    <!-- Custom Stylesheet -->
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
        @include('layout.partials.header-dashboard')
        @include('layout.partials.sidebar')
        {{-- Main Page Content will be here --}}
        @yield('content')


        @include('layout.partials.footer-dashboard')

    </div>






    <script src="{{ asset('assets/js/global.js') }}"></script>


    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owl-carousel-init.js') }}"></script>

    <script src="{{ asset('assets/vendor/scrollit/scrollIt.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollit-init.js') }}"></script>

    <script src="{{ asset('assets/vendor/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart-init.js') }}"></script>

    <script src="{{ asset('assets/js/scripts.js') }}"></script>




    <script src="{{ asset('assets/vendor/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/amchart/serial.js') }}"></script>
    <script src="{{ asset('assets/vendor/amchart/dataloader.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/amchart/dark.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/amchart-init.js') }}"></script>

    <script src="{{ asset('assets/vendor/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/toastr/toastr-init.js') }}"></script>

    <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/circle-progress/circle-progress-init.js') }}"></script>


    <!--  flot-chart js -->
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart-init.js') }}"></script>


    <!-- <script src="./js/dashboard.js')}}"></script> -->

    {{-- Page Custom Javascript(used by the current page) --}}
    @stack('scripts')


</body>

</html>
