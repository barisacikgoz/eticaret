<footer class="section footer-section">
    <div class="footer-top section-padding">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-10" data-aos="fade-up" data-aos-delay="200">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">İletişim</h2>
                        <p class="desc-content">Uzun Yıllara dayanan deneyimimiz ve müşterilerimiz ile olan güven bağımızla birlikte şimdi dijitaldeyiz. Kalite İçin Bizi Tercih Edin.</p>
                        <ul class="widget-address">
                            <li><span>Address: </span> {{ contact_data()->settings_address }}</li>
                            <li><span>Call to: </span> <a href="#"> {{ contact_data()->settings_phone_1 }}</a></li>
                            <li><span>Mail to: </span> <a href="#"> {{ contact_data()->settings_form_mail }}</a></li>
                        </ul>

                        <div class="widget-social justify-content-start mt-4">
                            <a title="Facebook" href="{{ contact_data()->settings_facebook }}" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="{{ contact_data()->settings_twitter }}"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 col-xl-2 mb-10" data-aos="fade-up" data-aos-delay="300">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">Bilgi</h2>
                        <ul class="widget-list">
                            @foreach(pages() as $page)
                                <li><a href="{{ route('user.pages.show', $page->page_name_slug) }}">{{ $page->page_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 col-xl-2 mb-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="single-footer-widget aos-init aos-animate">
                        <h2 class="widget-title">Hesabım</h2>
                        <ul class="widget-list">
                            <li><a href="{{ route('user.profile') }}">Hesabım</a></li>
                            <li><a href="{{ route('wishlist.index') }}">İstek Listesi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-10" data-aos="fade-up" data-aos-delay="500">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">Haberler</h2>
                        <div class="widget-body">
                            <p class="desc-content mb-0">En son mağazamız ve özel tekliflerimiz hakkında e-posta güncellemeleri alın.</p>

                            <div class="newsletter-form-wrap pt-4">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" id="mc-email" class="form-control email-box mb-4" placeholder="Enter your email here.." name="EMAIL">
                                    <button id="mc-submit" class="newsletter-btn btn btn-primary btn-hover-dark" type="submit">Abone Ol</button>
                                </form>
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success text-success"></div>
                                    <div class="mailchimp-error text-danger"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <div class="copyright-content">
                        <p class="mb-0">Copyright © 2021 <a href="{{ route('homepage.index') }}">GrafikDesign_ea</a> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fa fa-long-arrow-up"></i>
    <i class="arrow-bottom fa fa-long-arrow-up"></i>
</a>

<div class="cart-offcanvas-wrapper">
    <div class="offcanvas-overlay"></div>

    <div class="cart-offcanvas-inner">

        <div class="offcanvas-btn-close">
            <i class="pe-7s-close"></i>
        </div>

        <div class="offcanvas-cart-content" id="cart_basket">
            @include("front.components.cart_canvas")
        </div>
    </div>
</div>
<div class="modalquickview modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="btn close" data-bs-dismiss="modal">×</button>
            <div class="row">
                <div class="col-md-6 col-12">

                    <div class="modal-product-carousel">

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="{{ asset("front/vendors/destroy/assets/images/products/large-size/1.jpg ") }}" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="{{ asset("front/vendors/destroy/assets/images/products/large-size/2.jpg ") }}" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/large-size/3.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/large-size/4.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/large-size/5.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="{{ asset("front/vendors/destroy/") }}/assets/images/products/large-size/6.jpg" alt="Product">
                                </a>
                            </div>

                            <!-- <div class="swiper-pagination d-md-none"></div> -->

                            <div class="swiper-product-button-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-product-button-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-12 overflow-hidden position-relative">

                    <div class="product-summery">

                        <div class="product-head mb-3">
                            <h2 class="product-title">Sample product</h2>
                        </div>

                        <div class="price-box mb-2">
                            <span class="regular-price">$80.00</span>
                            <span class="old-price"><del>$90.00</del></span>
                        </div>

                        <span class="ratings justify-content-start">
                        <span class="rating-wrap">
                            <span class="star" style="width: 100%"></span>
                            </span>
                            <span class="rating-num">(4)</span>
                            </span>

                        <div class="sku mb-3">
                            <span>SKU: 12345</span>
                        </div>

                        <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the
                            great explorer of the truth, the master-builder of human happiness.</p>

                        <div class="product-meta mb-3">
                            <div class="product-size">
                                <span>Size :</span>
                                <a href=""><strong>S</strong></a>
                                <a href=""><strong>M</strong></a>
                                <a href=""><strong>L</strong></a>
                                <a href=""><strong>XL</strong></a>
                            </div>
                        </div>

                        <div class="product-color-variation mb-3">
                            <button type="button" class="btn bg-danger"></button>
                            <button type="button" class="btn bg-primary"></button>
                            <button type="button" class="btn bg-dark"></button>
                            <button type="button" class="btn bg-success"></button>
                        </div>

                        <div class="product-meta mb-5">
                            <div class="product-metarial">
                                <span>Metarial :</span>
                                <a href=""><strong>Metal</strong></a>
                                <a href=""><strong>Resin</strong></a>
                                <a href=""><strong>Lather</strong></a>
                                <a href=""><strong>Polymer</strong></a>
                            </div>
                        </div>

                        <div class="quantity mb-5">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="0" type="text">
                                <div class="dec qtybutton"></div>
                                <div class="inc qtybutton"></div>
                            </div>
                        </div>

                        <div class="cart-wishlist-btn pb-4 mb-n3">
                            <div class="add-to_cart mb-3">
                                <a class="btn btn-outline-dark btn-hover-primary" href="cart.html">Add to cart</a>
                            </div>
                            <div class="add-to-wishlist mb-3">
                                <a class="btn btn-outline-dark btn-hover-primary" href="wishlist.html">Add to Wishlist</a>
                            </div>
                        </div>

                        <div class="social-share">
                            <span>Share :</span>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div>

                        <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                            <li><i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset("front/vendors/destroy/assets/js/plugins/swiper-bundle.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/vendor/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/vendor/jquery-3.5.1.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/vendor/jquery-migrate-3.3.0.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/vendor/jquery-migrate-3.3.0.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins/countdown.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins/aos.min.js ") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins/nice-select.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins/jquery.ajaxchimp.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins/jquery-ui.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins/lightgallery-all.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins/thia-sticky-sidebar.min.js") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/vendor.min.js ") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/plugins.min.js ") }}"></script>
<script src="{{ asset("front/vendors/destroy/assets/js/main.js ") }}"></script>
<script src="{{ asset('template/vendors/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('template/js/alerts.js') }}"></script>
@toastr_js
@toastr_render
@yield('js')
<script>
    $(function () {

        // CART-PRODUCT-DELETE \\
        $(document).on('click', '.deleteCart', function (e) {
            e.preventDefault();
            let action = "{{ route('user.delete.cart') }}";
            let id = $(this).attr('data-id');
            let basket_id = $(".deleteBtn").attr("delete-id");
            let cart_price = "{{ $basketTotals['subTotal'] }}";

            $.post(action, {_token: token, product_id: id,}, function (data) {

                $('#basket_count').html(data.basket_count);
                $('#cart_price').html("$" + data.basket_total_price['subTotal']);

                $(e.target).parents(".deleteBtn").remove();
                toastr.success("Ürün sepetinizden silindi.", "BAŞARILI");
            });
        });


        // ADD-TO-CART \\
        $('.addToCartBtn').on('click', function (e) {
            e.preventDefault();
            let action = "{{ route('basket.store') }}";
            let id = $(this).attr('data-id');
            let cart_price = "{{ $basketTotals['subTotal'] }}";

            $.post(action, {_token: token, product_id: id,}, function (data) {

                $('#basket_count').html(data.basket_count);
                $('#cart_basket').html(data.basket_view);
                $('#cart_price').html("$" + data.basket_total_price['subTotal']);

                if (data.status === "success") {
                    toastr.success("Ürün Sepetinize Eklendi.", "BAŞARILI");
                } else {
                    toastr.warning("Ürün Sepetinize Zaten Bulunmakta.", 'Uyarı');
                }
            });
        });

        // ADD-TO-WISHLIST \\
        $('.wishlist').on('click', function (e) {
            e.preventDefault();
            let action = "{{ route('wishlist.store') }}"
            let id = $(this).attr('data-id');
            $.post(action, {_token: token, product_id: id,}, function (data) {
                $('#wishlist_count').html(data.wishlist_count);
                toastr.success("Ürün İstek Listenize Eklendi.", "BAŞARILI");
            });
        });
    });


</script>
</body>
</html>
