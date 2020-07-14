@extends('frontend.layouts.master')
@section('content')

 <!-- Start Feature Product -->
 <section class="categories-slider-area bg__white">
    <div class="container">
        <div class="row">
            <!-- Start Left Feature -->
            <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                <!-- Start Slider Area -->
                @include('frontend.partials.slider')
            </div>
            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                <div class="categories-menu mrg-xs">
                    <div class="category-heading">
                       <h3> Browse Categories</h3>
                    </div>
                    <div class="category-menu-list">
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="{{ route('page.productdetails', $category->id) }}"><img alt="" src="{{ asset('public/images/categories').'/'. $category->image}}"> {{ $category->name }} </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
            <!-- End Left Feature -->
        </div>
    </div>
</section>
<!-- End Feature Product -->
<div class="only-banner ptb--100 bg__white">
    <div class="container">
        <div class="only-banner-img">
            <a href="shop-sidebar.html"><img src="{{ asset('public') }}/images//new-product/3.jpg" alt="new product"></a>
        </div>
    </div>
</div>
<!-- Start Our Product Area -->
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product-categories-all">
                    <div class="product-categories-title">
                        @foreach ($categories as $category)
                         @if ($category->id == 4)
                         <h3>{{ $category->name }}</h3>
                         @endif

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-style-tab">

                    <div class="tab-content another-product-style jump">
                        <div class="tab-pane active" id="home1">
                            <div class="row">
                                <div class="product-slider-active owl-carousel">

                                    @foreach ($categories as $category)


                                    @foreach ($category->products as $product)

                                    @if ( $product->category_id == 4)



                                    <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                        <div class="product">
                                            <div class="product__inner">
                                                <div class="pro__thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('public/images/eproduct').'/'. $product->image}}" alt="nai">
                                                    </a>
                                                </div>
                                                <div class="product__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="{{ route('page.productaddcart', $product->id) }}"><span class="ti-plus"></span></a></li>
                                                        <li><form action="{{ route('addtocart') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="addtocart" value="{{ $product->id }}">
                                                            <button type="submit"><span class="ti-shopping-cart"></span></button>
                                                        </form></li>
                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__details">
                                                <h2><a href="product-details.html">{{ $product->title }}</a></h2>
                                                <ul class="product__price">
                                                    <li class="old__price">{{ $product->price }}</li>
                                                    <li class="new__price">{{ $product->sale_price }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="only-banner bg__white">
    <div class="container">
        <div class="only-banner-img">
            <a href="shop-sidebar.html"><img src="{{ asset('public') }}/images//new-product/7.jpg" alt="new product"></a>
        </div>
    </div>
</div>
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product-categories-all">
                    <div class="product-categories-title">
                        @foreach ($categories as $category)
                         @if ($category->id == 5)
                         <h3>{{ $category->name }}</h3>
                         @endif

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-style-tab">

                    <div class="tab-content another-product-style jump">
                        <div class="tab-pane active" id="home1">
                            <div class="row">
                                <div class="product-slider-active owl-carousel">

                                    @foreach ($categories as $category)


                                    @foreach ($category->products as $product)

                                    @if ( $product->category_id == 5)



                                    <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                        <div class="product">
                                            <div class="product__inner">
                                                <div class="pro__thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('public/images/eproduct').'/'. $product->image}}" alt="nai">
                                                    </a>
                                                </div>
                                                <div class="product__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="{{ route('page.productaddcart', $product->id) }}"><span class="ti-plus"></span></a></li>
                                                        <li><form action="{{ route('addtocart') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="addtocart" value="{{ $product->id }}">
                                                            <button type="submit"><span class="ti-shopping-cart"></span></button>
                                                        </form></li>
                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__details">
                                                <h2><a href="product-details.html">{{ $product->title }}</a></h2>
                                                <ul class="product__price">
                                                    <li class="old__price">{{ $product->price }}</li>
                                                    <li class="new__price">{{ $product->sale_price }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="only-banner bg__white">
    <div class="container">
        <div class="only-banner-img">
            <a href="shop-sidebar.html"><img src="{{ asset('public') }}/images//new-product/7.jpg" alt="new product"></a>
        </div>
    </div>
</div>
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product-categories-all">
                    <div class="product-categories-title">
                        @foreach ($categories as $category)
                         @if ($category->id == 6)
                         <h3>{{ $category->name }}</h3>
                         @endif

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-style-tab">

                    <div class="tab-content another-product-style jump">
                        <div class="tab-pane active" id="home1">
                            <div class="row">
                                <div class="product-slider-active owl-carousel">

                                    @foreach ($categories as $category)


                                    @foreach ($category->products as $product)

                                    @if ( $product->category_id == 6)



                                    <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                        <div class="product">
                                            <div class="product__inner">
                                                <div class="pro__thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('public/images/eproduct').'/'. $product->image}}" alt="nai">
                                                    </a>
                                                </div>
                                                <div class="product__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="{{ route('page.productaddcart', $product->id) }}"><span class="ti-plus"></span></a></li>
                                                        <li>
                                                            <form action="{{ route('addtocart') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="addtocart" value="{{ $product->id }}">
                                                                <button type="submit"><span class="ti-shopping-cart"></span></button>
                                                            </form>
                                                            </li>
                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__details">
                                                <h2><a href="product-details.html">{{ $product->title }}</a></h2>
                                                <ul class="product__price">
                                                    <li class="old__price">{{ $product->price }}</li>
                                                    <li class="new__price">{{ $product->sale_price }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
