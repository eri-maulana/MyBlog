@extends('layouts.main');

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-signin w-100 m-auto">
               <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form>

                    <div class="form-floating rounded">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating rounded mt-1">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-1" type="submit">Register</button>
                </form>
                <small class="d-block text-center">Not Registered? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection