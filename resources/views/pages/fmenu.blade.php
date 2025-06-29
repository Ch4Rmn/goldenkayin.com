@extends('layouts.app')

@section('title', 'About Page')

@push('meta')
    <meta name="description" content="Home Page Description">
@endpush

@push('css')
    <link rel="stylesheet" href="">
@endpush

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('https://www.moi.gov.mm/moi:eng/sites/default/files/news-image/2023-11/kayan.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Foods <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Foods Menu</h1>
                </div>
            </div>
        </div>
    </section>
    {{--  --}}
    {{-- <h1>Warmly welcome from goldenkayin</h1> --}}
    <hr>
    <video width="100%" height="500" controls autoplay muted loop poster="{{ asset('') }}">
        <source src="{{ asset('images/mingalar goldenkayin.mp4') }}" type="video/mp4">
        <source src="{{ asset('images/mingalar goldenkayin.mp4') }}" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    {{-- apple  --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @if ($fmenus)
                @else
                @endif
                {{--  --}}
                @foreach ($fmenus as $fmenu)
                    <div class="col-md-3 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="">
                                <span class="price">฿
                                    {{ $fmenu->price }}/person</span>
                                {{-- {{ Voyager::image($post->image) }} --}}
                                <img class="img-fluid" src="{{ Voyager::image($fmenu->image) }}" alt=""
                                    width="300">
                            </a>
                            <div class="text p-4">
                                <h3><a href="#">{{ $fmenu->title }}</a></h3>
                                <span class="days">{{ $fmenu->created_at->format('Y m d H:i:s') }}</span>
                                {{-- <span class="fa fa-map-marker"></span> {{ Str::limit(strip_tags($fmenu->body), 50) }} --}}
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
                {{-- pagiante --}}
            </div>
            <div>
                <div class="" style="z-index:-1">
                    {{ $fmenus->onEachSide(1)->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </div>





        {{-- </div> --}}
    </section>

    <section class="ftco-section testimony-section bg-bottom d-flex justify-content-center align-items-center"
        style="background: #fff; padding: 40px 0;">
        <div class="text-center">
            <img src="{{ asset('images/restaurant address.jpg') }}" class="img-fluid rounded shadow"
                alt="Restaurant Address"
                style="object-fit: cover; width: 100%; max-width: 500px; height: auto; border-radius: 16px;">
            {{-- <div class="mt-3">
                <h5 class="fw-bold mb-1" style="color: #d4a762;">Our Restaurant Address</h5>
                <p class="mb-0 text-muted" style="font-size: 1rem;">
                    123 Main Street, City, Country
                </p>
            </div> --}}
        </div>
        {{--  --}}

    </section>
    {{--  --}}

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading" style="color: orange">Golden Kayin Restaurant </span>
                    <h2 class="mb-4">Customers Feedback</h2>
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
                                        mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
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
                                        mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
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
                                        mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
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
                                        mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
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
                                        mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
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




    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <h2>We Are Pacific A Travel Agency</h2>
                        <p>We can manage your dream building A small river named Duden flows by their place</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src=""></script>
@endpush
