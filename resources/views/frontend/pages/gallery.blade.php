@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Gallery</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--======== careers-experts Start ==========-->
        <div class="careers-experts-wrapper section-space--pt_100">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-7 ml-auto mr-auto">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_30">
                            <h3 class="heading">Become a part of the big family at Cambridge College Ikeja's<span class="text-color-primary"> Upcoming Events.</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div> --}}


                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="slide-image">
                            <div class="image-wrap">
                            	<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QmE28u3hpqA" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!--======== careers-experts End ==========-->
    </div>

    <br>
            <!-- Flexible image slider wrapper Start -->
            <div class="flexible-image-slider-wrapper section-space--ptb_100 border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_60">
                                <h3>Photo Speaks</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="flexible-image-slider-wrap">
                                <div class="swiper-container three-flexible__container">
                                    <div class="swiper-wrapper">
                                    	@foreach($images as $image)
                                        <div class="swiper-slide">
                                            <!-- Single flexible slider Start -->
                                            <div class="single-flexible-slider">
                                                <img class="img-fluid" src="{{ json_decode($image->avatar)->secure_url }}" alt="Slider 01">
                                            </div>
                                            <!-- Single flexible slider End -->
                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- Add Arrows -->
                                    <div class="swiper-nav-button swiper-button-next"><i class="nav-button-icon"></i></div>
                                    <div class="swiper-nav-button swiper-button-prev"><i class="nav-button-icon"></i></div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-3 section-space--mt_50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flexible image slider wrapper End -->

@endsection

{{-- #15202b --}}