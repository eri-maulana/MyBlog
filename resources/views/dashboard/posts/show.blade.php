@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container my-3">
            <div class="row ">
                <div class="col-lg-10">
                    <h1>{{ $post->title }}</h1>
                    <small class="text-secondary d-flex gap-2 my-3">
                        <a href="/dashboard/posts" class="btn btn-info text-white"><i class="bi bi-arrow-left"></i> Back to all
                            post</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><i
                                class="bi bi-pencil-square"></i> Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger text-white"
                                onclick="return comfirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </small>
                    @if ($post->image)
                        <div class="text-center" style="max-height: 400px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid mt-3">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                </div>
            </div>
        </div>
    </main>
@endsection
