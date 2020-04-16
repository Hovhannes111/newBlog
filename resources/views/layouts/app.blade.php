<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AEW</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">


    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
</head>
<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')
</body>
</html>
