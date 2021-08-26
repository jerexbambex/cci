@extends('layouts.template')

@section('styles')
	<link rel="stylesheet" href="/admin/dist-assets/css/plugins/dropzone.min.css">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Add video</h1>
            <ul>
                <li><a href="/video">video</a></li>
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
                            <div class="card-title mb-3">Add new video</div>
                            <form method="POST" action="{{ route('video.store') }}">
                            	@csrf
                                <div class="col-md-12 form-group mb-3">
                                    <label for="firstName1">Video Title</label>
                                    <input class="form-control" id="firstName1" type="text" name="title" placeholder="learn how to be an OAP">
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="firstName1">Video URL</label>
                                    <input class="form-control" id="firstName1" type="text" name="url" placeholder="https://youtube.com/embed/aHVwty245">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                        <span class="ladda-label">Add video</span>
                                        <span class="ladda-spinner"></span>
                                        <span class="ladda-spinner"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end of main-content -->
    </div>
@endsection