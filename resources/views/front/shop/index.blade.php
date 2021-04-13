@extends('front.layouts.master')
@section('title')
    <title>Alışveriş</title>
@endsection
@section('front.content')

    <div class="section">
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Ürünler</h1>
                    <ul>
                        <li>
                            <a href="{{ route('homepage.index') }}">Ana Sayfa </a>
                        </li>
                        <li class="active"> Alışveriş</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12 col-custom">

                    <div class="shop_toolbar_wrapper flex-column flex-md-row mb-10">

                        <div class="shop-top-bar-left mb-md-0 mb-2">
                            <div class="shop-top-show">
                                <span>Showing 1–12 of 39 results</span>
                            </div>
                        </div>

                        <div class="shop-top-bar-right">
                            <div class="shop-short-by mr-4">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected>Show 24</option>
                                    <option value="1">Show 24</option>
                                    <option value="2">Show 12</option>
                                    <option value="3">Show 15</option>
                                    <option value="3">Show 30</option>
                                </select>
                            </div>

                            <div class="shop-short-by mr-4">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected>Short by Default</option>
                                    <option value="1">Short by Popularity</option>
                                    <option value="2">Short by Rated</option>
                                    <option value="3">Short by Latest</option>
                                    <option value="3">Short by Price</option>
                                    <option value="3">Short by Price</option>
                                </select>
                            </div>

                            <div class="shop_toolbar_btn">
                                <button data-role="grid_3" type="button" class="active btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                                <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>

                    </div>

                    <div class="row shop_wrapper grid_3">

                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-inner">
                                    <div class="thumb">
                                        <a href="{{ route('product.show', $product->id) }}" class="image">
                                            <img class="first-image" src="{{ url($product->product_image) }}" alt="Product" style="width: 270px; height: 270px;"/>
                                            <img class="second-image" src="{{ url($product->product_image) }}" alt="Product" style="width: 270px; height: 270px;"/>
                                        </a>
                                        <div class="actions">

                                            @auth("customer")
                                                <button type="button" data-id="{{ $product->id }}" class="btn btn-sm action wishlist wishlistBtn"><i class="pe-7s-like"></i></button>
                                            @endauth
                                            @guest("customer")
                                                <a href="{{ route('user.login') }}" data-id="{{ $product->id }}" class="btn btn-sm action"><i class="pe-7s-like"></i></a>
                                            @endguest

                                            <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="sub-title"><a href="{{ route('product.show', $product->id) }}"><span><b>categori:</b> </span>{{ $product->product_category }}</a></h4>
                                        <h5 class="title"><a href="{{ route('product.show', $product->id) }}">{{ $product->product_name }}</a></h5>
                                        <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                        <p>{{ $product->product_description }}</p>
                                        <span class="price">
                                            <span class="new">${{ $product->product_price }}</span>
                                        @if($product->product_old_price)
                                            <span class="old">${{ $product->product_old_price }}</span>
                                        @endif
                                    </span>
                                        <div class="shop-list-btn">
                                            <button type="button" title="Wishlist" data-id="{{ $product->id }}" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist wishlistBtn"><i class="fa fa-heart"></i></button>

                                            @if(Auth::guard('customer')->check())
                                                <button type="button" data-id="{{ $product->id }}" class="btn btn-sm btn-outline-dark btn-hover-primary addToCartBtn">Sepete Ekle</button>
                                            @else
                                                <a href="{{ route('user.login') }}" class="btn btn-sm btn-outline-dark btn-hover-primary">Sepete Ekle</a>
                                            @endif

                                            <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="shop_toolbar_wrapper mt-10">

                        <div class="shop-top-bar-left">
                            <div class="shop-short-by mr-4">
                                <select class="nice-select rounded-0" aria-label=".form-select-sm example">
                                    <option selected>Show 12 Per Page</option>
                                    <option value="1">Show 12 Per Page</option>
                                    <option value="2">Show 24 Per Page</option>
                                    <option value="3">Show 15 Per Page</option>
                                    <option value="3">Show 30 Per Page</option>
                                </select>
                            </div>
                        </div>

                        <div class="shop-top-bar-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <aside class="sidebar_widget mt-10 mt-lg-0">
                        <div class="widget_inner" data-aos="fade-up" data-aos-delay="200">
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Search</h3>
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store" name="search">
                                    <button class="btn btn-dark btn-hover-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Menu Categories</h3>
                                <nav>
                                    <ul class="category-menu mb-n3">
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Women <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Natural Cosmetic</a></li>
                                                <li><a href="#">Woven Fashion Tops</a></li>
                                                <li><a href="#">Knitted Fabrics</a></li>
                                                <li><a href="#">Smart Watch</a></li>
                                                <li><a href="#">Handmade Bag</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Men <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Belt and Wallet</a></li>
                                                <li><a href="#">Lather Shoe</a></li>
                                                <li><a href="#">Corporate Pant and Shirt</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Kids <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Kids Fashion</a></li>
                                                <li><a href="#">Kids Toy</a></li>
                                                <li><a href="#">Playground</a></li>
                                                <li><a href="#">Video Games</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Fashion <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">World Famous Fashion</a></li>
                                                <li><a href="#">Champion Beauty</a></li>
                                                <li><a href="#">Fashion of Nation</a></li>
                                                <li><a href="#">Classic Looks</a></li>
                                                <li><a href="#">Eye Fashion</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Others <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Winter Collection</a></li>
                                                <li><a href="#">Sun Protection</a></li>
                                                <li><a href="#">Water Resistant</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-5">Price Filter</h3>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button class="slider-range-submit" type="submit">Filter</button>
                                    <input class="slider-range-amount" type="text" name="text" id="amount"/>
                                </form>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title">Categories</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        @foreach(getCategory() as $category)
                                            <li><a href="{{ route('user.shop', $category->id) }}">{{ $category->category_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Tags</h3>
                                <div class="sidebar-body">
                                    <ul class="tags mb-n2">
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Handmade</a></li>
                                        <li><a href="#">Lather</a></li>
                                        <li><a href="#">Fabrics</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection
