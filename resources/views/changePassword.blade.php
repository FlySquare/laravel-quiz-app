@extends('layouts.app')
@section('title','Change Password')
@section('header')
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="{{route('profile')}}" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="{{route('profile')}}" class="headerButton">
                Profile
            </a>
        </div>
    </div>
@endsection
@section('content')
    <div id="appCapsule">

        <div class="login-form">
            <div class="section">
                <h1>Change Password</h1>
            </div>
            <div class="section mt-2 mb-5">
                <form method="post" action="{{route('change.password.post')}}">
                    @csrf

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password2" name="password2"
                                   placeholder="Password (again)">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Change Password</button>
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
