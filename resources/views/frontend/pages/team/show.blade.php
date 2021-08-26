@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">About {{ $leader->name }}</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.leadership') }}">All</a></li>
                            <li class="breadcrumb-item active">Leadership</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="tab-history-image video-popup mt-30">
                    {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link"> --}}
                        <div class="single-popup-wrap1">
                            <img class="img-fluid" src="{{ $leader->avatar ? json_decode($leader->avatar)->secure_url : '/frontend/assets/images/team/team-member-01-370x455.jpg' }}" alt="">
                            {{-- <div class="ht-popup-video video-button">
                                <div class="video-mark">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                </div>
                                <div class="video-button__two">
                                    <div class="video-play">
                                        <span class="video-play-icon"></span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="tab-content-inner  mt-30">
                    <h4>{{ $leader->name }} </h4>
                    <h6>{{ $leader->title }}</h6>

                    <div class="text mb-30">
                        {{ $leader->role }}
                    </div>

                    <!-- Single Social Group Start -->
                    <div class="single-social-group section-space--mb_60 wow move-up">

                        <ul class="list ht-social-networks solid-rounded-icon">
                            <li class="item">
                            <a href="https://facebook.com/{{ $leader->facebook }}" target="_blank" class="social-link"> <i class="fab fa-facebook social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="https://twitter.com/{{ $leader->twitter }}" target="_blank" class="social-link"> <i class="fab fa-twitter social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="https://instagram.com/{{ $leader->instagram }}" target="_blank" class="social-link"> <i class="fab fa-instagram social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="https://linkedin.com/in/{{ $leader->linkedin }}" target="_blank" class="social-link"> <i class="fab fa-linkedin social-link-icon"></i> </a>
                            </li>
                            {{-- <li class="item">
                                <a href="#" target="_blank" class="social-link"> <i class="fab fa-pinterest social-link-icon"></i> </a>
                            </li> --}}
                        </ul>
                    </div>
                    <!-- Single Social Group End -->

                    <div class="text mb-30">
                        {!!nl2br( $leader->description )!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection