@extends('frontend.layouts.master')
@section('content')
<div class="container">
    @if (empty($cart))
     <p>Please add <a href="{{ route('frontend.page.index') }}">Products</a></p>
    @else
    <table class="table">
        <thead>
          <tr>
            <th scope="col">SI</th>
            <th scope="col">Title</th>
            <th scope="col">Quantity</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Total Price</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($cart as $key=>$item)

          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $item['title'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>{{ $item['unit_price'] }}</td>
            <td>{{ $item['total_price'] }}</td>
            <td>
                <form action="{{ route('removecart') }}" method="post">
                   @csrf
                 <input type="hidden" name="removecart" value="{{ $key }}">
                 <button type="submit">Remove</button>
                </form>
            </td>
          </tr>
          @endforeach
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>{{ $total }}</td>
          </tr>
          <a class="btn btn-danger" href="{{ clearcart }}">Clear Cart</a>
          <a class="btn btn-success" href="{{ processcart }}">Process</a>
        </tbody>
      </table>
      @endif
</div>
@endsection
