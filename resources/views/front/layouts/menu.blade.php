<div class="header-bottom">
    <div class="header-sticky">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-2 col-6">
                    <div class="header-logo">
                        <a href="{{ route('homepage.index') }}"><img src="{{ url(logo()->settings_logo) }}" alt="Site Logo" width="90"/></a>
                    </div>
                </div>

                <div class="col-xl-8 d-none d-xl-block">
                    <div class="main-menu position-relative">
                        <ul>
                            <li class="has-children">
                                <a href="{{ route('homepage.index') }}"><span>Ana Sayfa</span></a>
                            </li>

                            <li class="has-children position-static">
                                <a href="#"><span>Kategoriler</span> <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu row-cols-4">
                                    <li class="col">
                                        <h4 class="mega-menu-title">Shop Layout</h4>
                                        <ul class="mb-n2">
                                            <li><a href="{{ route('user.shop') }}">alışveriş</a></li>
                                            <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="col">
                                        <h4 class="mega-menu-title">Product Layout</h4>
                                        <ul class="mb-n2">
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                            <li><a href="single-product-group.html">Single Product Group</a></li>
                                            <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                            <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                            <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                        </ul>
                                    </li>
                                    <li class="col">
                                        <h4 class="mega-menu-title">Product Layout</h4>
                                        <ul class="mb-n2">
                                            <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                            <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                            <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                            <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                            <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                        </ul>
                                    </li>
                                    <li class="col">
                                        <h4 class="mega-menu-title">Other Pages</h4>
                                        <ul class="mb-n2">
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">Loging | Register</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-children">
                                <a href="#"><span>Sayfalar</span> <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach(pages() as $page)
                                        <li><a href="{{ route('user.pages.show', $page->page_name_slug) }}">{{ $page->page_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('contact.index') }}"> <span>İletişim</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-6">
                    <div class="header-actions">

                        <div class="main-menu position-relative">
                            <ul>
                                <li class="has-children">
                                    <a class="header-action-btn d-none d-md-block" title="Profile" style="cursor: pointer"><i class="pe-7s-user"></i></a>
                                    <ul class="sub-menu">
                                        @auth("customer")
                                            <li>
                                                <a href="{{ route('user.profile') }}" class="header-action-btn d-none d-md-block" title="Profile">Hesabım</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('user.logout') }}" class="header-action-btn d-none d-md-block">Çıkış Yap</a>
                                            </li>
                                        @endauth

                                        @guest("customer")
                                            <li>
                                                <a href="{{ route('user.login') }}" class="header-action-btn d-none d-md-block" title="Login">Giriş yap & Üye ol</a>
                                            </li>
                                        @endguest

                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <a href="{{ route('wishlist.index') }}" class="header-action-btn header-action-btn-wishlist d-none d-md-block">
                            <i class="pe-7s-like"></i>
                            <span class="header-action-num bg-warning float-right" id="wishlist_count">{{ wishlist_count() }}</span>
                        </a>

                        <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num" id="basket_count">{{ basket_count() }}</span>
                        </a>

                        <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                            <i class="fa fa-bars"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="mobile-menu-wrapper">
    <div class="offcanvas-overlay"></div>

    <div class="mobile-menu-inner">

        <div class="offcanvas-btn-close">
            <i class="pe-7s-close"></i>
        </div>

        <div class="mobile-navigation">
            <nav>
                <ul class="mobile-menu">
                    <li class="has-children">
                        <a href="#">Home <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown">
                            <li><a href="shop-grid.html">Shop Grid</a></li>
                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                            <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="compare.html">Compare</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown">
                            <li><a href="single-product.html">Single Product</a></li>
                            <li><a href="single-product-sale.html">Single Product Sale</a></li>
                            <li><a href="single-product-group.html">Single Product Group</a></li>
                            <li><a href="single-product-normal.html">Single Product Normal</a></li>
                            <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                            <li><a href="single-product-slider.html">Single Product Slider</a></li>
                            <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                            <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                            <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                            <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                            <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                            <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="404-error.html">Error 404</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="login-register.html">Loging | Register</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class="offcanvas-lag-curr mb-6">
            <h2 class="title">Languages</h2>
            <div class="header-top-lan-curr-link">
                <div class="header-top-lan dropdown">
                    <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                    <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Japanese</a></li>
                        <li><a class="dropdown-item" href="#">Arabic</a></li>
                        <li><a class="dropdown-item" href="#">Romanian</a></li>
                    </ul>
                </div>
                <div class="header-top-curr dropdown">
                    <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                    <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                        <li><a class="dropdown-item" href="#">USD</a></li>
                        <li><a class="dropdown-item" href="#">Pound</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-auto">

            <ul class="contact-links">
                <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789 123</a></li>
                <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span></li>
            </ul>

            <div class="widget-social">
                <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
            </div>
        </div>
    </div>
</div>
