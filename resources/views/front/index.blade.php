@extends('front.layouts.master')
@section('title')
    <title>Türkiye'nin En Büyük Online Alışveriş Sitesi. - grafikdesignea.com</title>
@endsection
@section('front.content')
    <div class="offcanvas-search">
        <div class="offcanvas-search-inner">

            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>

            <form class="offcanvas-search-form" action="#">
                <input type="text" placeholder="Search Product..." class="offcanvas-search-input">
            </form>

        </div>
    </div>

    <div class="section">
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    @foreach($sliders as $slider)
                        @if($slider->slider_status == 1)
                            <div class="hero-slide-item swiper-slide">
                                <div class="hero-slide-bg">
                                    <img src="{{ $slider->slider_image }}" alt="Slider Image"/>
                                </div>

                                <div class="container">
                                    <div class="hero-slide-content">
                                        <h2 class="title">
                                            {{ $slider->slider_name }} <br/>
                                            Collection
                                        </h2>
                                        <p>Up to 70% off selected Product</p>
                                        <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="swiper-pagination d-md-none"></div>

                <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>

            </div>
        </div>
    </div>

    @include('front.layouts.up_header')

    <div class="section section-padding mt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#tab-product-all">New Arrivals</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-clothings">Best Sellers</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-all">Sale Items</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="tab-content position-relative">
                        <div class="tab-pane fade show active" id="tab-product-all">
                            <div class="product-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper mb-n10">

                                        <!-- Product Start -->
                                        {{--                                        <div class="swiper-slide product-wrapper">--}}
                                        {{--                                            <!-- Single Product Start -->--}}
                                        {{--                                                <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="300">--}}
                                        {{--                                                    <div class="thumb">--}}
                                        {{--                                                        <a href="single-product.html" class="image">--}}
                                        {{--                                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/5.jpg" alt="Product"/>--}}
                                        {{--                                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/5.jpg" alt="Product" />--}}
                                        {{--                                                        </a>--}}
                                        {{--                                                        <div class="actions">--}}
                                        {{--                                                            <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
                                        {{--                                                            <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
                                        {{--                                                            <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <div class="content">--}}
                                        {{--                                                        <h4 class="sub-title"><a href="single-product.html"></a></h4>--}}
                                        {{--                                                        <h5 class="title"><a href="single-product.html"></a></h5>--}}
                                        {{--                                                        <span class="ratings">--}}
                                        {{--                                                                <span class="rating-wrap">--}}
                                        {{--                                                                    <span class="star" style="width: 100%"></span>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                        <span class="rating-num">(4)</span>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                        <span class="price">--}}
                                        {{--                                                                <span class="new"></span>--}}
                                        {{--                                                        <span class="old">$42.85</span>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            <!-- Single Product End -->--}}
                                        {{--                                        </div>--}}

                                        @foreach($products as $product)
                                            @if($product->product_status == 1)
                                                <div class="swiper-slide product-wrapper">
                                                    <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="400">
                                                        <div class="thumb">
                                                            <a href="{{ route('product.show', $product->id) }}" class="image">
                                                                <img class="first-image" src="{{ $product->product_image }}" alt="Product" width="270" height="270"/>
                                                                <img class="second-image" src="{{ $product->product_image }}" alt="Product" width="270" height="270"/>
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">New</span>
                                                        </span>
                                                            <div class="actions">
                                                                @auth("customer")
                                                                    <button type="button" data-id="{{ $product->id }}" class="btn btn-sm action wishlist wishlistBtn"><i class="pe-7s-like"></i></button>
                                                                @endauth
                                                                @guest("customer")
                                                                    <a href="{{ route('user.login') }}" data-id="{{ $product->id }}" class="btn btn-sm action"><i class="pe-7s-like"></i></a>
                                                                @endguest
                                                                <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                                <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="sub-title"><a href="{{ route('product.show', $product->id) }}">{{ $product->product_category }}</a></h4>
                                                            <h5 class="title"><a href="{{ route('product.show', $product->id) }}">{{ $product->product_name }}</a></h5>
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 67%"></span>
                                                        </span>
                                                        <span class="rating-num">(2)</span>
                                                        </span>
                                                            <span class="price">
                                                                <span class="new">{{ $product->product_price }} TL</span>
                                                                @if($product->product_old_price)
                                                                    <span class="old" title="${{ $product->product_old_price }}">${{ $product->product_old_price }}</span>
                                                                @endif
                                                        </span>
                                                            @if(Auth::guard('customer')->check())
                                                                <button type="button" data-id="{{ $product->id }}" class="btn btn-sm btn-outline-dark btn-hover-primary addToCartBtn">Sepete Ekle</button>
                                                            @else
                                                                <a href="{{ route('user.login') }}" class="btn btn-sm btn-outline-dark btn-hover-primary">Sepete Ekle</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="swiper-pagination d-md-none"></div>
                                    <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                    <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-product-clothings">
                            <div class="product-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper mb-n10">

                                        <div class="swiper-slide product-wrapper">

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/2.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/3.jpg" alt="Product"/>
                                                    </a>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$14.50</span>
                                                    <span class="old">$18.00</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/1.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/5.jpg" alt="Product"/>
                                                    </a>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$38.50</span>
                                                    <span class="old">$42.85</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide product-wrapper">

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/11.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/10.jpg" alt="Product"/>
                                                    </a>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Design Source</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(06)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$96.50</span>
                                                    <span class="old">$100.00</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/3.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/5.jpg" alt="Product"/>
                                                    </a>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$22.00</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide product-wrapper">

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/4.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/10.jpg" alt="Product"/>
                                                    </a>
                                                    <span class="badges">
															<span class="sale">New</span>
                                                    </span>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 67%"></span>
                                                    </span>
                                                    <span class="rating-num">(2)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$45.50</span>
                                                    <span class="old">$48.85</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/5.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/6.jpg" alt="Product"/>
                                                    </a>
                                                    <span class="badges">
															<span class="sale">Sold</span>
                                                    </span>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">(2)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$16.00</span>
                                                    <span class="old">$18.00</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide product-wrapper">

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/7.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/9.jpg" alt="Product"/>
                                                    </a>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Lather Design</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(12)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$65.00</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>

                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/10.jpg" alt="Product"/>
                                                        <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/4.jpg" alt="Product"/>
                                                    </a>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="sub-title"><a href="single-product.html">Fabric Design</a></h4>
                                                    <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 70%"></span>
                                                    </span>
                                                    <span class="rating-num">(09)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$27.00</span>
                                                    <span class="old">$29.50</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="swiper-pagination d-md-none"></div>

                                    <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                    <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="banner">
                        <div class="banner-image">
                            <a href="#"><img src="" alt="Banner" width="1170" height="250"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-padding mt-0 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-produt-tab-wrapper">
                        <div class="section-title m-0" data-aos="fade-right" data-aos-delay="300">
                            <h1 class="title">Daily Deals</h1>
                        </div>
                        <ul class="product-tab-nav nav mt-n3" data-aos="fade-left" data-aos-delay="300">
                            <li class="nav-item"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#product-deal-all">New Arrivals</a></li>
                            <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab" href="#product-deal-clothings">Best Sellers</a></li>
                            <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab" href="#product-deal-all">Sale Items</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="tab-content position-relative">
                        <div class="tab-pane fade show active" id="product-deal-all">
                            <div class="product-deal-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($products as $product)
                                            @if($product->product_status == 1)
                                                <div class="swiper-slide product-wrapper" data-aos="fade-right" data-aos-delay="600">
                                                    <div class="product single-deal-product product-border-left">
                                                        <div class="thumb">
                                                            <a href="{{ route('product.show', $product->id) }}" class="image">
                                                                <img src="{{ url($product->product_image) }}" width="270" height="270" alt="Product"/>
                                                            </a>
                                                            <span class="badges">
															<span class="sale">-30%</span>
                                                    </span>
                                                        </div>
                                                        <div class="content">
                                                            <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                            <div class="countdown-area">
                                                                <div class="countdown-wrapper d-flex" data-countdown="2022/12/24"></div>
                                                            </div>
                                                            <h4 class="sub-title"><a href="{{ route('product.show', $product->id) }}">{{ $product->product_category }}</a></h4>
                                                            <h5 class="title"><a href="{{ route('product.show', $product->id) }}">{{ $product->product_name }}</a></h5>
                                                            <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                    </span>
                                                            <span class="price">
															<span class="new">${{ $product->product_price }}</span>
                                                               @if($product->product_old_price)
                                                                    <span class="old" title="${{ $product->product_old_price }}">${{ $product->product_old_price }}</span>
                                                                @endif
                                                    </span>
                                                            @if(Auth::guard('customer')->check())
                                                                <button type="button" data-id="{{ $product->id }}" class="btn btn-sm btn-outline-dark btn-hover-primary addToCartBtn">Sepete Ekle</button>
                                                            @else
                                                                <a href="{{ route('user.login') }}" class="btn btn-sm btn-outline-dark btn-hover-primary">Sepete Ekle</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="swiper-pagination d-md-none"></div>

                                    <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                    <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-deal-clothings">
                            <div class="product-deal-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach($products as $product)
                                            @if($product->product_status == 1)
                                                <div class="swiper-slide product-wrapper mb-n10">

                                                    <div class="product single-deal-product product-border-left mb-10">
                                                        <div class="thumb">
                                                            <a href="single-product-sale.html" class="image">
                                                                <img src="{{ url($product->product_image) }}" alt="Product" width="270" height="270"/>
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                            <div class="countdown-area">
                                                                <div class="countdown-wrapper d-flex" data-countdown="2022/12/24"></div>
                                                            </div>
                                                            <h4 class="sub-title"><a href="single-product-sale.html">{{ $product->product_category }}</a></h4>
                                                            <h5 class="title"><a href="single-product-sale.html">{{ $product->product_name }}</a></h5>
                                                            <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">(2)</span>
                                                    </span>
                                                            <span class="price">
															<span class="new">${{ $product->product_price }}</span>
                                                                @if($product->product_old_price)
                                                                    <span class="old" title="${{ $product->product_old_price }}">${{ $product->product_old_price }}</span>
                                                                @endif
                                                    </span>
                                                            @if(Auth::guard('customer')->check())
                                                                <button type="button" data-id="{{ $product->id }}" class="btn btn-sm btn-outline-dark btn-hover-primary addToCartBtn">Sepete Ekle</button>
                                                            @else
                                                                <a href="{{ route('user.login') }}" class="btn btn-sm btn-outline-dark btn-hover-primary">Sepete Ekle</a>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            @endif
                                        @endforeach

                                        <div class="swiper-slide product-wrapper mb-n10">

                                            <div class="product single-deal-product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product-sale.html" class="image">
                                                        <img src="{{ asset("front/vendors/destroy/") }}/assets/images/products/medium-size/1.jpg" alt="Product"/>
                                                    </a>
                                                    <span class="badges">
															<span class="sale">-30%</span>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper d-flex" data-countdown="2022/12/24"></div>
                                                    </div>
                                                    <h4 class="sub-title"><a href="single-product-sale.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product-sale.html">Enjoy The Rest T-Shirt</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$38.00</span>
                                                    <span class="old">$42.05</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="swiper-pagination d-md-none"></div>

                                    <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                    <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('front.layouts.bottom_banner')

    @include('front.layouts.bottom_product')
@endsection
