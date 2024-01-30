@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container my-3">
            <div class="row ">
                <div class="col-lg-10">
                    <h1>{{ $post->title }}</h1>
                    <small class="text-secondary d-flex gap-2">
                        <a href="/dashboard/posts" class="btn btn-info"><i class="bi bi-arrow-left"></i> Back to all post</a>
                        <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
                    </small>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                </div>
            </div>
        </div>
    </main>
@endsection