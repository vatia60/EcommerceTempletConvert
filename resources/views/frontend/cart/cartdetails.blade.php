@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="">
     <h4>Order Details</h4>
    </div>

    <ul class="list-group">
        <li class="list-group-item">Order ID: <strong>{{ $order->id }}</strong></li>
        <li class="list-group-item">Customer Name: <strong>{{ $order->customer_name }}</strong></li>
        <li class="list-group-item">Customer Phone: <strong>{{ $order->customer_phone }}</strong></li>
        <li class="list-group-item">Total Amount: <strong>{{ $order->total_amount }}</strong></li>
        <li class="list-group-item">Paid Amount: <strong>{{ $order->paid_amount }}</strong></li>
      </ul>
</div>
@endsection
