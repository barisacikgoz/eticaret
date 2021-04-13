<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @yield('title')
    <link rel="shortcut icon" href="{{ asset("front/vendors/destroy/") }}/assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/vendor/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/vendor/pe-icon-7-stroke.min.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/plugins/nice-select.min.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/style.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/vendor.min.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="{{ asset("front/vendors/destroy/") }}/assets/css/style.min.css" />
    @toastr_css

    <script>
        let token = "{{ csrf_token() }}";
    </script>
</head>

<body>
<div class="header section">

    <!-- Header Top Start -->
    <div class="header-top bg-light">
        <div class="container">
            <div class="row row-cols-xl-2 align-items-center">

                <div class="col d-none d-lg-block">
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
                        <div class="header-top-links">
                            <span>Call Us</span><a href="#"> {{ contact_data()->settings_phone_1 }}</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <p class="header-top-message">Ends Monday: $100 off any dining table + 2 sets of chairs. <a href="shop-grid.html">Shop Now</a></p>
                </div>

            </div>
        </div>
    </div>
