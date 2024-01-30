@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <div class="col-lg-8">
           <div class="pt-3 my-3 text-center">
               <h1 class="h2">Create New Post</h1>
           </div>
            <form action="/dashboard/posts" method="post">
               @csrf
               <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input class="form-control" type="text" name="title" id="title" autofocus>
               </div>
               <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input class="form-control" type="text" name="slug" id="slug" >
               </div>
               <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select class="form-select" name="category_id" id="category">
                     @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="mb-3">
                  <label for="body" class="form-label">Body</label>
                  <input type="hidden" id="body" name="body">
                  <trix-editor class="form-control" input="body"></trix-editor>
               </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-outline-primary mb-3 text-center">Create Post</button>
               </div>
               </form>
        </div>

    </main>

    <script>
      const title = document.querySelector('#title')
      const slug = document.querySelector('#slug')

      title.addEventListener('change', function(){
         fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response =>response.json())
            .then(data => slug.value = data.slug)
      })

      document.addEventListener('trix-file-accept', function(e){
         e.preventDefault();
      })
    </script>
@endsection
