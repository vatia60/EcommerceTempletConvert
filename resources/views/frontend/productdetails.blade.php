@extends('frontend.layouts.master')
@section('content')
 <!-- Start Feature Product -->
 <section class="categories-slider-area bg__white">
    <div class="container">
                <section class="htc__product__area bg__white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-categories-all">
                                    <div class="product-categories-title">
                                        @foreach ($categories as $category)


                                         <h3>{{ $category->name }}</h3>

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

                                                    @foreach ($products as $product)

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
                                                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
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
</section>
@endsection
