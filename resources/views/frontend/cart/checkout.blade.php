@extends('frontend.layouts.master')
@section('content')
<p class="text-center">Please add <a href="{{ route('frontend.page.index') }}">product</a></p>
@if ($cart)


 <div class="container">
    <div class="row">

      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Checkout</h4>
        <form action="{{ route('cartporcess') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="username">Customer name</label>
            <input type="text" name="customer_name" class="form-control">
          </div>

          <div class="mb-3">
            <label for="email">Customer Phone</label>
            <input type="text" name="customer_phone" class="form-control">
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary" type="submit">Continue to checkout</button>
        </form>
      </div>
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">{{ count($cart) }}</span>
        </h4>
        <ul class="list-group mb-3">
            @foreach ($cart as $key=>$item)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">{{ $item['title'] }}</h6>
                  <small class="text-muted">Quantity: {{ $item['quantity'] }}</small>
                </div>
                <span class="text-muted">{{ $item['total_price'] }}</span>
              </li>
            @endforeach

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (BDT)</span>
            <strong>{{ $total }}</strong>
          </li>
        </ul>


      </div>
    </div>

    @endif
@endsection
