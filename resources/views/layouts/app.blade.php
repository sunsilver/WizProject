<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wiz Project - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    @yield('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.1.0/css/bootstrap-notify.min.css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}?{{ time() }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @hasSection('loginUI')
            @yield('loginUI')
        @endif

        @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <!-- Vendor JS Files -->
    {{-- <script src="{{ asset('js/jquery.min.js') }}" defer></script> --}}
    {{-- 제이쿼리 버전 이슈로 수정  --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
    <script src="{{ asset('js/validate.js') }}" defer></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/counterup.min.js') }}" defer></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('js/venobox.min.js') }}" defer></script>
    {{-- <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/typed.min.js') }}" defer></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.3/bootstrap-notify.min.js"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    @yield('script')
</body>
</html>