@extends('layouts.app')
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
                <form action="app-pages.html">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="email" class="form-control" id="name1" placeholder="Email address">
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
    </div>
@endsection
@section('footer')
    &nbsp;
@endsection
