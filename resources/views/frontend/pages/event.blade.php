@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Events</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Events</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    @if($events->count() >= 1)

        <div class="site-wrapper-reveal">
            <!--======== careers-experts Start ==========-->
            <div class="careers-experts-wrapper section-space--pt_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_30">
                                <h3 class="heading">Become a part of the big family at Cambridge College Ikeja's<span class="text-color-primary"> Upcoming Events.</span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ht-simple-job-listing move-up animate">
                                <div class="list">
                                    @foreach($events as $event)
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="job-info">
                                                        <h5 class="job-name">{{$event->name}}</h5>
                                                        <span class="job-time">{{ $event->time }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="job-description">{{ $event->description }}</div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="job-button text-md-center">
                                                        <a class="ht-btn ht-btn-md ht-btn--solid" href="#">
                                                            <span class="button-text">{{ $event->date }} </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--======== careers-experts End ==========-->
        </div>

    @else

        <!--======= Layouts section Start =======-->
        <div class="layouts-section-wrap section-space--pt_100 section-space--pb_60">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 ml-auto mr-auto">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_30">
                            <h3 class="heading">Become a part of the big family at Cambridge College Ikeja's<span class="text-color-primary"> Upcoming Events.</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="layouts-images text-right">
                            {{-- <img class="img-fluid" src="/frontend/assets/images/preview/mitech-landing-blog-preview.jpg" alt=""> --}}
                            <img class="img-fluid worldRotate" src="/frontend/assets/images/hero/mitech-slider-cybersecurity-global-image.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="layouts-section-text">
                            <h3 class="heading"><span class="text-color-primary"></span> We will provide event updates as soon as the pandemic situation improves and we can safely hold our proposed events</h3>
                            <p class="text mt-30" style="font-size: 22px;">While you are waiting you can check out our <a href="{{ route('frontend.programs') }}">programs</a>. You can also check out our <a href="{{ route('frontend.gallery') }}">gallery</a></p>

                            <div class="sider-title-button-box cta-button-group--two text-center mt-30">
                                <a href="{{ route('frontend.programs') }}" class="ht-btn ht-btn-md">Take me to Programs</a>
                                <a href="{{ route('frontend.gallery') }}" class="btn btn--white ht-btn-md">Take me to Gallery</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--======= Layouts section End =======-->

    @endif
    <br>

@endsection

{{-- #15202b --}}