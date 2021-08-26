@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Admission form Upload</h1>
            <ul>
                {{-- <li>Team</li> --}}
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
	
			<div class="row">
				@if (Session::has('message'))
            		<div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> {{ Session::get('message') }}
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
				    {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
				@endif
				<form method="POST" action="{{ route('admin.form.update', $form->path()) }}" enctype="multipart/form-data">
					@method('patch')
					@csrf
					<div class="col-md-12 form-group mb-3">
	                    <label for="name">Name</label>
	                    <input class="form-control" id="name" name="name" type="text" value="{{ $form->name }}">
	                    @error('name')
	                    	<small class="form-control-feedback alert-danger">
	                            {{ $message }}
	                        </small>
	                    @enderror
	                </div>
	                <div class="col-md-12 form-group mb-3">
	                    <label for="name">File</label>
	                    <input class="form-control" id="avatar" name="avatar" type="file">
	                    @error('avatar')
	                    	<small class="form-control-feedback alert-danger">
	                            {{ $message }}
	                        </small>
	                    @enderror
	                </div>
	                <button type="submit" class="btn btn-primary">Update</button>
            	</form>
			</div>
	

    </div>
 @endsection


{{--  engineering@mypatricia.com
 emmanuel.amodu@patricia.com.ng
 backend Engineers
 Full stack developers --}}