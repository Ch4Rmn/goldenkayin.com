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
                                    class="fa fa-chevron-right"></i></a></span> <span>Manpower List <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Manpower</h1>
                </div>
            </div>
        </div>
    </section>
    



    <section class="ftco-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('images/1.png') }}" alt="" class="img-fluid rounded shadow">
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('images/2.png') }}" alt="" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div>
                {{-- {{ $posts->links() }} --}}
            </div>
        </div>



        {{-- </div> --}}
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
