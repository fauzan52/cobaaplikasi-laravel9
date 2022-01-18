@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feeback"></div>
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Your Username" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feeback"></div>
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feeback"></div>
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feeback"></div>
                        {{ $message }}
                        @enderror
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign Up</button>
                    <hr>
                </form>
                <button class="w-100 btn btn-lg btn-primary mt-1" type="submit"><a href="/login" class="text-white text-decoration-none">Login</a></button>
                <p class="mt-5 mb-3 text-muted">Dibuat oleh Fauzan Alghifari &copy;2022</p>
            </main>
        </div>
    </div>

@endsection
