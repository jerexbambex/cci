@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contact us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact us </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

            <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30">
                            <h3 class="heading">
                            	To requests <br>further information, <br><span class="text-color-primary">contact us</span> using the form below or give us a call. You may also contact at our campus location. 
                            </h3>
                            <div class="sub-heading">
                            	{{-- We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket. --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        @if(Session::has('message'))
                            <div class="ht-message-box style-success alert alert-success mb-30" role="alert">
                                <span class="icon"><i class="far fa-check-circle"></i></span> {{ Session::get('message') }}
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        @endif

                        <div class="contact-form-wrap">
                            <form method="POST" action="{{ route('frontend.contact') }}">
                                @csrf
                                <div class="contact-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="name" type="text" placeholder="Name *" value="{{ old('name') ? old('name') : '' }}">
                                            @error('name')
                                                <span class="small text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="contact-inner">
                                            <input name="email" type="email" placeholder="Email *" value="{{ old('email') ? old('email') : '' }}">
                                            @error('email')
                                                <span class="small text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="subject" type="text" placeholder="Subject *" value="{{ old('subject') ? old('subject') : '' }}">
                                        @error('subject')
                                            <span class="small text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="message" placeholder="Please describe what you need.">{{ old('message') ? old('message') : '' }}</textarea>
                                        @error('message')
                                            <span class="small text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit">Send message</button>
{{--                                        <p class="form-messege"></p>--}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->

        <!--====================  Conact us info Start ====================-->
        <div class="contact-us-info-wrappaer section-space--pb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="conact-info-wrap mt-30">
                            <h5 class="heading mb-20">Lagos, Nigeria</h5>
                            <ul class="conact-info__list">
                            	<li>64 Adekunle Fajuyi Way G.R.A. Ikeja, Lagos</li>
                                <li><a href="mailto:info@cambridgecollegeikeja.com" class="hover-style-link">info@cambridgecollegeikeja.com</a></li>
                                <li><a href="tel:+2347055555801" class="hover-style-link text-black font-weight--bold">07055555801, 07055555802, 08030961260</a></li>
                                <li><a href="https://cambridgecollegeikeja.com/" class="hover-style-link text-color-primary">www.cambridgecollegeikeja.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="conact-info-wrap mt-30">
                            {{-- <h5 class="heading mb-20">New York</h5>
                            <ul class="conact-info__list">
                                <li>58 Howard Street #14 New York</li>
                                <li><a href="#" class="hover-style-link text-color-primary">contact.newyork@mitech.com</a></li>
                                <li><a href="#" class="hover-style-link text-black font-weight--bold">(+47)1221 09878</a></li>
                            </ul> --}}
                            <div class="col-md-12 text-center text-md-right">
                                <ul class="list ht-social-networks solid-rounded-icon">

                                    <li class="item">
                                        <a href="https://twitter.com/Cambridgeikeja" target="_blank" aria-label="@Cambridgeikeja" class="social-link hint--bounce hint--top hint--primary">
                                            <i class="fab fa-twitter link-icon"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="https://facebook.com/CambridgeikejaSixthForm" target="_blank" aria-label="@CambridgeikejaSixthForm" class="social-link hint--bounce hint--top hint--primary">
                                            <i class="fab fa-facebook-f link-icon"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="https://instagram.com/cambridgecollegeikeja" target="_blank" aria-label="@cambridgecollegeikeja" class="social-link hint--bounce hint--top hint--primary">
                                            <i class="fab fa-instagram link-icon"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="https://linkedin.com/" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                            <i class="fab fa-linkedin link-icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        {{-- <div class="conact-info-wrap mt-30">
                            <h5 class="heading mb-20">Russia</h5>
                            <ul class="conact-info__list">
                                <li>The Courtyard Building 11 Curtain Road, Russia</li>
                                <li><a href="#" class="hover-style-link text-color-primary">contact.russia@mitech.com</a></li>
                                <li><a href="#" class="hover-style-link text-black font-weight--bold">(+53)1221 09877</a></li>
                            </ul>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
        <!--====================  Conact us info End  ====================-->

        <div class="full-wrap-map section-space--pt_100">
            <div class="section-title  text-center">
                <h3 class="section-space--mb_40">We are on the world map!</h3>
            </div>

            <div class="google-map">
                {{-- <div id="googleMap-3" class="embed-responsive-item googleMap-3" data-lat="3.342296" data-Long="-6.580175"></div> --}}
                <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.535249578189!2d3.3401074152749097!3d6.580180724326149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b921c8c6760e1%3A0x854b083596d2d1f!2sCambridge%20College!5e0!3m2!1sen!2sng!4v1598523337913!5m2!1sen!2sng" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" defer></iframe>
            </div>
        </div>

        <!--========== Call to Action Area Start ============-->
        {{-- <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading">We run all kinds of Advanced Levels that vow your <span class="text-color-primary"> success</span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--two text-center">
                            <a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="{{ route('frontend.about') }}" class="btn btn--secondary btn-two "><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--========== Call to Action Area End ============-->


@endsection
