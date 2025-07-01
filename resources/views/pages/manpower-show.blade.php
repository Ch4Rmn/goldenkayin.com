@extends('layouts.app')

@section('title', 'ManPower Page')

@push('meta')
    <meta name="description" content="Home Page Description">
@endpush

@push('css')
    <style>
        .card {
            border-radius: 1rem;
        }

        .card img {
            max-height: 300px;
            object-fit: cover;
        }

        @media (max-width: 767.98px) {
            .card .row.g-0 {
                flex-direction: column;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Tour List <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Tours List</h1>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="card shadow-lg border-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5 text-center p-4">
                                @if ($manpower->image)
                                    <img src="{{ asset('storage/' . $manpower->image) }}" class="img-fluid rounded mb-3"
                                        alt="{{ $manpower->name }}">
                                @else
                                    <img src="https://thumbs.dreamstime.com/b/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available-236105299.jpg"
                                        class="img-fluid rounded mb-3" alt="No Image">
                                @endif
                                <div class="text-muted small mb-2">
                                    <i class="fa fa-calendar-alt me-1"></i>
                                    Created At: {{ $manpower->created_at }}
                                </div>
                            </div>
                            <div class="col-md-7 p-4">
                                <h3 class="mb-3">{{ $manpower->name ?? '-' }}</h3>
                                <div class="row">
                                    <div class="col-6 mb-2"><strong>Ref Code:</strong> {{ $manpower->ref_code ?? '-' }}
                                    </div>
                                    <div class="col-6 mb-2"><strong>Type:</strong> {{ $manpower->type ?? '-' }}</div>
                                    <div class="col-6 mb-2"><strong>Rest Day Preference:</strong>
                                        {{ $manpower->rest_day_preference ?? '-' }}</div>
                                    <div class="col-6 mb-2"><strong>From Agency:</strong>
                                        {{ $manpower->from_agency ?? '-' }}</div>
                                    <div class="col-6 mb-2"><strong>Available:</strong>
                                        {{ $manpower->available ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Nationality:</strong>
                                        {{ $manpower->nationality ?? '-' }}</div>
                                    <div class="col-6 mb-2"><strong>Education:</strong> {{ $manpower->education ?? '-' }}
                                    </div>
                                    <div class="col-6 mb-2"><strong>English:</strong> {{ $manpower->english ?? '-' }}</div>
                                    <div class="col-6 mb-2"><strong>Experience:</strong> {{ $manpower->experience ?? '-' }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6 mb-2"><strong>Care For Infant Children:</strong>
                                        {{ $manpower->care_for_infant_children ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Care For Elderly:</strong>
                                        {{ $manpower->care_for_elderly ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Care For Disabled:</strong>
                                        {{ $manpower->care_for_disabled ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Care For Housework:</strong>
                                        {{ $manpower->care_for_housework ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Cooking:</strong>
                                        {{ $manpower->cooking ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Simple Screwing:</strong>
                                        {{ $manpower->simple_screwing ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Able To Handle Pork:</strong>
                                        {{ $manpower->able_to_handle_pork ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Able To Eat Pork:</strong>
                                        {{ $manpower->able_to_eat_pork ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Able To Handle Beef:</strong>
                                        {{ $manpower->able_to_handle_beef ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Able To Care Dog Cat:</strong>
                                        {{ $manpower->able_to_care_dog_cat ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Able To Gardening:</strong>
                                        {{ $manpower->able_to_gardening ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Able To Screwing:</strong>
                                        {{ $manpower->able_to_screwing ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Willing To Wash Car:</strong>
                                        {{ $manpower->willing_to_wash_car ? 'Yes' : 'No' }}</div>
                                    <div class="col-6 mb-2"><strong>Willing To Work With Another Helper:</strong>
                                        {{ $manpower->willing_to_work_with_another_helper ? 'Yes' : 'No' }}</div>
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
