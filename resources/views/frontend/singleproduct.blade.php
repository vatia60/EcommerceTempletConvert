@extends('frontend.layouts.master')
@section('content')



                @foreach ($products as $product)
              <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('public/images/eproduct').'/'. $product->image}}" alt="nai">
                    </div>
                    <div class="col-md-6">
                        <h1>{{ $product->title }}</h1>
                        <p class="new-price">{{ $product->price }}</p>
                        <p class="old-price">{{ $product->sale_price }}</p>
                        <p>{{ $product->description }}</p>
                        <h2> <form action="{{ route('addtocart') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}">
                            <button type="submit"><span class="ti-shopping-cart"></span></button>
                        </form></h2>
                    </div>
                </div>
                </div>
                @endforeach
@endsection
