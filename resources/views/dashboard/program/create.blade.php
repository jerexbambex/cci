@extends('layouts.template')

@section('styles')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit</h1>
            <ul>
              <li><a href="{{ route('admin.program.index') }}">Programs</a></li>
                <li>Add</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <!-- end of col-->
                <div class="col-md-12 mb-4">
                    <div class="card text-left">
                        <div class="card-body">
                        	@if (Session::has('message'))
                        		<div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> {{ Session::get('message') }}
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
                            @endif
                            <h2>Full Editor</h2>
                            <p>
								Add new program content
                            </p>
                            <form method="POST" action="{{ route('admin.program.store') }}" enctype="multipart/form-data">
                            	@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="A-Levels">
                                        @error('name')
                                        	<small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1"> Landing Image</label>
                                        <div class="input-group mb-3">
										    <input class="form-control" type="file" name="avatar">
										</div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Description</label>
                                        <textarea class="form-control" name="description" rows="5" placeholder="A short description just like a headline"></textarea>
                                    </div>
                                    <div class="mx-auto col-md-9 form-group mb-3">
                                        <label for="picker2">Body</label>
                                        <textarea class="form-control summernote" name="body" rows="20"></textarea>
                                        @error('body')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mx-auto col-md-8">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                        	<span class="ladda-label">Add program</span>
                                        	<span class="ladda-spinner"></span>
                                        	<span class="ladda-spinner"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of col-->
            </div>
        <!-- end of main-content -->
    </div>
@endsection

@section('scripts')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote({
          	height: 500,
            toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['fontsize', ['fontsize']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'video']],
              ['view', ['fullscreen', 'codeview', 'help']]
            ]
          });
        });
    </script>
@endsection
