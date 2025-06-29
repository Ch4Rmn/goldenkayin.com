@extends('layouts.app')

@section('title', 'About Page')

@push('meta')
    <meta name="description" content="Home Page Description">
@endpush

@push('css')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            /* margin: 0; */
            /* font-family: Arial; */
        }

        .header {
            text-align: center;
            padding: 32px;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('https://lh3.googleusercontent.com/gps-cs-s/AC9h4nqmhzdBj-fWyn0RQ_ZuQO2wvT-29nBvEBzV3F2OkrlF3zG_fRIEnzdRFQDOgrV10aRsUD4LqrOxSa2styvpExNIhM0ZJkq0jTgKrbMabYG6gQxBtAv3S8sBHZehV8nD1IjiGrrc=w675-h390-n-k-no');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Image Gallery<i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Image Gallery</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Header -->
    <div class="text-center ">
        <h1 style="margin-top: 30px">Image Gallery</h1>
        <p>Resize the browser window to see the responsive effect.</p>
    </div>

    <!-- Photo Grid -->
    {{-- <div class="row mx-1">
        @foreach ($images as $image)
            <div class="column">
                <img src="{{ asset('images/about-1.jpg') }}" style="width:100%">
                image 1
                <img src="{{ asset('images/bg_1.jpg') }}" style="width:100%">
                image 2
                <img src="{{ asset('images/bg_2.jpg') }}" style="width:100%">
                image 3
                <img src="{{ asset('images/bg_3.jpg') }}" style="width:100%">
                image 4
                <img src="{{ asset('images/bg_4.jpg') }}" style="width:100%">
                image 5
                <img src="{{ asset('images/bg_5.jpg') }}" style="width:100%">
                image 6
            </div>
            <div class="column">
                <img src="{{ asset('images/bg_5.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_3.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_4.jpg') }}" style="width:100%">
                <img src="{{ asset('images/about-1.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_1.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_2.jpg') }}" style="width:100%">
            </div>
            <div class="column">
                <img src="{{ asset('images/bg_4.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_3.jpg') }}" style="width:100%">
                <img src="{{ asset('images/about-1.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_1.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_5.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_2.jpg') }}" style="width:100%">
            </div>
            <div class="column">
                <img src="{{ asset('images/bg_5.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_2.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_1.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_3.jpg') }}" style="width:100%">
                <img src="{{ asset('images/bg_4.jpg') }}" style="width:100%">
                <img src="{{ asset('images/about-1.jpg') }}" style="width:100%">
            </div>
        @endforeach
    </div> --}}
    <div class="row mx-1">
        @foreach ($images as $image)
            <div class="column">
                {{-- <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->alt ?? 'Gallery Image' }}"
                    style="width:100%"> --}}
                <img class="img-fluid" src="{{ Voyager::image($image->image) }}" alt="" style="width:100%">
            </div>
        @endforeach
    </div>
@endsection

@push('scripts')
    <script src=""></script>
@endpush
