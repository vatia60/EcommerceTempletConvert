@extends('backend.layouts.master')
@section('content')
<div class="form-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">SI</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($categories as $category)


          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $category->name }}</td>
            <td> <img src="{{ asset('public/images/categories').'/'. $category->image}}" alt="nai"></td>
            <td>
                <a href="{{ route('category.edit', $category->slug) }}">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
