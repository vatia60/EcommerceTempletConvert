@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="">
     <h4>Order Dashboard</h4>
    </div>
<div class="dasboart-content-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">SI</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Date</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
        @foreach ($order as $item)

          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $item->customer_name  }}</td>
            <td>{{ $item->created_at }}</td>
            <td><a href="{{ route('cartdetails', $item->id) }}">Details</a></td>
          </tr>

        @endforeach
        </tbody>
      </table>
</div>

</div>
@endsection
