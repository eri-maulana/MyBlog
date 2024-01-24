@extends('layouts.main')

@section('container')
   <h1>Post Categories</h1>

   @foreach ($categories as $category)
   <h2>
      <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
   </h2>
   @endforeach
@endsection
