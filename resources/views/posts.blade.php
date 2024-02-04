@extends('layouts.main')

@section('container')
    <h1 class="my-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">

            @if ($posts[0]->image)
                <div class="text-center" style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                    alt="{{ $posts[0]->category->name }}" class="img-fluid  mt-3">
            @endif

            <div class="card-body text-center">

                <h3 class="card-title">{{ $posts[0]->title }}</h3>

                <small class="text-body-secondary">
                    <p>By. <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none ">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none ">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                </p>

                <p class="card-text ">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-outline-secondary text-decoration-none">Read More</a>

            </div>
        </div>

        <div class="container p-0">
            <div class="row ">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card ">

                            <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.5)">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">
                                    {{ $post->category->name }}
                                </a>
                            </div>

                            @if ($post->image)
                                <div class="text-center" style="max-height: 500px !important; overflow:hidden">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">

                                <h5 class="card-title text-truncate ">
                                    <a href="/posts/{{ $post->slug }}"
                                        class="text-decoration-none ">{{ $post->title }}</a>
                                </h5>

                                <p>By. <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none ">{{ $post->author->name }}</a> </p>
                                <div class="text-truncate">
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="/posts/{{ $post->slug }}" class="btn btn-outline-secondary">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    {{ $posts->links() }}

@endsection
