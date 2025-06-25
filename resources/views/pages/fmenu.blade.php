@extends('layouts.app')

@section('title', 'About Page')

@push('meta')
    <meta name="description" content="Home Page Description">
@endpush

@push('css')
    <link rel="stylesheet" href="">
@endpush

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
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
    {{--apple  --}}
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


        </div>

        <div class="d-flex justify-content-center">
            <div>{{ $fmenus->links() }}</div>
        </div>



        {{-- </div> --}}
    </section>
    {{--  --}}




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
