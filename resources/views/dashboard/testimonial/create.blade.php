@extends('layouts.template')

@section('styles')
	<link rel="stylesheet" href="/admin/dist-assets/css/plugins/dropzone.min.css">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Add testimonial member</h1>
            <ul>
                <li><a href="{{ route('admin.testimonial.index') }}">All testimonials</a></li>
                <li>Add</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        	@if (Session::has('message'))
                        		<div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> {{ Session::get('message') }}
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
							    {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
							@endif
                            <div class="card-title mb-3">Add new testimonial</div>
                            <form method="POST" action="{{ route('admin.testimonial.store') }}" enctype="multipart/form-data">
                            	@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" name="name" type="text" value="{{ old('name', '') }}">
                                        @error('name')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Title.</label>
                                        <input class="form-control" id="title" name="title" type="text" value="{{ old('title', '') }}">
                                        @error('title')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="body">Body</label>
                                        <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="I love Cambridge College Ikeja with all my life">{{ old('body', '') }}</textarea>
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
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                        	<span class="ladda-label">Add testimonial</span>
                                        	<span class="ladda-spinner"></span>
                                        	<span class="ladda-spinner"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end of main-content -->
    </div>
@endsection

@section('scripts')
	{{-- <script src="/admin/dist-assets/js/plugins/dropzone.min.js"></script> --}}
	{{-- <script src="/admin/dist-assets/js/scripts/dropzone.script.min.js"></script> --}}
@endsection