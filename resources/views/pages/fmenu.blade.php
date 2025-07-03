@extends('layouts.app')

@section('title', 'Foods Menu Page')

@push('meta')
    <meta name="description" content="Home Page Description">
@endpush

@push('css')
    {{-- <link rel="stylesheet" href=""> --}}
    <style>
        div.owl-dots {
            /* margin-top: -50px; */
        }
    </style>
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
    <video width="100%" height="500" autoplay muted loop poster="{{ asset('') }}">
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

    <section class="ftco-section testimony-section bg-bottom container"
        style="background-image:url(https://i.pinimg.com/736x/83/c5/43/83c543b597757e9a03f37c6f2f857448.jpg); object-fit: cover; height:1100px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading" style="color: orange">Shwe Kayin Restaurant </span>
                    <h2 class="mb-4 ">Customers Feedback</h2>
                    <a
                        href="https://www.google.com/search?q=Golden+Kayin+Family+Restaurant+(%E1%80%9B%E1%80%BD%E1%80%BE%E1%80%B1%E1%80%80%E1%80%9B%E1%80%84%E1%80%BA%E1%80%99%E1%80%AD%E1%80%9E%E1%80%AC%E1%80%B8%E1%80%85%E1%80%AF)&ie=UTF-8#lrd=0x30e29f173e58f229:0xdb7c7b1e84a5b0d7,1,,,,">google
                        reviews</a>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        {{--  --}}

                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(https://t4.ftcdn.net/jpg/02/15/84/43/360_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg)">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">joesagala</p>
                                            {{-- <span class="position">Edited 6 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">Normally I play with my phone while eating alone. But this time, want
                                        to enjoy every taste. Pork curry & Eggplant curry so delicious 😋. Price also
                                        reasonable definitely comeback again.
                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 5/5 |
                                        Service: 5/5 | Atmosphere: 4/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjWQFZKYIJ6fULnG5rEGGwRMcaz2zSfcmKv02q07orzllqBR7pE=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">
                                                YadanarMyo Htut</p>
                                            {{-- <span class="position">a month ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">Tasty burmese food and staff are super nice.
                                        Definitely a good place to go if you miss the taste of home. Rainbow salad and
                                        pennywort salad are my favorite (not included in the photo)

                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 4/5 | Service:
                                        5/5 | Atmosphere: 3/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">Edurne Sagarna</p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">The food is delicious and not expensive. The family is algo very
                                        friendly and peaceful. I widely recommend this place of you want to eat healthy and
                                        Thai dishes. There is only one thing I did not like much; there was not AC. I hope
                                        that with the time they instal it.
                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 5/5 |
                                        Service: 5/5 | Atmosphere: 4/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">Kyaw Tun</p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">If you are Myanmar, I am sure you will 100% enjoy all the food in
                                        there. The Food I had were so yummy 😋, staff are very kind and friendly.
                                        You must visit there at least one time if you are in Bangkok.

                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 3/5 | Service:
                                        4/5 | Atmosphere: 3/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">မယ်ကျွိ Mae Kwyi</p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">The shop located next to the busy street, like most of the places
                                        next to busy road in Bangkok the shop is noisy.
                                        Not a lot of choice for breakfast. Dinner maybe ok, however the food r not well
                                        covered even they r next to busy road. I don’t really dare to eat the already cooked
                                        Burmese carry. I understand that that kind of food has to cook before however would
                                        be good if they cover well the food, mainly ဝက်သားတုတ်ထိုး.
                                        I ate Mon Hin Hkar, မုန့်ဟင်းခါး not the best one I had in Thailand, bit salty and
                                        too much MSG.
                                        What I like is they give me green tea for free like most of the shop in Myanmar.
                                        🇲🇲

                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 3/5 | Service:
                                        4/5 | Atmosphere: 3/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">

                                                Evelyn Hendarta </p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">First time eating Burmese food. Tried their grilled venison, chicken
                                        in sweet gravy, and a vegetable dish (I'm guessing it's bamboo shoot and cassava
                                        leaves). The owner is very kind and generous, she gave us additional dish for free.
                                        I think they open until very late, so if ever you're hungry after the malls are
                                        closed, you can come here for very cheap meal.


                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">
                                                Joey Tan
                                            </p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">Had the stir fried vermicelli, tom yum and stir fried basil with
                                        pork. All were delicious but price was a bit high for 3 dishes and a rice

                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 4/5 | Service:
                                        3/5 | Atmosphere: 2/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>

                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">
                                                Wayndering
                                            </p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">Super friendly family restaurant with both an a la carte menu and a
                                        “pick and point” section of curried favorites in chafing dishes. The cognoscenti
                                        seem to favor the noodles here but the salads are also noteworthy. The preponderance
                                        of Burmese regulars attests to Golden Kaylin’s authenticity.


                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 4/5 | Service:
                                        4/5 | Atmosphere: 4/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">
                                                Anton TinyBlue
                                            </p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">small Burmese menu food place on intersection. Had tea leaves salad
                                        for lunch. It was just ok, had better ones back in States, but at 70 bhts, who can
                                        complain?


                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 3/5 | Service:
                                        4/5 | Atmosphere: 3/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">

                                                Kylian Ch
                                            </p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">Pricing quite high compared to similar kind of shops with Thai food
                                        (x2, x3), still very affordable though, and the taste is very good so It’s ok


                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 5/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    {{-- <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p> --}}
                                    <div class="d-flex align-items-center">
                                        {{-- <div class="user-img"
                                            style="background-image: url(&quot;https://lh3.googleusercontent.com/a-/ALV-UjVzghvxh1NoYBFTgFXXmy0Gzf47R97F3umW07S0NkxYLi4H_vrBiQ=s64-c-rp-mo-br100&quot;);">
                                        </div> --}}
                                        <div class="pl-3">
                                            <p class="name">
                                                Siri P
                                            </p>
                                            {{-- <span class="position">4 months ago</span> --}}
                                        </div>
                                    </div>
                                    <p class="mt-4">One of our Burmese friends recommended the s place and I love it so
                                        much. I come here with my husband 2 times a week. The food is amazing and also the
                                        staffs here are super nice and friendly.

                                        Note : I forgot my 10k headphone here once. They kept it and returned it back to me.
                                        Very honest family. Can’t wait to go back more often!!!


                                    </p>
                                    <div class="" style="background: rgb(0, 0, 0);color:white">Food: 5/5 | Service:
                                        5/5 | Atmosphere: 5/5
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                        {{--  --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>




    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <h2>We Are Golden Kayin Restaurant</h2>
                        {{-- <p>We can manage your dream building A small river named Duden flows by their place</p> --}}
                        <p class="mb-0"><a href="{{ route('pages.about') }}" class="btn btn-primary px-4 py-3">Content
                                us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src=""></script>
@endpush
