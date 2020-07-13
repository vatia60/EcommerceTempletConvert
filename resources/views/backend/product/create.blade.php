@extends('backend.layouts.master')
@section('content')
<div class="form-body-two">
    @include('backend.partials.errormsg')
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Product Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Product Description</label>
          <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Sale Price</label>
            <input type="text" class="form-control" name="sale_price">
        </div>
        <div class="form-group">
            <label>Product Category</label>
          <select name="category_id" class="form-control">

            <option value="" disabled selected>Select Category</option>

            @foreach ($categories as $category)

            <option value="{{ $category->id }}">{{ $category->name }}</option>

            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
      </form>
</div>
@endsection
