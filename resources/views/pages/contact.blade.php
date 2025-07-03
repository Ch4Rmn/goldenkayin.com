@extends('layouts.app')

@section('title', 'Contact Page')

@push('meta')
    <meta name="keyword" content="Kayin Travel Tour and Restaurant">
    <meta name="description" content="Kayin Travel Tour and Restaurant">
@endpush

@push('css')
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endpush

@section('content')


    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/09/67/c4/eb/hpa-an.jpg');">
        <div class="overlay"></div>
        <div class="container">
            {{--  --}}

            {{--  --}}
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"
                        style="z-index: 9999;width: 100%;
                                box-shadow: 2px 2px #81ff00;">
                        <strong style="text-shadow:1px 1px 1px black;font-size: x-large;">Success!</strong>
                        <p style="text-shadow:1px 1px 1px black;color:black">{{ session('success') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Contact us <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">
            <h1 class="text-center">Shwe Kayin Restaurant</h1>
            opening hour<h1 class="text-center animate__animated animate__flash animate__infinite animate__slow">Daily Open
                - 5AM to
                24AM</h1>
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h3 class="mb-2">Address</h3>
                        <p><a target="_blank" href="https://maps.app.goo.gl/vmqfMeNyn2xJoC2r8">2 4 Sukhumvit 71 Rd, Phra
                                Khanong, Watthana, Bangkok 10110, Thailand
                            </a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-2">Contact Number</h3>
                        <p><a href="tel:6583172927">081-606-0788</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <h3 class="mb-2">Email Address</h3>
                        <p><a href="mailto:myanmargoldenkayin2023@gmail.com">myanmargoldenkayin2023</a></p>
                        <p><a href="mailto:myanmargoldenkayin2023@gmail.com">@gmail.com</a></p>
                        {{-- <p><a href="mailto:gkasingapore@gmail.com">gkasingapore@gmail.com</a></p> --}}
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <h3 class="mb-2">Website</h3>
                        <p><a href="https://goldenkayin.com/" target="_blank">goldenkayin.com</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="ftco-section contact-section ftco-no-pt">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">

                    <form action="" method="POST" class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            {{-- <input type="submit" value="Send EmaiL" class="btn btn-primary py-3 px-5"> --}}
                            <a href="mailto:myanmargoldenkayin2023@gmail.com" class="btn btn-primary py-3 px-5">Send
                                Email</a>
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.084632703368!2d100.594338!3d13.7133238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f173e58f229%3A0xdb7c7b1e84a5b0d7!2sGolden%20kayin%20family!5e0!3m2!1sen!2smm!4v1751268363937!5m2!1sen!2smm"
                        width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{--  --}}

    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <h2>We Are Shwe Kayin Restaurant Agency</h2>
                        <p>Experience authentic flavors and heartfelt hospitality at Shwe Kayin Restaurant. Our dedicated
                            team is passionate about bringing you the very best of Kayin cuisine in a warm, welcoming
                            atmosphere. Join us and make every meal a memorable occasion.</p> {{-- <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  --}}



    <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">
            <h1 class="text-center">Golden Kayin Man Power</h1>
            Opening hour <h1 class="text-center animate__animated animate__flash animate__infinite animate__slow  ">Monday
                to
                Friday -
                10AM to 6PM
                Sunday - 9AM to 6PM</h1>
            <br>
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h3 class="mb-2">Address</h3>
                        <p><a target="_blank" href="https://maps.app.goo.gl/vmqfMeNyn2xJoC2r8"> 111 North Bridge Road,
                                #05-33 Peninsula Plaza
                            </a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-2">Contact Number</h3>
                        <p><a href="tel:6583172927"> +6583172927</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <h3 class="mb-2">Email Address</h3>
                        <p><a href="mailto:gkasingapore@gmail.com"> gkasingapore@gmail.com</a></p>
                        {{-- <p><a href="mailto:myanmargoldenkayin2023@gmail.com">@gmail.com</a></p> --}}
                        {{-- <p><a href="mailto:gkasingapore@gmail.com">gkasingapore@gmail.com</a></p> --}}
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <h3 class="mb-2">Website</h3>
                        <p><a href="https://goldenkayin.com/" target="_blank">goldenkayin.com</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="ftco-section contact-section ftco-no-pt">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">

                    <form action="" method="POST" class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            {{-- <input type="submit" value="Send EmaiL" class="btn btn-primary py-3 px-5"> --}}
                            <a href="mailto:gkasingapore@gmail.com" class="btn btn-primary py-3 px-5">Send
                                Email</a>
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8035273336905!2d103.8508504!3d1.2922871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19c4dba54197%3A0xf0cec8ddf9486024!2sPeninsula%20Plaza!5e0!3m2!1sen!2smm!4v1751533689264!5m2!1sen!2smm"
                        width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{--  --}}

    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <h2>We Are Golden Kayin Travel Agency</h2>
                        {{-- <p>We can manage your dream building A small river named Duden flows by their place</p> --}}
                        {{-- <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    <script src=""></script>
@endpush
