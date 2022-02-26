@extends('layouts.app')
@section('title','Restart Password |')
@section('header')
    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="{{route('login')}}" class="headerButton">
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->
@endsection
@section('content')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="login-form">
            <div class="section">
                <h1>Reset Password</h1>
                <h4>Type your email to reset your password</h4>
            </div>
            <div class="section mt-2 mb-5">
                <form method="post" action="{{route('forgot.password.post')}}">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Reset</button>
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
