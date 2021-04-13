<!-- Product List Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n8">
            <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="300">
                <!-- Product List Title Start -->
                <div class="product-list-title">
                    <h2 class="title pb-3 mb-0">Best Offer</h2>
                    <span></span>
                </div>
                <!-- Product List Title End -->

                <!-- Product List Carousel Start -->
                <div class="product-list-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <!-- Product List Wrapper Start -->
                            <div class="swiper-slide product-list-wrapper mb-n6">

                                <div class="single-product-list product-hover mb-6">

                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/1.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/5.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                        <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>

                            </div>
                            <!-- Product List Wrapper End -->

                            <!-- Product List Wrapper Start -->
                            <div class="swiper-slide product-list-wrapper mb-n6">

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/5.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/6.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>
                                        <span class="price">
													<span class="new">$66.50</span>
                                            <span class="old">$70.55</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/4.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/10.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                        <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/1.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/5.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                        <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                            </div>
                            <!-- Product List Wrapper End -->

                        </div>

                        <!-- Swiper Pagination Start -->
                        <!-- <div class="swiper-pagination d-md-none"></div> -->
                        <!-- Swiper Pagination End -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->

                    </div>
                </div>
                <!-- Product List Carousel End -->

            </div>
            <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="500">
                <!-- Product List Title Start -->
                <div class="product-list-title">
                    <h2 class="title pb-3 mb-0">New Products</h2>
                    <span></span>
                </div>
                <!-- Product List Title End -->

                <!-- Product List Start -->
                <div class="product-list-carousel-2">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <!-- Product List Wrapper Start -->
                            @foreach($products as $product)
                                <div class="swiper-slide product-list-wrapper mb-n6">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="{{ url($product->product_image) }}" alt="Product" width="100" height="100"/>
                                                <img class="second-image" src="{{ url($product->product_image) }}" alt="Product" width="100" height="100"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">{{ $product->product_name }}</a></h5>
                                            <span class="price">
													<span class="new">${{ $product->product_price }}</span>
                                            <span class="old">$70.55</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/4.jpg" alt="Product"/>
                                                <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/10.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">{{ $product->product_name }}</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/1.jpg" alt="Product"/>
                                                <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/5.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                            <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                        @endforeach
                        <!-- Product List Wrapper End -->

                            <!-- Product List Wrapper Start -->
                            <div class="swiper-slide product-list-wrapper mb-n6">

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/7.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/9.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                        <span class="price">
													<span class="new">$65.00</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/11.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/10.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>
                                        <span class="price">
													<span class="new">$86.00</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/3.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/5.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>
                                        <span class="price">
													<span class="new">$44.00</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                            </div>
                            <!-- Product List Wrapper End -->

                        </div>

                        <!-- Swiper Pagination Start -->
                        <!-- <div class="swiper-pagination d-md-none"></div> -->
                        <!-- Swiper Pagination End -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->
                    </div>
                </div>
                <!-- Product List End -->
            </div>
            <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="700">
                <!-- Product List Title Start -->
                <div class="product-list-title">
                    <h2 class="title pb-3 mb-0">Best Sellers</h2>
                    <span></span>
                </div>
                <!-- Product List Title End -->

                <!-- Product List Start -->
                <div class="product-list-carousel-3">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <!-- Product List Wrapper Start -->
                            <div class="swiper-slide product-list-wrapper mb-n6">

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/7.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/9.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                        <span class="price">
													<span class="new">$65.00</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/11.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/10.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>
                                        <span class="price">
													<span class="new">$86.00</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/3.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/5.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>
                                        <span class="price">
													<span class="new">$44.00</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                            </div>
                            <!-- Product List Wrapper End -->

                            <!-- Product List Wrapper Start -->
                            <div class="swiper-slide product-list-wrapper mb-n6">

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/1.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/5.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                        <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Product List End -->

                                <!-- Single Product List Start -->
                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/2.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/3.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>
                                        <span class="price">
													<span class="new">$21.00</span>
                                            <span class="old">$22.50</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                    </div>
                                </div>

                                <div class="single-product-list product-hover mb-6">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="first-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/4.jpg" alt="Product"/>
                                            <img class="second-image" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/small-product/10.jpg" alt="Product"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                        <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                        <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Swiper Pagination Start -->
                        <!-- <div class="swiper-pagination d-md-none"></div> -->
                        <!-- Swiper Pagination End -->

                        <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>

                    </div>
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
                                    <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="300">
                                        <a href="#"><img src="{{ url($brand->brand_image) }}" alt="Brand Logo" width="132" height="84" title="{{ $brand->brand_name }}"></a>
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
