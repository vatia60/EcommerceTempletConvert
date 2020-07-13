@extends('backend.layouts.master')
@section('content')
<div class="form-body-two">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">SI</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Sale Price</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($products as $product)


          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $product->title }}</td>
            <td> <img class="img-50" src="{{ asset('public/images/eproduct').'/'. $product->image}}" alt="nai"></td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->sale_price }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <div class="rowf">
                    <div class="newf">
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info">Edit</a>
                    </div>
                    <div class="newf">
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            @csrf
                            <input type="hidden" value="{{  $product->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </div>
                </div>



            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
