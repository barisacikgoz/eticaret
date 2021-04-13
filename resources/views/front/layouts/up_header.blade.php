<div class="section section-margin">
    <div class="container">

        <div class="row mb-n6">
            @foreach($banners as $banner)
                @if($banner->banner_status == 1)
                    <div class="col-lg-4 col-md-6 col-12 mb-6">
                        <div class="banner" data-aos="fade-up" data-aos-delay="300">
                            <div class="banner-image">
                                <a href=""><img src="{{ $banner->banner_image  }}" alt=""></a>
                            </div>
                            <div class="info">
                                <div class="small-banner-content">
                                    <h4 class="sub-title">Sun Hat</h4>
                                    <h3 class="title">Get Offer <br/>For Summer</h3>
                                    <a href="shop-grid.html" class="btn btn-dark btn-sm">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="feature-wrap">
            <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="{{ asset("front/vendors/destroy/") }}/assets/images/icons/feature-icon-2.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Ücretsiz Teslimat</h5>
                            <p>Siparişlerde ücretsiz teslimat.</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="{{ asset("front/vendors/destroy/") }}/assets/images/icons/feature-icon-3.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">7/24 Destek</h5>
                            <p>7/24 destek hizmeti.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="700">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="{{ asset("front/vendors/destroy/") }}/assets/images/icons/feature-icon-4.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Para İadesi</h5>
                            <p>5 Gün içerisinde iade garantisi.</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-5" data-aos="fade-up" data-aos-delay="900">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="{{ asset("front/vendors/destroy/") }}/assets/images/icons/feature-icon-1.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Sipariş İndirimi</h5>
                            <p>$150 üstündeki her siparişte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
