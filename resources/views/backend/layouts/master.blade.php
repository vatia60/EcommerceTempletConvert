<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tmart-Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public') }}/images//favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/custom.css">


    <!-- Modernizr JS -->
    <script src="{{ asset('public') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        @include('backend.partials.header')

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>


                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Admin</h4>
                            <ul>
                                <li><a href="#"> Profile </a></li>
                                <li><a href="#"> Dasboard </a></li>
                                <li><a href="#"> Logout </a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('public') }}/images//product/sm-img/1.jpg" alt="product {{ asset('public') }}/images/">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('public') }}/images//product/sm-img/2.jpg" alt="product {{ asset('public') }}/images/">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Feature Product -->
        <section class="categories-slider-area bg__white">
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                        <!-- Start Slider Area -->
                        <div class="slider__container slider--one">
                          @yield('content')
                        </div>
                        <!-- Start Slider Area -->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                       @include('backend.partials.adminsidebar')
                </div>
            </div>
        </section>

    </div>


    @include('backend.partials.scripts')

</body>

</html>
