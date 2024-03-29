@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="col-lg-8">
            <div class="pt-3 my-3 text-center">
                <h1 class="h2">Edit Post</h1>
            </div>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                        id="title" value="{{ old('title', $post->title) }}" required autofocus>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input class="form-control @error('slug') is-invalid @enderror" type="text" name="slug"
                        id="slug" value="{{ old('slug', $post->slug) }}" required>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="category">
                        @foreach ($categories as $category)
                            @if (old('category_id', $post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" type="file" id="image" name="image"
                            class="img-fluid img-preview my-3 col-lg-6 d-block">
                    @else
                        <img class="img-fluid img-preview my-3 col-lg-6">
                    @endif
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                        id="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <input type="hidden" class="@error('body') is-invalid @enderror" id="body" name="body"
                        value="{{ old('body', $post->body) }}">
                    <trix-editor class="form-control" input="body"></trix-editor>
                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary mb-3 text-center">Edit Post</button>
                </div>
            </form>
        </div>

    </main>

    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage(){
         const image = document.querySelector('#image')
         const imgPreview = document.querySelector('.img-preview')

         imgPreview.style.display = 'block';

         const oFReader = new FileReader();
         oFReader.readAsDataURL(image.files[0]);

         oFRead.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
         }
      }
    </script>
@endsection
