<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Ecommerce</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('contents/website') }}/images/favicon.png" />

    <!-- CSS
  ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/icofont.css" />

    <!-- Plugins CSS -->

    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/nivo-slider.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/percircle.css" />

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/css/responsive.css" />
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- header start -->
    <div class="main-wrapper box-shadow">
        <header>
            <div class="header-top-area bb d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            @include('website.ecommerce.layouts.header_language')
                        </div>
                        <div class="col-lg-6">
                            @include('website.ecommerce.layouts.header_right_links')
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-middle-area ptb-25">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-5">
                            @include('website.ecommerce.layouts.logo')
                        </div>
                        <div class="col-lg-9 d-none d-lg-block">
                            <div class="home3-mainmenu mainmenu home3-hover dropdown">
                                @include('website.ecommerce.layouts.navbar')
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-7 d-lg-none">
                            <div class="header-actions">
                               @include('website.ecommerce.layouts.header_cart')

                                <button class="action-toggle d-lg-none" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom home3-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="position-relative">
                              @include('website.ecommerce.layouts.menu_sidebar')
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                          @include('website.ecommerce.layouts.search')
                        </div>
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="top-cart home3-top-cart home3-bg bg-5">
                                <div class="cart">
                                    <i class="icofont icofont-bag"></i>
                                    <a href="#">
                                        3 Items - <strong>$500.00 </strong>
                                        <i class="icofont icofont-rounded-down"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <div class="cart-items">
                                            <div class="cart-item bb mt-10">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/images/cart/1.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <a href="#">Lorem nec augue</a>
                                                    <a href="#" class="pull-right cart-remove"> <i
                                                            class="fa fa-times"></i></a>
                                                    <span>1 x $220.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-item bb mt-10">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/images/cart/2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <a href="#">Lorem nec augue</a>
                                                    <a href="#" class="pull-right cart-remove"> <i
                                                            class="fa fa-times"></i></a>
                                                    <span>1 x $220.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-item bb mt-10">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('contents/website') }}/images/cart/3.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <a href="#">Lorem nec augue</a>
                                                    <a href="#" class="pull-right cart-remove"> <i
                                                            class="fa fa-times"></i></a>
                                                    <span>1 x $220.00</span>
                                                </div>
                                            </div>
                                            <div class="total mt-10">
                                                <span class="pull-left">Subtotal:</span>
                                                <span class="pull-right">$200.00</span>
                                            </div>
                                            <div class="cart-btn mb-20">
                                                <a href="#">view cart</a>
                                                <a href="#">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <!-- order-area start -->
        <div class="order-area box-shadow ptb-30 bb bg-fff">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-order c-fff home3-bg p-20">
                            <div class="order-icon">
                                <span class="fa fa-plane"></span>
                            </div>
                            <div class="order-content">
                                <h5>World-Wide Shipping</h5>
                                <span>On order over $100</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-order c-fff home3-bg p-20">
                            <div class="order-icon">
                                <span class="fa fa-refresh"></span>
                            </div>
                            <div class="order-content">
                                <h5>30 Days Return</h5>
                                <span>Moneyback guarantee</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-order c-fff home3-bg p-20">
                            <div class="order-icon">
                                <span class="fa fa-umbrella"></span>
                            </div>
                            <div class="order-content">
                                <h5>SUPPORT 24/7</h5>
                                <span>Call us: ( +123 ) 456 789</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-order c-fff home3-bg p-20">
                            <div class="order-icon">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="order-content">
                                <h5>MEMBER DISCOUNT</h5>
                                <span>10% on order over $200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- order-area end -->

        <!-- footer-area start -->
        <footer class="bg-fff bt">
            <div class="footer-top-area bb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo mb-25">
                                    <img src="{{ asset('contents/website') }}/images/logo/1." alt="" />
                                </div>
                                <div class="footer-content">
                                    <p>OneClick is a premium Wordpress theme with advanced admin module. It's extremely
                                        customizable, easy to use and</p>
                                    <ul>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Facebook"><i
                                                    class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Twetter"><i
                                                    class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Instagram"><i
                                                    class="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Google-Plus"><i
                                                    class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Linkedin"><i
                                                    class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <h3 class="footer-title bb mb-20 pb-15">About Us</h3>
                                <ul>
                                    <li>
                                        <div class="contuct-content">
                                            <div class="contuct-icon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="contuct-info">
                                                <span>75, Avenue Anatole France, Paris</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contuct-content">
                                            <div class="contuct-icon">
                                                <i class="fa fa-fax"></i>
                                            </div>
                                            <div class="contuct-info">
                                                <span>01.234 56789 - 10.987 65432</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contuct-content">
                                            <div class="contuct-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="contuct-info">
                                                <span>hasib.me1995@gmail.com</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <div class="footer-widget">
                                <h3 class="footer-title bb mb-20 pb-15">Information</h3>
                                <div class="footer-menu home3-hover">
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="shop.html">About Our Shop</a></li>
                                        <li><a href="#">Secure Shopping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <div class="footer-widget">
                                <h3 class="footer-title bb mb-20 pb-15">My account</h3>
                                <div class="footer-menu home3-hover">
                                    <ul>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <div class="footer-widget">
                                <h3 class="footer-title bb mb-20 pb-15">Our services</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Shipping & Returns</a></li>
                                        <li><a href="#">Secure Shopping</a></li>
                                        <li><a href="#">International Shipping</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p>&copy; 2025 <span> OneClick </span> Made with <i class="fa fa-heart"></i> by <a
                                        href="#">CIT ECOMMERCE</a>All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mayment text-end">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/images/p14.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area end -->
    </div>

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('contents/website') }}/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('contents/website') }}/js/popper.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/jquery.mixitup.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/jquery.nivo.slider.pack.js"></script>
    <script src="{{ asset('contents/website') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('contents/website') }}/js/plugins.js"></script>

    <!-- Activation JS -->
    <script src="{{ asset('contents/website') }}/js/main.js"></script>
</body>


</html>
