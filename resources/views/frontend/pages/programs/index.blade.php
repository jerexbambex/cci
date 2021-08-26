@extends('layouts.templatefront')

@section('content')

    <div class="about-banner-wrap banner-space bg-img" data-bg="/frontend/assets/images/bg/pic1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto">
                    <div class="about-banner-content text-center">
                        <h1 class="mb-15 text-white">Programmes</h1>
                        <h5 class="font-weight--normal text-white">List of all programmes offered at Cambridge College Ikeja.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  feature-images-wrapper  Start =============-->
    <div class="feature-images-wrapper bg-gray section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_30">
                        <h3 class="heading"> To prepare you for success, <br> we provide <span class="text-color-primary"> truly outstanding Advanced Level Education.</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="feature-images__four">
                        <div class=" row">
                        	@foreach($programs as $program)
	                            <div class="single-item col-lg-4 col-md-6 mt-30 wow move-up">
	                                <!-- ht-box-icon Start -->
	                                <a href="{{ route('frontend.program.show', $program->path()) }}" class="ht-box-images style-04">
	                                    <div class="image-box-wrap">
	                                        <div class="box-image">
	                                            {{-- <img class="img-fulid" src="{{ $program->avatar ? json_decode($program->avatar)->secure_url : '/frontend/assets/images/icons/mitech-box-image-style-05-image-01-60x60.png'}}" alt=""> --}}
                                                <img class="img-fulid" src="/frontend/assets/images/icons/mitech-box-image-style-05-image-01-60x60.png" alt="">
	                                        </div>
	                                        <div class="content">
	                                            <h5 class="heading">{{ $program->name }}</h5>
	                                            <div class="text">{{ $program->description }}</div>
                                                <br>
                                                <div class="feature-btn">
                                                    <p href="{{ route('frontend.program.show', $program->path()) }}">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </p>
                                                </div>
	                                        </div>
	                                    </div>
	                                </a>
	                                <!-- ht-box-icon End -->
	                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_60">Challenges are just opportunities in disguise. <a href="#">Take the challenge!</a></div>

                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->

    <!--===========  feature-large-images-wrapper  Start =============-->
    <div class="feature-large-images-wrapper section-space--ptb_100">
        <div class="container">
            <div class="cybersecurity-about-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="conact-us-wrap-one managed-it">
                            <h5 class="heading ">Cambridge College Ikeja was created in response to the need for a <span class="text-color-primary"> Sixth form school</span> that will meet international standard. </h5>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="cybersecurity-about-text">
                            <div class="text">The need for the college became necessary with the scraping of Higher School Certificate (HSC) Colleges.</div>
                            <div class="button-group-wrap">
                                <a href="{{ $form->avatar ? json_decode($form->avatar)->secure_url : '#' }}" class="ht-btn ht-btn-md mr-md-3 mb-20">Download a free admission form</a>
                                <a href="#" class="ht-btn ht-btn-md ht-btn--solid">Live chat with a consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--===========  feature-large-images-wrapper  End =============-->

@endsection