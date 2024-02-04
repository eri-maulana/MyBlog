@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 col-lg-8 px-md-4">
   <div
       class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Post Category</h1>
   </div>

   @if (session()->has('success'))
   <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
  </div>
   @endif

   <div class="table-responsive small col-lg-8">
    <a href="/dashboard/categories/create" class="btn btn-primary my-3">Create New Category</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($categories as $category)

         <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $category->name }}</td>
           <td  class="text-center">
            <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-info text-white btn-sm"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn text-white btn-warning btn-sm"><i class="bi bi-pencil-square"></i></i></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger text-white btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
            </form>
           </td>
         </tr>
         @endforeach

        </tbody>
      </table>
    </div>

</main>
@endsection