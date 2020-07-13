@extends('backend.layouts.master')
@section('content')
<div class="form-body">
    @include('backend.partials.errormsg')
    <form action="{{ route('category.update', $categories->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Category Name</label>
          <input type="text" class="form-control" name="name" value="{{ $categories->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category Image</label><br>
            <img src=" {{ asset('public/images/categories').'/'. $categories->image}} " alt="">
            <input type="file" class="form-control" name="image">
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection
