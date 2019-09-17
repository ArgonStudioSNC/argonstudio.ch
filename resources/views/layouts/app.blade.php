<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - Argon Studio - Augmented Reality</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/jquery.paroller.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.appear.js') }}" defer></script>
    <script src="{{ asset('/js/back-top.js') }}" defer></script>
    <script src="{{ asset('/js/smooth-scrolling.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.7.0/js/all.js" integrity="sha384-qD/MNBVMm3hVYCbRTSOW130+CWeRIKbpot9/gR1BHkd7sIct4QKhT1hOPd+2hO8K" crossorigin="anonymous" defer></script>
    <script src="{{ asset('/js/_main.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('/fonts/overpass/_overpass.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main-layout.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/terms-and-policies.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#fa7268">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="fade-out" style="opacity:0">
    @yield('header', '')
    @yield('navbar', '')
    @yield('content', '')
    @yield('footer', '')
</body>
</html>
