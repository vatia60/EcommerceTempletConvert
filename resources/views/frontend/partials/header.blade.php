<header id="header" class="htc-header header--3 bg__white">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                    <div class="logo">
                        <a href="{{ route('frontend.page.index') }}">
                            <img src="{{ asset('public') }}/images//logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                    <nav class="mainmenu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li class="drop"><a href="{{ route('frontend.page.index')}}">Home</a></li>
                            <li class="drop"><a href="#">portfolio</a></li>
                            <li class="drop"><a href="#">Blog</a></li>
                            <li class="drop"><a href="#">Shop</a></li>
                            <li class="drop"><a href="#">pages</a></li>
                            <li class="drop"><a href="#">contact</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-menu clearfix visible-xs visible-sm">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="{{ route('frontend.page.index')}}">Home</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">blog</a> </li>
                                <li><a href="#">pages</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End MAinmenu Ares -->
                <div class="col-md-2 col-sm-4 col-xs-3">
                    <ul class="menu-extra">
                        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                        <li class="cart__menu" style="position: relative"><span class="ti-shopping-cart"></span><span style="position: absolute; top: -10px; color:red;">{{ count($cart) }}</span></li>
                        <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
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
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('public') }}/images//logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li><br>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                            <li class="nav-item">
                                    
    
                                {{ Auth::user()->name }}
                               </li><br>
                            
                              <li class="nav-item">
                                <a href="">Profile</a>
                               </li><br>
                               <li class="nav-item">
                                <a href="{{ route('orderdashboard') }}">Order Dasboard</a>
                               </li><br>
                                <li class="nav-item">
                                    
    
                                    <div class="logoutnew">
                                        <a class="" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>

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

                        @foreach ($cart as $key=>$item)


                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('public') }}/images//product/sm-img/1.jpg" alt="nai">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">{{ $item['title'] }}</a></h2>
                                <div class="row">
                                    <div class="col-md-6"><span class="quantity">Quantity: {{ $item['quantity'] }}</span></div>
                                    <div class="col-md-6"><span class="shp__price">Price: {{ $item['total_price'] }}</span></div>
                                </div>


                            </div>
                            <div class="remove__btn">
                                <form action="{{ route('removecart') }}" method="post">
                                    @csrf
                                  <input type="hidden" name="removecart" value="{{ $key }}">
                                  <button type="submit"><i class="zmdi zmdi-close"></i></button>
                                 </form>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">{{ $total }}</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="{{ route('showcart') }}">View Cart</a></li>
                        <li class="shp__checkout"><a href="{{ route('cartprocess.checkout') }}">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
</header>
<!-- End Header Style -->
