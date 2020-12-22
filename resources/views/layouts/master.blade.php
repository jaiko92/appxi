<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Taxi</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('lpa/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('lpa/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lpa/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('lpa/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('lpa/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('lpa/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lpa/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('lpa/css/main.css') }}">
    </head>

    <body  style="display: block;">
        <button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>

        @include('layouts.header')

            @yield('content')

        @include('layouts.footer')
        <!--
        JS
        ============================================= -->
        <script src="{{ asset('lpa/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('lpa/js/easing.min.js') }}"></script>
        <script src="{{ asset('lpa/js/hoverIntent.js') }}"></script>
        <script src="{{ asset('lpa/js/superfish.min.js') }}"></script>
        <script src="{{ asset('lpa/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('lpa/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('lpa/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('lpa/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('lpa/js/mail-script.js') }}"></script>
        <script src="{{ asset('lpa/js/main.js') }}"></script>
    </body>
</html>
