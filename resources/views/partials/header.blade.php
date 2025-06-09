<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'My Laravel App')</title>
    @stack('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- shwekayin logo.png --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/shwekayin logo.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{--  --}}
    @stack('css')

</head>

<body>
    {{-- <div class=" m-3 bg-danger" style="width:100%"></div> --}}

    {{--  --}}
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img src="{{ asset('images/shwekayin_logo-removebg-preview.png') }}" alt=""
                style="width: 80px;height:70px">
            <a class=" navbar-brand" style="margin-left: 10px;text-shadow:1px 1px 1px black"
                href="/">Shwe<span>Kayin</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ url('destination') }}" class="nav-link">Destination</a></li>
                    <li class="nav-item"><a href="{{ url('menu') }}" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="{{ url('blog') }}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <ul>
                    <span class="" style="color:white !important">Monday - Friday: 10am – 6pm
                        | Sunday: 9am -
                        6pm</span>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
