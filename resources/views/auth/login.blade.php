@extends('layouts.auth')

@section("container")
        <div class="login-box" style="width:500px;">

    {{--<div class="card card-outline card-primary">--}}
        <div class="card-header text-uppercase text-center">
            <a href="#" style="color:#d9dcde; font-size:2.1em" class="h1"><b style="font-weight:bold">Bbiz</b>Shop<span class="text-lowercase"> v.1</span></a>
    </div>

    <div class="card-body ">
    
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="email"  placeholder="Email "class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
            </div>

            <div class="input-group mb-3">
            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger btn-block">Se connecter...</button>
            </div>

            </div>
        </form>

    <!--
    <p class="mb-1">
    <a href="forgot-password.html">I forgot my password</a>
    </p>
    <p class="mb-0">
    <a href="register.html" class="text-center">Register a new membership</a>
    </p>
    -->

    </div>
@endsection