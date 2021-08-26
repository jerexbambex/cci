@extends('layouts.template')

@section('content')
	<div class="main-content">
        @if(!$sliders->count())
            <div class="not-found-wrap text-center">
                <h1 class="text-50">Welcome</h1>
                <p class="subheading mb-3"><img src="/admin/dist-assets/images/faces/Selfie.png" width="20%"></p>
                <p class="mb-5 text-muted text-18">No image added yet.</p>
                <a class="btn btn-lg btn-primary btn-rounded" href="{{ route('admin.gallery.create') }}">Start taking pictures</a>
            </div>
        @else
            <div class="breadcrumb">
                <h1>Slider</h1>
                <ul>
                    <li>slider</li>
                    <li>All</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
            	<div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-icon mb-4">
                        <div class="card-body text-center"><i class="i-Data-Upload"></i>
                            <p class="text-muted mt-2 mb-2">Total Images</p>
                            <p class="text-primary text-24 line-height-1 m-0">{{ $sliders->count() }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 ml-auto">
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-rounded btn-primary btn-block mb-4">
                        <button class="btn btn-primary btn-icon m-1" type="button">
                            <span class="ul-btn__icon"><i class="i-Add-File"></i></span>
                            <span class="ul-btn__text">Add new</span>
                        </button>
                    </a>
                </div>
                <div class="col-md-12">
                    <h4>List of all Images</h4>
                </div>
            </div>

            <div class="row">
            	@foreach($sliders as $slider)
                    <div class="col-md-3">
    	                <div class="card card-profile-1 mb-4">
                            <div class="card-body text-center">
                                <div class="box-shadow-2 mb-3"><img src="{{ json_decode($slider->avatar)->secure_url }}" alt=""></div>
                                <div class="d-flex justify-content-around text-center col-12">
    	                            <form method="POST" action="{{ route('admin.gallery.destroy', $slider->path()) }}">
    	                            	@method('delete')
    	                            	@csrf
    	                            	<button type="submit" class="btn btn-default btn-rounded text-danger">Delete</button>
    	                            </form>
                                    <a class="btn btn-primary btn-rounded" href="{{ route('admin.gallery.edit', $slider->path()) }}">Edit</a>
    	                        </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end of main-content -->
        @endif
    </div>
@endsection