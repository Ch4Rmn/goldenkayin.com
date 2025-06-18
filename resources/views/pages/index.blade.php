@extends('layouts.app')

@section('title', 'Home Page')

@push('meta')
    <meta name="description" content="Home Page Description">
@endpush

@push('css')
    <link rel="stylesheet" href="">
    <style>
        .ftco-search .nav-pills {
            display: inline-flex !important;
        }
    </style>
@endpush

@section('content')

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading" style="text-shadow:1px 1px 1px black !important">Welcome to GoldenKayin</span>
                    <h1 class="mb-4" style="text-shadow:1px 1px 1px black !important">Discover Your Favorite Place with Us
                    </h1>
                    <p class="caps" style="text-shadow:1px 1px 1px black !important">Travel to the any corner of the
                        world, without
                        going around in circles</p>
                </div>
                <a href="https://vimeo.com/45830194"
                    class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center" style="display: block">
                        <div class="col-md-12 nav-link-wrap">
                            <ul class="nav nav-pills justify-content-center" id="custom-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="travel-tab" data-toggle="pill" href="#travel"
                                        role="tab" aria-controls="travel" aria-selected="true">Travel</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link" id="restaurant-tab" data-toggle="pill" href="#restaurant"
                                        role="tab" aria-controls="restaurant" aria-selected="false">Restaurant</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="travel" role="tabpanel"
                                aria-labelledby="travel-tab">
                                {{-- Travel content --}}
                                <div>
                                    <section class="ftco-section services-section">
                                        <div class="container">
                                            <div class="row d-flex">
                                                <div
                                                    class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                                                    <div class="w-100">
                                                        <span class="subheading">Welcome to GoldenKayin</span>
                                                        <h2 class="mb-4">It's time to start your adventure</h2>
                                                        <p>A small river named Duden flows by their place and
                                                            supplies it with the necessary regelialia. It
                                                            is a paradisematic country, in which roasted parts of
                                                            sentences fly into your mouth.</p>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there
                                                            live the blind texts. Separated they live in
                                                            Bookmarksgrove right at the coast of the Semantics,
                                                            a large language ocean.
                                                            A small river named Duden flows by their place and
                                                            supplies it with the necessary regelialia.
                                                        </p>
                                                        <p><a href="#" class="btn btn-primary py-3 px-4">Search
                                                                Destination</a></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                                                            <div class="services services-1 color-1 d-block img"
                                                                style="background-image: url(images/services-1.jpg);">
                                                                <div
                                                                    class="icon d-flex align-items-center justify-content-center">
                                                                    <span class="flaticon-paragliding"></span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h3 class="heading mb-3">Activities</h3>
                                                                    <p>A small river named Duden flows by their
                                                                        place and supplies it with the necessary</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                                                            <div class="services services-1 color-2 d-block img"
                                                                style="background-image: url(images/services-2.jpg);">
                                                                <div
                                                                    class="icon d-flex align-items-center justify-content-center">
                                                                    <span class="flaticon-route"></span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h3 class="heading mb-3">Travel Arrangements
                                                                    </h3>
                                                                    <p>A small river named Duden flows by their
                                                                        place and supplies it with the necessary</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                                                            <div class="services services-1 color-3 d-block img"
                                                                style="background-image: url(images/services-3.jpg);">
                                                                <div
                                                                    class="icon d-flex align-items-center justify-content-center">
                                                                    <span class="flaticon-tour-guide"></span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h3 class="heading mb-3">Private Guide</h3>
                                                                    <p>A small river named Duden flows by their
                                                                        place and supplies it with the necessary</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                                                            <div class="services services-1 color-4 d-block img"
                                                                style="background-image: url(images/services-4.jpg);">
                                                                <div
                                                                    class="icon d-flex align-items-center justify-content-center">
                                                                    <span class="flaticon-map"></span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h3 class="heading mb-3">Location Manager</h3>
                                                                    <p>A small river named Duden flows by their
                                                                        place and supplies it with the necessary</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    {{--  --}}
                                    <section class="ftco-section services-section">
                                        <div class="container">
                                            <div class="row d-flex">
                                                <div
                                                    class="col-md-6 order-md-first heading-section pl-md-5 ftco-animate d-flex align-items-center">
                                                    <div class="w-100">
                                                        <span class="subheading">Welcome to GoldenKayin</span>
                                                        <h2 class="mb-4" style="text-decoration: underline">Company
                                                            Information</h2>
                                                        <h2 class="mb-4" style="font-weight: normal !important">History
                                                        </h2>

                                                        <p>Over the 15 years, Golden Kayin has become a trusted
                                                            partner for business ranging from start-ups to
                                                            multinational corporations in oversea employnment
                                                            field. We are passionate about contributing to the
                                                            growth of our community by facilitating meaningful
                                                            employment and fostering strong professional
                                                            connections. As we look to the future in 2025 and
                                                            beyond, our commitent to these founding principles
                                                            remains stromger than ever.
                                                        </p>
                                                        <p><a href="#" class="btn btn-primary py-3 px-4 mt-2">Learn
                                                                more</a></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="w-100 mt-2">
                                                        {{-- <span class="subheading">this is culture</span> --}}
                                                        <h2 class="mb-4">Culture</h2>

                                                        <ul>
                                                            <p>Our culture at Golden Kayin is defined by our core values and
                                                                our
                                                                shared
                                                                commitment to making a positive impact on the lives of our
                                                                candidates and the
                                                                success of our clients. We driven by:

                                                                <li><b>Integrity</b>: We operate with honesty, ethics, and
                                                                    transparency in
                                                                    all our interaction.</li>

                                                                <li><b>Excellence</b>:We strive for the highest standards of
                                                                    quality
                                                                    and
                                                                    professionalism in
                                                                    everything we do.</li>

                                                                <li><b>Collaboratuion</b>:We believe in the power of
                                                                    teamwork
                                                                    and
                                                                    work
                                                                    together to
                                                                    achieve common goals.
                                                                </li>

                                                                <li><b>Innovation</b>:We are always looking for new and
                                                                    better
                                                                    ways
                                                                    to
                                                                    serve our clients
                                                                    and candidates.
                                                                </li>

                                                                <li><b>Impact</b>:We are passionate about connecting the
                                                                    right
                                                                    people with
                                                                    the right
                                                                    opportunities, creating lasting positive change.
                                                                </li>
                                                            </p>
                                                        </ul>
                                                        {{-- <p><a href="#" class="btn btn-primary py-3 px-4">Search
                                                                Destination</a></p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="ftco-intro ftco-section ftco-no-pt">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-12 text-center">
                                                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                                                        <div class="overlay"></div>
                                                        <h1 class="text-white my-2" style="text-decoration: underline">
                                                            Vision and Mission Statements
                                                        </h1>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-4 mb-md-0">
                                                                <h1 class="text-white" style="font-size:2rem;">Our Vision
                                                                </h1>
                                                                <p class="text-white"
                                                                    style="background:rgba(0,0,0,0.2);border-radius:8px;padding:1rem;">
                                                                    Our vision is to be the leading and most trusted
                                                                    recruitment partner, recognized for our innovative
                                                                    approach and unwavering commitment to
                                                                    exceptional service. We aim to enrich the lives of
                                                                    individuals by connecting them with meaningful
                                                                    career opportunities where they can thrive and
                                                                    contribute their talents. Simultaneously, we strive to
                                                                    empower organizations by providing them with the
                                                                    high-caliber talent they need to achieve their
                                                                    strategic objectives and foster a culture of success.
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h1 class="text-white" style="font-size:2rem;">Our Mission
                                                                </h1>
                                                                <p class="text-white"
                                                                    style="background:rgba(0,0,0,0.2);border-radius:8px;padding:1rem;">
                                                                    Our mission is to empower individuals in their career
                                                                    journeys by providing comprehensive and personalized
                                                                    recruitment services that connect them with fulfilling
                                                                    employment opportunities. We are dedicated to
                                                                    understanding the unique needs of both our candidates
                                                                    and client companies, ensuring a seamless and efficient
                                                                    matching process that leads to long-term success for all
                                                                    stakeholders. We strive to build lasting partnerships
                                                                    with
                                                                    businesses across diverse industries, offering expert
                                                                    guidance and tailored solutions to meet their evolving
                                                                    talent acquisition needs.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        {{-- <p>We can manage your dream building A small river named
                        Duden flows by their place</p>
                    <p class="mb-0"><a href="#"
                            class="btn btn-primary px-4 py-3">Ask
                            For A
                            Quote</a></p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    @push('css')
                                        <style>
                                            @media (max-width: 767.98px) {
                                                .ftco-intro .row>.col-md-6 {
                                                    margin-bottom: 1.5rem;
                                                }

                                                .ftco-intro h1 {
                                                    font-size: 1.3rem !important;
                                                }

                                                .ftco-intro p {
                                                    font-size: 1rem !important;
                                                }
                                            }
                                        </style>
                                    @endpush
                                    {{--  --}}
                                    <section class="ftco-section img ftco-select-destination"
                                        style="background-image: url(images/bg_3.jpg);">
                                        <div class="container">
                                            <div class="row justify-content-center pb-4">
                                                <div class="col-md-12 heading-section text-center ftco-animate">
                                                    <span class="subheading">Pacific Provide Places</span>
                                                    <h2 class="mb-4">Select Your Destination</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container container-2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="carousel-destination owl-carousel ftco-animate">
                                                        <div class="item">
                                                            <div class="project-destination">
                                                                <a href="#" class="img"
                                                                    style="background-image: url(images/place-1.jpg);">
                                                                    <div class="text">
                                                                        <h3>Philippines</h3>
                                                                        <span>8 Tours</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="project-destination">
                                                                <a href="#" class="img"
                                                                    style="background-image: url(images/place-2.jpg);">
                                                                    <div class="text">
                                                                        <h3>Canada</h3>
                                                                        <span>2 Tours</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="project-destination">
                                                                <a href="#" class="img"
                                                                    style="background-image: url(images/place-3.jpg);">
                                                                    <div class="text">
                                                                        <h3>Thailand</h3>
                                                                        <span>5 Tours</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="project-destination">
                                                                <a href="#" class="img"
                                                                    style="background-image: url(images/place-4.jpg);">
                                                                    <div class="text">
                                                                        <h3>Autralia</h3>
                                                                        <span>5 Tours</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="project-destination">
                                                                <a href="#" class="img"
                                                                    style="background-image: url(images/place-5.jpg);">
                                                                    <div class="text">
                                                                        <h3>Greece</h3>
                                                                        <span>7 Tours</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section class="ftco-section">
                                        <div class="container">
                                            <div class="row justify-content-center pb-4">
                                                <div class="col-md-12 heading-section text-center ftco-animate">
                                                    <span class="subheading">Destination</span>
                                                    <h2 class="mb-4">Tour Destination</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                @if ($posts)
                                                    {{--  --}}
                                                    @foreach ($posts as $post)
                                                        <div class="col-md-4 ftco-animate">
                                                            <div class="project-wrap">
                                                                <a href="#" class="img" style="">
                                                                    <span class="price">฿{{ $post->price }}/person</span>
                                                                    {{-- {{ Voyager::image($post->image) }} --}}
                                                                    <img class="img-fluid"
                                                                        src="{{ Voyager::image($post->image) }}"
                                                                        alt="" width="300">
                                                                </a>
                                                                <div class="text p-4">
                                                                    <span class="days">8 Days Tour</span>
                                                                    <h3><a href="#">{{ $post->title }}</a></h3>
                                                                    <span class="fa fa-map-marker"></span>
                                                                    {{ Str::limit(strip_tags($post->body), 50) }}
                                                                    {{-- <a href="{{ url('/blogs/' . $blog->slug) }}">Read more</a> --}}
                                                                    <ul>
                                                                        {{-- <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-mountains"></span>Near Mountain</li> --}}
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                @endif
                                            </div>

                                        </div>
                                </div>
    </section>

    <section class="ftco-section ftco-about img"style="background-image: url(images/bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    <a href="https://vimeo.com/45830194"
                        class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image:url(images/about-1.jpg);">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    {{-- <span class="subheading">About Us</span> --}}
                                    <h2 class="mb-4">Make Your Tour Memorable and
                                        Safe With Us</h2>
                                    <p>Far far away, behind the word mountains, far
                                        from the countries Vokalia and
                                        Consonantia, there live the blind texts.
                                        Separated they live in Bookmarksgrove right
                                        at the coast of the Semantics, a large
                                        language ocean.</p>
                                    <p><a href="#" class="btn btn-primary">Book
                                            Your
                                            Destination</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Tourist Feedback</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word
                                        mountains, far from the countries
                                        Vokalia and Consonantia, there live the
                                        blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing
                                                Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word
                                        mountains, far from the countries
                                        Vokalia and Consonantia, there live the
                                        blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing
                                                Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word
                                        mountains, far from the countries
                                        Vokalia and Consonantia, there live the
                                        blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing
                                                Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word
                                        mountains, far from the countries
                                        Vokalia and Consonantia, there live the
                                        blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing
                                                Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word
                                        mountains, far from the countries
                                        Vokalia and Consonantia, there live the
                                        blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing
                                                Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2 class="mb-4">Recent Post</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2020</span>
                                    <span class="mos">September</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Most Popular
                                    Place In This World</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                            <p><a href="#" class="btn btn-primary">Read
                                    more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2020</span>
                                    <span class="mos">September</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Most Popular
                                    Place In This World</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                            <p><a href="#" class="btn btn-primary">Read
                                    more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2020</span>
                                    <span class="mos">September</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Most Popular
                                    Place In This World</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                            <p><a href="#" class="btn btn-primary">Read
                                    more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-intro ftco-section ftco-no-pt">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12 text-center">
                                                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                                                        <div class="overlay"></div>
                                                        <h2>We Are Pacific A Travel Agency</h2>
                                                        <p>We can manage your dream building A small river named
                                                            Duden flows by their place</p>
                                                        <p class="mb-0"><a href="#"
                                                                class="btn btn-primary px-4 py-3">Ask
                                                                For A
                                                                Quote</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> --}}
    </div>
    </div>
    <div class="tab-pane fade" id="restaurant" role="tabpanel" aria-labelledby="restaurant-tab">
        {{-- Restaurant content --}}
        <div>Restaurant Content Here</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
                var target = $(e.target).attr("href")
                if (target == '#travel') {
                    console.log("Travel tab is now active");
                } else if (target == '#restaurant') {
                    console.log("Restaurant tab is now active");
                }
            });
        });
    </script>
@endpush
