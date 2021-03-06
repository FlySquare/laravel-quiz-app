@extends('layouts.app')
@section('title','Login |')
@section('header')
    &nbsp;
@endsection
@section('content')
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="assets/img/sample/photo/vector4.png" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>Get started</h1>
                <h4>Fill the form to log in</h4>
            </div>
            <div class="section mt-1 mb-5">
                <form method="post" action="{{route('login.post')}}">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Email address">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            <a href="{{route('register')}}">Register Now</a>
                        </div>
                        <div><a href="{{route('forgot.password')}}" class="text-muted">Forgot Password?</a></div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </div>

                </form>
            </div>
        </div>
        @foreach ($errors->all() as $error)
            <br>
            <div style="max-width: 90%;margin: auto;" class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
        @if (session()->has('message'))
            <br>
            <div style="max-width: 90%;margin: auto;" class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
@endsection
@section('footer')
    &nbsp;
@endsection
