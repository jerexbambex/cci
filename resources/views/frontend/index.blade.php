@extends('layouts.templatefront')

@section('content')
<!-- Welcome Modal -->
@include('includes._welcomemodal')
<!-- Welcome Modal End -->
        <!--============ Infotechno Hero Start ============-->
        <div class="processing-hero processing-hero-bg">
            <div class="container">
                <div class="row align-items-center">
                    <!--baseline-->
                    <div class="col-lg-8 col-md-7">
                        <div class="processing-hero-text wow move-up">
                            <h6 class="text-white mt-5">Cambridge College Ikeja</h6>
                            <h6 class="text-white">The Best A Level College in Nigeria</h6>
                            <h3 class="font-weight--reguler mb-30 text-white">We inculcate in our students <span class="text-color-secondary">skills acquisition</span> with <span class="text-color-secondary">academic</span> activities to help achieve excellence in A Levels.</h3>
                            <div class="hero-button mt-30 mb-20">
                                <a href="{{ route('frontend.about') }}" class="ht-btn ht-btn-md">Dig deeper now </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="processing-hero-images-wrap wow move-up">
                            <div class="processing-hero-images">
                                <img class="img-fluid" src="/frontend/assets/images/hero/girl1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Infotechno Hero End ============-->
    <!--============ Cybersecurity Hero Start ============-->
   {{--  <div class="cybersecurity-hero processing-hero-bg__color " style="background-image: url('/frontend/assets/images/hero/slider-processing-slide-01-bg.jpg');">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!--baseline-->
                <div class="col-lg-6 col-md-7">
                    <div class="cybersecurity-hero-text wow move-up">
                        <h6 class="text-white mt-5">Cambridge College Ikeja</h6>
                        <h6 class="text-white">The Best A Level College in Nigeria</h6>
                        <h3 class="font-weight--reguler mb-30 text-white">We inculcate in our students <span class="text-color-secondary">skills acquisition</span> with <span class="text-color-secondary">academic</span> activities to help achieve excellence in A Levels.</h3>
                        <div class="hero-button mt-30 mb-20">
                            <a href="{{ route('frontend.about') }}" class="ht-btn ht-btn-md">Dig deeper now </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="cybersecurity-hero-images-wrap wow move-up">
                        <div class="cybersecurity-hero-images section-space--mt_80">
                            <div class="inner-img-one">
                                <img class="img-fluid worldRotate" src="/frontend/assets/images/hero/mitech-slider-cybersecurity-global-image.png" alt="">
                            </div>
                            <div class="inner-img-two">
                                <img class="img-fluid  ml-5 " src="/frontend/assets/images/hero/pic1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--============ Cybersecurity Hero End ============-->

 {{--    <div class="section-space--ptb_100 infotechno-section-bg-01">

        <div class="our-experience-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title small-mb__40 tablet-mb__40">
                            <h3 class="heading">Our <span class="text-color-primary">History</span></h3>
                            <p class="text mt-20">{!! Str::limit(nl2br($about->body), 700) !!}</p>

                            <div class="sider-title-button-box mt-30">
                                <a href="{{ route('frontend.about') }}" class="ht-btn ht-btn-md">Find out more</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-5 align-items-center">
                        <div class="rv-video-section align-items-center p-2">
                            <img src="/frontend/assets/images/cambridge/animat-lightbulb-color.gif" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!--===========  feature-images-wrapper  Start =============-->
    <div class="feature-images-wrapper section-space--ptb_100 row-separators-wrap">
        <div class="wavify-wrapper">
            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item">
                <path class="feel-the-wave" d="M 0 179.97 C 190.3 161.84 190.3 161.84 380.6 170.905 C 570.9000000000001 179.97 570.9000000000001 179.97 761.2 147.551 C 951.5 115.132 951.5 115.132 1141.8 118.065 C 1332.1 120.998 1332.1 120.998 1522.4 92.748 C 1712.7000000000003 64.498 1712.7000000000003 64.498 1903 132.94 L 1903 499 L 0 499 Z" fill="rgba(224,238,255,0.5)"></path>
                <path class="feel-the-wave-two" d="M 0 137.473 C 237.875 103.719 237.875 103.719 475.75 120.596 C 713.625 137.473 713.625 137.473 951.5 130.753 C 1189.375 124.032 1189.375 124.032 1427.25 158.603 C 1665.125 193.175 1665.125 193.175 1903 130.753 L 1903 499 L 0 499 Z" fill="rgba(224,238,255,0.4)"></path>
            </svg>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_30">
                        <h3 class="heading">Our <span class="text-color-primary"> Programs</span></h3><br>
                        <h6 class="text">With a well curated curriculum, our A Level programme is the best in Nigeria.</h6>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="feature-images__four">
                <div class=" row">
                    @foreach($programs as $program)
                        <div class="col-lg-4 col-md-6">
                            <div class="ht-box-icon style-02 single-svg-icon-box">
                                <div class="icon-box-wrap">
                                    <div class="icon">
                                        <img class="img-fulid" src="/frontend/assets/images/icons/mitech-box-image-style-05-image-01-60x60.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">{{ $program->name }} </h5>
                                        <div class="text">{{ $program->description }}</div>
                                        <div class="feature-btn">
                                            <a href="{{ route('frontend.program.show', $program->path()) }}">
                                                <span class="button-text">Discover now</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach     
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->


    <!--===========  Our Company History Start =============-->

    <div class="our-company-history section-space--ptb_100">
        <div class="container-fluid">
            <div class="grid-wrapper">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
                <div class="line line-4"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-custom-col">
                        <div class="section-title-wrap">
                            <h6 class="section-sub-title mb-20">Cambridge College Ikeja</h6>
                            <h3 class="heading">We’ve been excelling <br> for over <span class="text-color-primary"> 20 years</span> and we are known as the <br> Top Sixth Form school <br> in Lagos and Nigeria as a whole.</h3>

                                <p class="text mt-30" style="font-size: 20px;">Cambridge College is full of exceptional students who believe they can make meaningful contributions to society – and they can. We are more than two decades in existence and have produced several first class alumni who have either graduated or are presently in different fields of studies in Ivy league universities around the globe.</p>

                                <div class="inner-button-box section-space--mt_60">
                                    <a href="{{ route('frontend.why') }}" class="ht-btn ht-btn-md">Find out more</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rv-video-section">

                        <div class="ht-banner-01 ">
                            <img class="img-fluid border-radus-5 animation_images one wow fadeInDown" src="/frontend/assets/images/cambridge/1.jpg" alt="">
                        </div>

                        <div class="ht-banner-02">
                            <img class="img-fluid border-radus-5 animation_images two wow fadeInDown" src="/frontend/assets/images/cambridge/2.jpg" alt="">
                        </div>

                        <div class="main-video-box video-popup">
                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30"> --}}
                                <div class="single-popup-wrap">
                                    <img class="img-fluid border-radus-5" src="/frontend/assets/images/cambridge/5.jpg" alt="">
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
                            {{-- </a> --}}
                        </div>


                        <div class="ht-banner-03">
                            <img class="img-fluid border-radus-5 animation_images three wow fadeInDown" src="/frontend/assets/images/cambridge/4.jpg" alt="">
                        </div>

                        <div class="ht-banner-04">
                            <img class="img-fluid border-radus-5 animation_images four wow fadeInDown" src="/frontend/assets/images/cambridge/3.jpg" alt="">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  Our Company History Start  End =============-->







    <!--====================  Contact us Section Start ====================-->
    <div class="contact-us-section-wrappaer processing-contact-us-bg section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading text-white">Obtain more information about A Levels in Nigeria. </h3>

                        <div class="sub-heading text-white">We’re available for 24 hours a day!<br>Contact to require a detailed analysis and assessment of your plan.</div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-info-two text-center">
                            <div class="icon">
                                <span class="fal fa-phone"></span>
                            </div>
                            <h6 class="heading font-weight--reguler">Reach out now!</h6>
                            <h5 class="call-us">
                                <a href="tel:+2347055555801">+2347 05 555 5801</a>, 
                                <a href="tel:+2347055555802">+2347 05 555 5802</a>, 
                                <a href="tel:+2348030961260"> +2348 03 096 1260,</a>
                            </h5>
                            <div class="contact-us-button mt-20">
                                {{-- <a href="#" class="btn btn--secondary">Contact us</a> --}}
                            </div>
                        </div>
						
						<div class="contact-info-two text-center">
                            <div class="icon">
                                <span class="fal fa-envelope"></span>
                            </div>
                            <h6 class="heading font-weight--reguler">Send Us a Message</h6>
                            <h5 class="call-us"><a href="mailto:info@cambridgecollegeikeja.com">info@cambridgecollegeikeja.com</a></h5>
                            <div class="contact-us-button mt-20">
                                <a href="{{ route('frontend.contact') }}" class="btn btn--secondary">Contact us</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->
    </div>






@endsection