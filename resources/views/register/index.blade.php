@extends('layouts.main');

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6 ">
            <main class="form-registration w-100 m-auto">
               <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating rounded">
                        <input type="text" class="form-control @error('name')
                            is-invalid
                        @enderror" name="name" id="name" required placeholder="Name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating rounded mt-1">
                        <input type="text" class="form-control @error('username')
                        is-invalid
                    @enderror" name="username" id="username" required placeholder="username" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating rounded mt-1">
                        <input type="email" class="form-control @error('email')
                        is-invalid
                    @enderror" name="email" id="email" required placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating rounded mt-1">
                        <input type="password" class="form-control @error('password')
                        is-invalid
                    @enderror" name="password" id="password" required placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-1" type="submit">Register</button>
                </form>
                <small class="d-block text-center">Already registered? <a href="/login">Login Here!</a></small>
            </main>
        </div>
    </div>
@endsection