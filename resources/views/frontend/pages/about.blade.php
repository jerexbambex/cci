@extends('layouts.templatefront')

@section('content')

	<div class="about-banner-wrap banner-space about-us-bg" style="background-image: url(/admin/dist-assets/images/088.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto">
                    <div class="about-banner-content text-center">
                        <h1 class="mb-15 text-white">About Cambridge College Ikeja</h1>
                        <h5 class="font-weight--normal text-white">{{ $about->headline }} </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<div class="section-space--ptb_100">
	    <div class="container">
            {{-- <h3 class="heading">About Us</h3> --}}
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h3 class="heading">Our <span class="text-color-primary">History</span></h3>
                </div>
            </div>
	    	<div class="row px-3 mt-3 justify-content-center">
	    		<div class="col-md-10">
                    {!! nl2br($about->body) !!}         
                </div>
	    	</div>
	    </div>
	</div>

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