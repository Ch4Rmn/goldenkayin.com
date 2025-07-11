@extends('layouts.app')

@section('title', 'About Page')

@push('meta')
    <meta name="keyword" content="Kayin Travel Tour and Restaurant">
    <meta name="description" content="Kayin Travel Tour and Restaurant">
@endpush

@push('css')
    <style>
        /* * {
                                                                                                                                                                                                                                                                                                box-sizing: border-box;
                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                            body {
                                                                                                                                                                                                                                                                                                background-color: #f1f1f1;
                                                                                                                                                                                                                                                                                                padding: 20px;
                                                                                                                                                                                                                                                                                                font-family: Arial;
                                                                                                                                                                                                                                                                                            } */

        /* Center website */
        .main {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            font-size: 50px;
            word-break: break-all;
        }

        /* .row {
                                                                                                                                                                                                                                                                                                margin: 8px -16px;
                                                                                                                                                                                                                                                                                            } */

        /* Add padding BETWEEN each column */
        .row,
        .row>.column {
            padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
        }

        /* Clear floats after rows */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Content */
        .content {
            background-color: white;
            padding: 10px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
            .column {
                width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('https://i.pinimg.com/736x/72/99/17/72991795a1b6e27945317ee346b094be.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>About us <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    {{--  --}}
    <div class="main">

        <br>
        {{-- <h1 class="fw-bold">About Us</h1> --}}
        {{-- <p>Resize the browser window to see the responsive effect.</p> --}}

        <!-- Portfolio Gallery Grid -->
        {{-- <br> --}}
        <section class="team-section">
            <h2 class="text-center" style="text-decoration: underline;">Management Team</h2>
            {{-- <div class="team-title">Management Team</div> --}}
            <ul class="team-list">
                <li class="team-member">
                    <img src="{{ asset('images/Naw.TinTin.png') }}" alt="Naw Tin Tin">
                    <div class="member-name">Naw Tin Tin</div>
                    <div class="member-role">CEO</div>
                </li>
                <li class="team-member">
                    <img src="{{ asset('images/Saw Kyaw Zin.jpg') }}" alt="Saw Kyaw Zin">
                    <div class="member-name">Saw Kyaw Zin</div>
                    <div class="member-role">Managing Director</div>
                </li>
                <li class="team-member">
                    <img src="{{ asset('images/Jimmy.png') }}" alt="Jimmy">
                    <div class="member-name">Jimmy</div>
                    <div class="member-role">Marketing Manager</div>
                </li>
                <li class="team-member">
                    <img src="{{ asset('images/Naw Engyin Phwe.jpg') }}" alt="Naw Engyin Phwe">
                    <div class="member-name">Naw Engyin Phwe</div>
                    <div class="member-role">Admin Manager</div>
                </li>
                <li class="team-member">
                    <img src="{{ asset('images/sd.jpg') }}" alt="NG SIEW LENG">
                    <div class="member-name">NG SIEW LENG</div>
                    <div class="member-role">Marketing Manager</div>
                </li>
            </ul>
        </section>
        {{--  --}}
        {{-- <div class="row">
            <div class="column " style="background-color: #f7f7f7; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <div class="content" style="">
                    <img src="{{ asset('images/Naw.TinTin.png') }}" alt="Naw.TinTin" style="width:100%;">
                    <h3 style="margin-top: 7px">Naw Tin Tin </h3>
                    <span style="color:red">CEO</span>

                </div>
            </div>
            <div class="column " style="background-color: #f7f7f7; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <div class="content" style="">
                    <img src="{{ asset('images/Saw Kyaw Zin.jpg') }}" alt="Saw Kyaw Zin" style="width:100%;">
                    <h3 style="margin-top: 7px">Saw Kyaw Zin </h3>
                    <span style="color:red">Managing Director</span>

                </div>
            </div>
            <div class="column " style="background-color: #f7f7f7; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <div class="content">
                    <img src="{{ asset('images/Jimmy.png') }}" alt="Jimmy" style="width:100%;">
                    <h3 style="margin-top: 7px">Jimmy </h3>
                    <span style="color:red">Marketing Manager</span>

                </div>
            </div>
            <div class="column " style="background-color: #f7f7f7; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <div class="content">
                    <img src="{{ asset('images/Naw Engyin Phwe.jpg') }}" alt="Mountains" style="width:100%;">
                    <h3 class="" style="margin-top: 7px">Naw Engyin Phwe </h3>
                    <span style="color:red">Admin Manager</span>

                </div>
            </div>
            <div class="column " style="background-color: #f7f7f7; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <div class="content" style="">
                    <img src="{{ asset('images/sd.jpg') }}" alt="Naw.TinTin" style="width:100%;">
                    <h3 style="margin-top: 7px">NG SIEW LENG
                    </h3>
                    <span style="color:red">Marketing Manager</span>

                </div>
            </div>
            <!-- END GRID -->
        </div> --}}
        <hr>
        {{-- <video width="100%" height="500" autoplay muted controls poster="{{ asset('') }}">
            <source src="{{ asset('images/mingalar goldenkayin.mp4') }}" type="video/mp4">
            <source src="{{ asset('images/mingalar goldenkayin.mp4') }}" type="video/ogg">
            Your browser does not support the video tag.
        </video> --}}

        <div class="content"
            style="padding: 10px 10px;background-color: #f1e9e9; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <img src="{{ asset('images/shwe kayin.jpg') }}" class="img-fluid" alt="" style="width:100%">
            <div class="px-2" style="padding: 0px 10px;">
                <h3 class="mt-3">Letter From Our Leader</h3>
                <p style="text-indent: 50px">Dear Candidates and Clients,

                    Welcome to Golden Kayin Manpower Pte.Ltd!

                    As the CEO of GKA manpower, I’m delighted to personally welcome
                    you to our website and introduce you to our dedicated team. In today’s
                    dynamic job market, finding the right talent or the perfect career
                    oppertunity can be a challenging journey. That’s where we come in.

                    We understand that your success is our success. Whether you are
                    looking for your next dream job or seeking to build a high-performing
                    team, we are here to support you every step of the way.

                    Thank you for consideration GKA Manpower as your trusted partner in
                    the world of work.We look forward to the oppertunity to work with you
                    and help you achieve your goals.</p>
                <h5 class="" style="float: right;">Naw Tin Tin Hlaing, Chief Executive Officer</h5>
                <br>

            </div>
            <br>

        </div>

        <!-- END MAIN -->
    </div>
    {{--  --}}

    {{--  --}}


    <section class="ftco-intro ftco-section ftco-no-pt mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img"
                        style="background-image: url(https://fredcoletravel.com/wp-content/uploads//2016/01/Kyone-Htaw-Waterfall.jpg);">
                        <div class="overlay"></div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h1 style="text-shadow: 1px 1px 1px rgb(0, 0, 0);color:white">Office</h1>
                                <div class="p-3" style="text-align:left;background-color:rgba(255,255,255,0.104);">
                                    <p>Location - 111 North Bridge Road, #05-33 Peninsula Plaza</p>
                                    <p>Phone - Tel: <a href="tel:6583172927">+6583172927</a></p>
                                    <p>Mail - <a href="mailto:gkasingapore@gmail.com">gkasingapore@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 style="text-shadow: 1px 1px 1px rgb(0, 0, 0);color:white">Business hours</h1>
                                <div class="p-3" style="text-align:left;background-color:rgba(255,255,255,0.104);">
                                    <p>Monday - Friday: 10am – 6pm</p>
                                    <p>Sunday: 9am - 6pm</p>
                                </div>
                            </div>
                        </div>
                        {{-- <h2>Travel Agency</h2>
                    <p>We can manage your dream building A small river named Duden flows by their place</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('css')
        <style>
            .team-section {
                max-width: 1000px;
                margin: 40px auto;
                padding: 24px 16px;
                background: #fff;
                border-radius: 18px;
                box-shadow: 0 6px 32px rgba(70, 90, 100, 0.08);
            }

            .team-title {
                text-align: center;
                font-size: 2rem;
                font-weight: 700;
                margin-bottom: 32px;
                color: #353535;
            }

            .team-list {
                display: flex;
                flex-wrap: wrap;
                gap: 28px;
                justify-content: center;
                padding: 0;
                list-style: none;
            }

            .team-member {
                background: #f2f6fc;
                border-radius: 14px;
                padding: 18px 20px;
                width: 300px;
                box-shadow: 0 2px 12px rgba(80, 120, 190, 0.04);
                text-align: center;
                transition: box-shadow .2s;
            }

            .team-member:hover {
                box-shadow: 0 6px 20px rgba(80, 120, 190, 0.15);
            }

            .team-member img {
                width: 200px;
                height: 200px;
                border-radius: 0%;
                object-fit: cover;
                margin-bottom: 12px;
                border: 3px solid #e7eaf6;
                background: #fff;
            }

            .member-name {
                font-size: 1.1rem;
                font-weight: 700;
                margin: 10px 0 4px 0;
                color: #232b4c;
            }

            .member-role {
                color: #6d6d9e;
                background: #d0e7ff;
                font-size: .98rem;
                padding: 4px 12px;
                border-radius: 8px;
                display: inline-block;
                margin-bottom: 0;
            }

            @media (max-width: 600px) {
                .team-list {
                    flex-direction: column;
                    align-items: center;
                    gap: 18px;
                }

                .team-member {
                    width: 90vw;
                    max-width: 320px;
                }
            }

            @media (max-width: 767.98px) {
                .ftco-intro .row>.col-md-6 {
                    margin-bottom: 1.5rem;
                }

                .ftco-intro h1 {
                    font-size: 1.5rem !important;
                }

                .ftco-intro .p-3 {
                    font-size: 1rem;
                    padding: 10px !important;
                }
            }
        </style>
    @endpush

@endsection

@push('scripts')
    <script src=""></script>
@endpush
