@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
{{--     <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">{{ $program->name }} Details</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.programs') }}">Programs</a></li>
                            <li class="breadcrumb-item active">{{ $program->name }}</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- breadcrumb-area end -->

        <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Post Feature Start -->
                        <div class="post-feature blog-thumbnail wow move-up">
                            <img class="img-fluid" src="{{ $program->avatar ? json_decode($program->avatar)->secure_url : '/frontend/assets/images/logo/logo-cci.png' }}" alt="{{ $program->name }}">
                        </div>
                        <!-- Post Feature End -->
                    </div>

                    <div class="col-lg-12 ml-auto mr-auto">
                        <div class="main-blog-wrap">
                            <!--======= Single Blog Item Start ========-->
                            <div class="single-blog-item  wow move-up">

                                <!-- Post info Start -->
                                <div class="post-info lg-blog-post-info">
                                    <div class="post-categories text-center">
                                        {{-- <a href="#"> Full details </a> --}}
                                    </div>

                                    <h3 class="post-title text-center">
                                        <a href="#">{{ $program->name }}</a>
                                    </h3>

                                    <div class="post-meta mt-20 justify-content-center">
                                        {{-- <div class="post-author">
                                            <a href="#">
                                                <img class="img-fluid avatar-96" src="/frontend/assets/images/team/admin.jpeg" alt=""> Harry Ferguson
                                            </a>
                                        </div> --}}
                                        <div class="post-date">
                                            {{-- <span class="far fa-calendar meta-icon"></span> --}}
                                            {{-- January 14, 2019 --}}
                                        </div>
                                        {{-- <div class="post-view">
                                            <span class="meta-icon far fa-eye"></span>
                                            346 views
                                        </div> --}}
                                        {{-- <div class="post-comments">
                                            <span class="far fa-comment-alt meta-icon"></span>
                                            <a href="#" class="smooth-scroll-link">4 Comments</a>
                                        </div> --}}
                                    </div>

                                    <div class="post-excerpt mt-15">

                                        <blockquote>
                                            <p class="p1">{{ $program->description }}</p>
                                        </blockquote>

                                        <p>{!! nl2br($program->body) !!}</p>

                                        <div class="related-posts-wrapper border-top">
                                        	<h5 class="mt-3 mb-4">Other Programs</h5>

                                            <div class="row">
                                            	@foreach($programs as $other)
	                                                <div class="col-lg-3 my-2">
	                                                    <!-- Single Valid Post Start -->
	                                                    <a class="single-valid-post-wrapper" href="{{ route('frontend.program.show', $other->path()) }}">
	                                                        <div class="single-blog__item">
	                                                            <div class="single-valid__thum bg-img" data-bg="/frontend/assets/images/blog/blog-03-370x120.jpg">
	                                                            </div>

	                                                            <div class="post-content">
	                                                                <h6 class="post-title font-weight--bold">{{ $other->name }}</h6>
	                                                            </div>

	                                                        </div>
	                                                    </a>
	                                                    <!-- Single Valid Post End -->
	                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Post info End -->
                            </div>
                            <!--===== Single Blog Item End =========-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================-->

@endsection