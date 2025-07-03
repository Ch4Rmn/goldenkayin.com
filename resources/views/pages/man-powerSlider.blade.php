@extends('layouts.app')

@section('title', 'About Page')

@push('meta')
    <meta name="keyword" content="Kayin Travel Tour and Restaurant">
    <meta name="description" content="Kayin Travel Tour and Restaurant">
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
                    <h1 class="mb-0 bread">Manpower List</h1>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row">

                {{--  --}}
                @foreach ($manpowers as $manpower)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            @if ($manpower->image)
                                <img src="{{ asset('storage/' . $manpower->image) }}" class="card-img-top"
                                    alt="{{ $manpower->name }}">
                            @else
                                <img src="https://thumbs.dreamstime.com/b/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available-236105299.jpg"
                                    class="card-img-top" alt="No Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title mb-2"><strong>Name:</strong>{{ $manpower->name ?? '-' }}</h5>
                                <p class="mb-1"><strong>Ref Code:</strong> {{ $manpower->ref_code ?? '-' }}</p>
                                <p class="mb-1"><strong>Type:</strong> {{ $manpower->type ?? '-' }}</p>
                                <a class="btn btn-primary float-right"
                                    href="{{ route('manpower.show', $manpower->id) }}">See
                                    more</a>
                                {{-- <p class="mb-1"><strong>Rest Day Preference:</strong>
                                    {{ $manpower->rest_day_preference ?? '-' }}</p>
                                <p class="mb-1"><strong>From Agency:</strong> {{ $manpower->from_agency ?? '-' }}</p>
                                <p class="mb-1"><strong>Available:</strong> {{ $manpower->available ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Nationality:</strong> {{ $manpower->nationality ?? '-' }}</p>
                                <p class="mb-1"><strong>Education:</strong> {{ $manpower->education ?? '-' }}</p>
                                <p class="mb-1"><strong>English:</strong> {{ $manpower->english ?? '-' }}</p>
                                <p class="mb-1"><strong>Care For Infant Children:</strong>
                                    {{ $manpower->care_for_infant_children ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Care For Elderly:</strong>
                                    {{ $manpower->care_for_elderly ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Care For Disabled:</strong>
                                    {{ $manpower->care_for_disabled ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Care For Housework:</strong>
                                    {{ $manpower->care_for_housework ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Cooking:</strong> {{ $manpower->cooking ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Simple Screwing:</strong>
                                    {{ $manpower->simple_screwing ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Able To Handle Pork:</strong>
                                    {{ $manpower->able_to_handle_pork ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Able To Eat Pork:</strong>
                                    {{ $manpower->able_to_eat_pork ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Able To Handle Beef:</strong>
                                    {{ $manpower->able_to_handle_beef ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Able To Care Dog Cat:</strong>
                                    {{ $manpower->able_to_care_dog_cat ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Able To Gardening:</strong>
                                    {{ $manpower->able_to_gardening ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Able To Screwing:</strong>
                                    {{ $manpower->able_to_screwing ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Willing To Wash Car:</strong>
                                    {{ $manpower->willing_to_wash_car ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Willing To Work With Another Helper:</strong>
                                    {{ $manpower->willing_to_work_with_another_helper ? 'Yes' : 'No' }}</p>
                                <p class="mb-1"><strong>Experience:</strong> {{ $manpower->experience ?? '-' }}</p>
                            </div>
                            <div class="card-footer text-muted small">
                                Created At: {{ $manpower->created_at }}
                            </div> --}}
                            </div>
                        </div>
                @endforeach
                {{-- pagiante --}}
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
