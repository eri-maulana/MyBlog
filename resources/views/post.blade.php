@extends('layouts.main')

@section('container')

   <h2>{{ $post->title }}</h2>

   <p>By. Eri Maulana in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

   {!! $post->body !!}
   <a href="/posts">Back to All Posts</a>
@endsection
