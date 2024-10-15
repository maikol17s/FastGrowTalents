@extends('layouts.app')

@section('title', 'LOGIN')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/access.css') }}">

    <div class="container">

        <form class="form signup" action="{{ route('login') }}" method="POST">
            @csrf

            <h2>LOGIN</h2>

            @error('email')
                <h5>{{ $message }}</h5>
            @enderror

            <div class="inputBox">
                <input type="email" name="email" value="{{ old('email') }}" required="required" />
                <i class="fas fa-envelope"></i>
                <span>EMAIL</span>
            </div>

            <div class="inputBox">
                <input type="password" name="password" required="required" />
                <i class="fas fa-lock"></i>
                <span>PASSWORD</span>
                @error('password')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>

            <div class="forgot_password">
                @if ($errors->has('email') || $errors->has('password'))
                    <a href="">
                        Forgot your password?
                    </a>
                @endif
            </div>

            <div class="inputBox">
                <input type="submit" value="LOGIN" />
            </div>

            <div class="remember">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">
                    <span>Remember me</span>
                </label>
            </div>

            <p>Not Registered?
                <a href="{{ route('register') }}" class="create">Create an account</a>
            </p>

        </form>
    </div>
@endsection
