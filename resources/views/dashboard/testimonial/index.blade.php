@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Uploaded Past testimonials</h1>
            <ul>
                <li>testimonial</li>
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
        	<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-muted mt-2 mb-2">Total uploaded testimonials</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $testimonials->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 ml-auto">
                <a href="{{ route('admin.testimonial.create') }}" class="btn btn-rounded btn-primary btn-block mb-4">
                    <button class="btn btn-primary btn-icon m-1" type="button">
                        <span class="ul-btn__icon"><i class="i-Add-File"></i></span>
                        <span class="ul-btn__text">Add new</span>
                    </button>
                </a>
            </div>
            <div class="col-md-12">
                <h4>List of all uploaded testimonial</h4>
            </div>
        </div>

        <div class="row">
        	@foreach($testimonials as $testimonial)
                <div class="col-md-3">
	                <div class="card card-profile-1 mb-4">
                        <div class="card-body text-left">
                            <div class="avatar box-shadow-2 mb-3"><img src="{{ $testimonial->avatar ? json_decode($testimonial->avatar)->secure_url : '/admin/dist-assets/images/faces/Selfie.png' }}" alt=""></div>
                            <h5 class="mt-0">{{ $testimonial->name }}</h5>
                            <p class="">{{ $testimonial->title }}</p>
                            <p>{{ $testimonial->body }}</p>
                            <div class="d-flex justify-content-around text-center col-12">
	                            <form method="POST" action="{{ route('admin.testimonial.delete', $testimonial->path()) }}">
	                            	@method('delete')
	                            	@csrf
	                            	<button type="submit" class="btn btn-default btn-rounded text-danger">Delete</button>
	                            </form>
	                            <a href="{{ route('admin.testimonial.edit', $testimonial->path()) }}" class="btn btn-primary btn-rounded text-white">Edit</a>
	                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- end of main-content -->
    </div>
@endsection
