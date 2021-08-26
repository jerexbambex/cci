@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Why choose us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Why choose us</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="feature-large-images-wrapper section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_30">
                        <h3 class="heading mb-20">Consistency over the years, <br> we provide <span class="text-color-primary">truly world class scholars.</span> </h3>
                        <p class="title-dec-text" style="font-size: 18px;">It is rare to find a student with A-Level experience dropping out of the university. The reason is because the A-Level programme equips students with what it takes to cope with university education in terms of attending lectures, library usage, tutorials, learning techniques, time management to mention a few.</p>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>
            {{-- <div class="row">
                @foreach($results as $result)
                    <div class="col-lg-4 col-md-6">
                        <div class="ht-box-icon style-02 single-svg-icon-box">
                            <div class="icon-box-wrap">
                                <div class="icon">
                                    <img class="img-fulid" src="{{ $result->avatar ? json_decode($result->avatar)->secure_url : '/frontend/assets/images/team/reply-comm.jpg'}}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="headding">{{ $result->name }} </h6>
                                    <div class="font-weight-bold">{{ $result->exam_type }} {{ $result->exam_year }}</div>
                                    <div class="text">{{ $result->exam_number }}</div>
                                    <div class="text">{{ $result->subject_1 }} : <span class="mr-auto"> {{ $result->grade_1 }}</span></div>
                                    <div class="text">{{ $result->subject_2 }} : <span class="mr-auto"> {{ $result->grade_2 }}</span></div>
                                    <div class="text">{{ $result->subject_3 }} : <span class="mr-auto"> {{ $result->grade_3 }}</span></div>
                                    @if($result->subject_4)
                                        <div class="text">{{ $result->subject_4 }} : <span class="mr-auto"> {{ $result->grade_4 }}</span></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach     
                
            </div> --}}
            <div class="row px-3 justify-content-center">
                <div class="col-md-12">
                    {!! nl2br($whyus->body) !!}
                </div>
            </div>
        </div>
    </div>


    <!--====================  testimonial section ====================-->
    <div class=" section-space--ptb_100 slayouts-section-wrap section-space--pt_80" style="background-color: #f6f2ed;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">Alumni Testimonials</h6>
                        <h3 class="heading">What do people praise about <span class="text-primary"> Cambridge College Ikeja?</span></h3>
                    </div>
                </div>
                @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-slider__one wow move-up">

                            <div class="testimonial-slider--info">
                                <div class="testimonial-slider__media">
                                    <img src="{{$testimonial->avatar ? json_decode($testimonial->avatar)->secure_url : '/frontend/assets/images/testimonial/reply-comm.jpg' }}" class="img-fluid" alt="">
                                </div>

                                <div class="testimonial-slider__author">
                                    <div class="testimonial-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="author-info">
                                        <h6 class="name">{{ $testimonial->name }}</h6><br>
                                        <span class="designation">{{ $testimonial->title }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-slider__text small" style="font-size: 15px;">{{ $testimonial->body }}</div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--====================  End of testimonial section  ====================-->


    <!--========= About Resources Wrapper Start ===========-->
    <div class="about-resources-wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="resources-left-box">
                        <div class="resources-inner">
                            <h6 class="sub-title mb-20">Resources</h6>
                            <p>Admission is on now!!!</p>
                            <h3 class="heading">Contact us to get a copy of the <span class="text-color-primary"> Admission form.</span></h3>
                            <div class="button mt-30">
                                {{-- <a href="{{ route('frontend.contact') }}" class="ht-btn ht-btn-md">Contact us now</a> --}}
                                {{-- <a href="{{ $form->avatar ? json_decode($form->avatar)->secure_url : '#' }}" class="ht-btn ht-btn-md">Download now ({{ $form->avatar ? round(json_decode($form->avatar)->bytes / 1024) : '#' }} KB)</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="resources-right-box">
                        <div class="resources-right-inner text-center">
                            <div class="button mt-30">
                                <a href="{{ route('frontend.contact') }}" class="ht-btn ht-btn-md">Contact us now</a>
                                {{-- <a href="{{ $form->avatar ? json_decode($form->avatar)->secure_url : '#' }}" class="ht-btn ht-btn-md">Download now ({{ $form->avatar ? round(json_decode($form->avatar)->bytes / 1024) : '#' }} KB)</a> --}}
                            </div>
                            <div class="resources-images">
                                {{-- <img class="img-fluid" src="/frontend/assets/images/banners/admission.jpg" alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========= About Resources Wrapper End ===========-->

@endsection