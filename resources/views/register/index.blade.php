@extends('layouts.main');

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6 ">
            <main class="form-registration w-100 m-auto">
               <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                <form>

                    <div class="form-floating rounded">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating rounded mt-1">
                        <input type="text" class="form-control" name="username" id="username" placeholder="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating rounded mt-1">
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating rounded mt-1">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-1" type="submit">Login</button>
                </form>
                <small class="d-block text-center">Already registered? <a href="/login">Login Here!</a></small>
            </main>
        </div>
    </div>
@endsection