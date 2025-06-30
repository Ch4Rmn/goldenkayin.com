<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'My Laravel App')</title>
    @stack('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="turbo-cache-control" content="no-cache">
    <meta name="turbo-visit-control" content="reload">

    {{-- shwekayin logo --}}
    {{-- shwekayin logo.png --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/shwekayin_logo-removebg-preview.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Use Turbo (recommended newer version) -->
    <script type="module" src="https://unpkg.com/@hotwired/turbo@7.3.0/dist/turbo.es2017-esm.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.js"
        integrity="sha512-P3/SDm/poyPMRBbZ4chns8St8nky2t8aeG09fRjunEaKMNEDKjK3BuAstmLKqM7f6L1j0JBYcIRL4h2G6K6Lew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js"
        integrity="sha512-ifx27fvbS52NmHNCt7sffYPtKIvIzYo38dILIVHQ9am5XGDQ2QjSXGfUZ54Bs3AXdVi7HaItdhAtdhKz8fOFrA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.3.0/dist/turbo.min.js"></script>
    <script src="https://unpkg.com/@hotwired/turbo/dist/turbo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hotwired/turbo@7.3.0/dist/turbo.min.js"></script> --}}



    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    {{--  --}}
    @stack('css')
</head>

<body>
    {{-- <div class=" m-3 bg-danger" style="width:100%"></div> --}}

    {{--  --}}
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
        style="z-index:1">
        <div class="container">
            <img src="{{ asset('images/shwekayin_logo-removebg-preview.png') }}" alt=""
                style="width: 80px;height:70px">
            <a class=" navbar-brand" style="margin-left: 15px;text-shadow:1px 1px 1px black"
                href="/">Golden<span>Kayin</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('about') }}"
                            class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ url('destination') }}"
                            class="nav-link {{ Request::is('destination') ? 'active' : '' }}">destination</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ url('manpower') }}"
                            class="nav-link {{ Request::is('manpower') ? 'active' : '' }}">Manpower</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('fmenu') }}"
                            class="nav-link {{ Request::is('fmenu') ? 'active' : '' }}">Foods
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('image') }}"
                            class="nav-link {{ Request::is('image') ? 'active' : '' }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('contact') }}"
                            class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="https://www.facebook.com/share/1C8Shr6CHZ/" target="_blank"
                            class="nav-link"><i class="fa fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="http://www.youtube.com/@GoldenKayinFamily" target="_blank"
                            class="nav-link"><i class="fa fa-youtube"></i></a></li>
                    <li class="nav-item"><a
                            href="https://www.instagram.com/goldenkayinfamily?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank" class="nav-link"><i class="fa fa-instagram"></i></a></li>
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
