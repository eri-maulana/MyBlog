@extends('layouts.main')

@section('container')
    <div class="row justify-content-center  mt-5">
      <div class="col-lg-6">
         <div class="row">
            <div class="col-md-6">
               <img src="/img/{{ $gambar }}" alt="{{ $nama }}" width="200" class="img-thumbnail rounded-circle shadow-lg">
           </div>
           <div class="col-md-6 my-auto">
               <h5>{{ $nama }}</h5>
               <p>{{ $email }}</p>
               <p>{{ $jurusan }}</p>
           </div>
         </div>
      </div>
        
    </div>
@endsection
