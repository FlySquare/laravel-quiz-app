@extends('layouts.app')
@section('title','Profile')
@section('content')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="profile-head">
                <div class="avatar">
                    <img src="{{request()->get('currentUser')->user_image}}" alt="avatar" class="imaged w64 rounded">
                </div>
                <div class="in">
                    <h3 class="name">{{request()->get('currentUser')->username}}</h3>
                    <h5 class="subtext">{{request()->get('currentUser')->email}}</h5>
                </div>
            </div>
        </div>

        <div class="section mt-1 mb-2">
        </div>

        <div class="section full">
            <div class="wide-block transparent p-0">
                <ul class="nav nav-tabs lined iconed" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#feed" role="tab">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                            <ion-icon name="settings-outline"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class="section full mb-2">
            <div class="tab-content">

                <!-- feed -->
                <div class="tab-pane fade show active" id="feed" role="tabpanel">
                    <div class="mt-2 pr-2 pl-2">
                        <div class="row">
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/5.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/6.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/5.jpg" alt="image" class="imaged w-100">
                            </div>
                            <div class="col-4 mb-2">
                                <img src="assets/img/sample/photo/6.jpg" alt="image" class="imaged w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * feed -->

                <!-- settings -->
                <div class="tab-pane fade" id="settings" role="tabpanel">
                    <ul class="listview image-listview text flush transparent pt-1">
                        <li>
                            <a href="{{route('change.password')}}" class="item">
                                <div class="in">
                                    <div>Change Password</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- * settings -->
            </div>
        </div>
        <!-- * tab content -->

    </div>
    <!-- * App Capsule -->
@endsection
