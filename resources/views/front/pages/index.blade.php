@extends('front.layouts.master')
@section('title')
    <title>Sayfalar - {{ $page->page_name }}</title>
@endsection
@section('front.content')
    <div class="section">

        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">{{ $page->page_name }}</h1>
                    <ul>
                        <li>
                            <a href="{{ route('homepage.index') }}">Home </a>
                        </li>
                        <li class="active"> {{ $page->page_name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin overflow-hidden">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-lg-6 align-self-center mb-6" data-aos="fade-right" data-aos-delay="600">
                    <div class="about_content">
                        <h2 class="title">{{ $page->page_name }}</h2>
                        <h3 class="sub-title">We believe that every project existing in digital world is a result of an idea and every idea has a cause.</h3>
                        <p>For this reason, our each design serves an idea. Our strength in design is reflected by our name, our care for details. Our specialist won't be afraid to go extra miles just to approach near perfection. We don't require
                            everything to be perfect, but we need them to be perfectly cared for. That's a reason why we are willing to give contributions at best. Not a single detail is missed out under Billey's professional eyes.The amount of
                            dedication and effort equals to the level of passion and by.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-6" data-aos="fade-left" data-aos-delay="600">
                    <div class="about_thumb">
                        <img class="fit-image" src="{{ url($page->page_image) }}" style="width: 690px; height: 460px;" alt="About Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-feature-bg section-padding">
        <div class="container">
            <div class="row mb-n5">
                <div class="col-lg-3 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature flex-column text-center">
                        <div class="icon w-100 mb-4">
                            <img src="{{ asset('front/vendors/destroy/') }}/assets/images/icons/feature-icon-2.png" alt="Feature Icon">
                        </div>
                        <div class="content ps-0 w-100">
                            <h5 class="title mb-2">Free Shipping</h5>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature flex-column text-center">
                        <div class="icon w-100 mb-4">
                            <img src="{{ asset('front/vendors/destroy/') }}/assets/images/icons/feature-icon-3.png" alt="Feature Icon">
                        </div>
                        <div class="content ps-0 w-100">
                            <h5 class="title mb-2">Support 24/7</h5>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature flex-column text-center">
                        <div class="icon w-100 mb-4">
                            <img src="{{ asset('front/vendors/destroy/') }}/assets/images/icons/feature-icon-4.png" alt="Feature Icon">
                        </div>
                        <div class="content ps-0 w-100">
                            <h5 class="title mb-2">Money Return</h5>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature flex-column text-center">
                        <div class="icon w-100 mb-4">
                            <img src="{{ asset('front/vendors/destroy/') }}/assets/images/icons/feature-icon-1.png" alt="Feature Icon">
                        </div>
                        <div class="content ps-0 w-100">
                            <h5 class="title mb-2">Order Discount</h5>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="single-service">
                        <h2 class="title">Ne Yapıyoruz?</h2>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="single-service">
                        <h2 class="title">Misyonumuz</h2>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="single-service">
                        <h2 class="title">Tarihimiz</h2>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="border-top">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-logo-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    @foreach(brands() as $brand)
                                        <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="700">
                                            <a href="#"><img src="{{ url($brand->brand_image) }}" alt="Brand Logo" title="{{ $brand->brand_name }}" style="width: 132px; height: 84px;"></a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
