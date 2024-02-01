@extends('layouts.main')

@section('container')
    <div class="container ">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 mb-3">

                <h2 class="text-center">{{ $post->title }}</h2>

                <small class="text-muted">
                    <p class="text-center">By. <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none font-weight-bolder">{{ $post->author->name }}</a> in <a
                            href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a></p>
                </small>


                @if ($post->image)
                    <div class="text-center" style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3 rounded-top">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3 rounded-top">
                @endif

                <article class="my-3 fs-5  text-wrap">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to All Posts</a>
            </div>
        </div>
    </div>
@endsection
