@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Leadership</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Leadership</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->



    <!-- ============ Team Member Wrapper Start =============== -->
    <div class="team-member-wrapper section-space--pt_100 section-space--pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-space--mb_60 text-center">
                        <h3 class="heading">We pride ourselves on having a team <br> of <span class="text-color-primary">highly-skilled</span> experts</h3>
                    </div>
                </div>
            </div>
            <div class="row ht-team-member-style-two">
            	@foreach($teams as $team)
                    {{-- <div class="col-lg-4 col-md-6 wow move-up">
                        <div class="grid-item">
                            <a href="{{ route('frontend.leadership.show', $team->id) }}" class="ht-box-images style-02">
                                <div class="ht-team-member">
                                    <div class="team-image">
                                        <img class="img-fluid" src="/frontend/assets/images/team/team-member-01-370x455.jpg" alt="">
                                        <div class="social-networks">
                                            <div class="inner">
                                                <a target="_blank" href="https://facebook.com/{{ $team->facebook }}" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                </a>
                                                <a target="_blank" href="https://twitter.com/{{ $team->twitter }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                </a>
                                                <a target="_blank" href="https://instagram.com/{{ $team->instagram }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-info text-center">
                                        <h5 class="name"><a href="{{ route('frontend.leadership.show', $team->id) }}">{{ $team->name }} (<em>{{ $team->title }}</em>)</a></h5>
                                        <div class="position">{{ $team->role }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6  mt-30">
                        <!-- Box large image warap Start -->
                        <a href="{{ route('frontend.leadership.show', $team->path()) }}" class="box-large-image__wrap wow move-up animated">
                            <div class="box-large-image__box">
                                <div class="box-large-image__midea">
                                    <div class="images-midea">
                                        <img src="{{ $team->avatar ? json_decode($team->avatar)->secure_url : 'frontend/assets/images/team/team-member-01-370x455.jpg' }}" class="img-fluid" alt="">

                                        <div class="button-wrapper">
                                            <div class="btn tm-button">
                                                <span class="button-text">Learn more</span>
                                            </div>
                                        </div>
                                        <div class="heading-wrap">
                                            <h5 class="heading">{{ $team->name }} <br> (<em>{{ $team->title }}</em>) </h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="box-large-image__content mt-30 text-center">
                                    <h6>{{ $team->role }}</h6>
                                    <p>
                                        {{ Str::limit($team->description, 150, '...') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- Box large image warap End -->
                    </div>
                @endforeach
            </div>
            <div class="row ht-team-member-style-three">

                {{-- <div class="col-lg-3 col-md-6 wow move-up">
                    <div class="grid-item mb-30">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="/frontend/assets/images/team/team-member-04-370x452.jpg" alt="">
                                <div class="social-networks">
                                    <div class="inner">
                                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info text-center">
                                <h6 class="name">Stephany Mearsley </h6>
                                <div class="position">Marketing</div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </div>
    </div>
    <!-- ============ Team Member Wrapper End =============== -->
    

    <!--===========  feature-large-images-wrapper  Start =============-->
    <div class="tabs-wrapper  section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        <h6 class="section-sub-title mb-20">Discover Cambridge College Ikeja</h6>
                        {{-- <h3 class="section-title">We have these to say <span class="text-color-primary">from the best A level School in Nigeria!</span> </h3> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ht-tab-wrap">
                    <div class="row">
                        <div class="col-12 text-center wow move-up ">
                            <ul class="nav justify-content-center ht-tab-menu" role="tablist">
                                <li class="tab__item nav-item active">
                                    <a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#history-tab" role="tab" aria-selected="true">Director's Welcome</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab2" data-toggle="tab" href="#mission-tab" role="tab" aria-selected="false">Principal's Message</a>
                                </li>
                                <li class="tab__item nav-item ">
                                    <a class="nav-link" id="nav-tab3" data-toggle="tab" href="#support-tab" role="tab" aria-selected="false">Co-ordinator's Message</a>
                                </li>
                                {{-- <li class="tab__item nav-item ">
                                    <a class="nav-link" id="nav-tab5" data-toggle="tab" href="#awards-tab" role="tab" aria-selected="false">Our awards</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content ht-tab__content wow move-up">

                        <div class="tab-pane fade show active" id="history-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link"> --}}
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="{{ $director->avatar() }}" alt="">
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
                                    <div class="col-lg-6">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">
                                                {!! nl2br($director->body) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="mission-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link"> --}}
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="{{ $principal->avatar() }}" alt="">
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
                                    <div class="col-lg-6">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">
                                                {!! nl2br($principal->body) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="support-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link"> --}}
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="{{ $coordinator->avatar() }}" alt="">
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
                                    <div class="col-lg-6">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">
                                                {!! nl2br($coordinator->body) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="tab-pane fade" id="awards-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link">
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="/frontend/assets/images/bg/home-processing-video-intro-slider-slide-01-image-01-570x350.jpg" alt="">
                                                    <div class="ht-popup-video video-button">
                                                        <div class="video-mark">
                                                            <div class="wave-pulse wave-pulse-1"></div>
                                                            <div class="wave-pulse wave-pulse-2"></div>
                                                        </div>
                                                        <div class="video-button__two">
                                                            <div class="video-play">
                                                                <span class="video-play-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">We’re available for 8 hours a day! <br>Contact to require a detailed analysis and assessment of your plan.</div>
                                            <ul class="check-list section-space--mb_40">
                                                <li class="list-item">Receive real-time business analytics </li>
                                                <li class="list-item">Cross-browser Compatible Design </li>
                                                <li class="list-item">Completely Gutenberg Ready </li>
                                                <li class="list-item">Highly Responsive Tools </li>
                                            </ul>

                                            <div class="tab-button">
                                                <a class="btn-text" href="#">
                                                    <span class="button-text">Let's get started <i class="far fa-long-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== Tabs Wrapper End ======== -->
    <!--===========  feature-large-images-wrapper  End =============-->

@endsection