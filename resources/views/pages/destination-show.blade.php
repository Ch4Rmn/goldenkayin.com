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
        style="background-image: url('{{ asset('storage/' . $post->image) }}');">
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
            <button class="mb-3 btn bg-danger " style="color: rgb(0, 0, 0)" onclick="history.back()">Back</button>

            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <div class="row">
                        <div class="col">
                            <h2 class="mb-3 " style="text-shadow: 0.3px 0.3px  black">{{ $post->title }}</h2>
                        </div>
                        <div class="col">
                            <p class="text-dark float-right">Created at -<span
                                    class="text-success">{{ $post->created_at->diffForHumans() }}</span> </p>
                        </div>
                    </div>

                    {{-- <p>{{ $post->excerpt }}</p> --}}

                    <br>

                    <p><img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid"></p>
                    {{-- <p>Meta Description: {{ $post->meta_description }}</p>
                    <p>Meta Keywords: {{ $post->meta_keywords }}</p> --}}
                </div>

                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <h3 class="heading">Search</h3>
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                        {{--  --}}
                        <p class="text-dark mt-3 " style="text-indent: 20px;">
                            {{ Str::limit(strip_tags($post->body)) }}
                        </p>
                    </div>
                    {{-- $table->increments('id');
            $table->integer('author_id');
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->boolean('featured')->default(0);
            $table->timestamps(); --}}

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
