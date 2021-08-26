@extends('layouts.template')

@section('styles')
	<link rel="stylesheet" href="/admin/dist-assets/css/plugins/dropzone.min.css">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Add detail</h1>
            <ul>
                <li><a href="/detail">detail</a></li>
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
                            <div class="card-title mb-3">Add new detail</div>
                            <form method="POST" action="{{ route('detail.store') }}">
                            	@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName1">Email</label>
                                        <input class="form-control" id="firstName1" name="email" type="email" placeholder="user@example.com">
                                        @error('email')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName1">Phone Number</label>
                                        <input class="form-control" id="firstName1" name="phone" type="text" placeholder="0123456789">
                                        @error('phone')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Address</label>
                                        <textarea class="form-control" name="address" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                            <span class="ladda-label">Create</span>
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