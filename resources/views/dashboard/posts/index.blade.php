@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
   <div
       class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">My Posts</h1>
   </div>
   <div class="table-responsive small col-lg-10">
    <a href="/dashboard/posts/create" class="btn btn-outline-primary my-3">Create New Post</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col" class="text-center">Category</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($posts as $post)

         <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $post->title }}</td>
           <td  class="text-center">{{ $post->category->name }}</td>
           <td  class="text-center">
            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info text-white btn-sm"><i class="bi bi-eye"></i></a>
            <a href="" class="btn text-white btn-warning btn-sm"><i class="bi bi-pencil-square"></i></i></a>
            <a href="" class="btn btn-danger text-white btn-sm"><i class="bi bi-trash"></i></a>
           </td>
         </tr>
         @endforeach

        </tbody>
      </table>
    </div>

</main>
@endsection