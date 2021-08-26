@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit testimonial member</h1>
            <ul>
                <li><a href="{{ route('admin.testimonial.index') }}">All testimonials</a></li>
                <li>Edit</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                        	@if (Session::has('message'))
                        		<div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> {{ Session::get('message') }}
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
							    {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
							@endif
                            <div class="card-title mb-3">Edit {{ $testimonial->name }}'s record</div>
                            <form method="POST" action="{{ route('admin.testimonial.update', $testimonial->path()) }}" enctype="multipart/form-data">
                                @method('PATCH')
                            	@csrf

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" name="name" type="text" value="{{ $testimonial->name }}">
                                        @error('name')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Title.</label>
                                        <input class="form-control" id="title" name="title" type="text" value="{{ $testimonial->title }}">
                                        @error('title')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="body">Body</label>
                                        <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="I love Cambridge College Ikeja with all my life">{{ $testimonial->body }}</textarea>
                                        @error('body')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1">Image</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="file" name="avatar">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                        	<span class="ladda-label">Update info</span>
                                        	<span class="ladda-spinner"></span>
                                        	<span class="ladda-spinner"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 o-hidden">
                        <div class="avatar text-center p-5">
                            <img class="" src="{{ $testimonial->avatar ? json_decode($testimonial->avatar)->secure_url : '/admin/dist-assets/images/faces/Selfie.png' }}" alt="{{ $testimonial->name }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $testimonial->name }}</h5>
                            <p class="card-text small">{{ $testimonial->title }}</p>
                            <p class="card-text">{{ $testimonial->body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end of main-content -->
    </div>
@endsection