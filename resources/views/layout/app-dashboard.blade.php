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

    {{-- <script src="{{ asset('assets/js/scripts.js') }}"></script> --}}


    <script src="{{ asset('assets/vendor/toastr/toastr.min.js') }}"></script>

    <!--  flot-chart js -->
    {{-- <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script> --}}


    <!-- <script src="./js/dashboard.js')}}"></script> -->

    {{-- Page Custom Javascript(used by the current page) --}}
    @stack('scripts')

    <script>
        // {{-- Notifications Pop Up --}}
        toastr.options = {
            "closeButton": true,
            "debug": true,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toastr-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "closeHtml": '<i class="la la-close"></i>'
        };

        $(window).on('load', function() {
            @if ($errors)
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}');
                @endforeach
            @endif
            @if (session()->has('error'))
                toastr.error('{{ session('error') }}');
            @elseif (session()->has('success'))
                toastr.success('{{ session('success') }}');
            @elseif (session()->has('info'))
                toastr.info('{{ session('info') }}');
            @elseif (session()->has('warning'))
                toastr.warning('{{ session('warning') }}');
            @elseif (session()->has('status'))
                toastr.info('{{ session('status') }}');
            @endif
        });
    </script>

</body>

</html>
