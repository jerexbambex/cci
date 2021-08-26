@extends('layouts.template')

@section('styles')
	<link rel="stylesheet" href="/admin/dist-assets/css/plugins/dropzone.min.css">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Add an event</h1>
            <ul>
                <li><a href="{{ route('admin.event.index') }}">Events</a></li>
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
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
							    {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
							@endif
                            <div class="card-title mb-3">Add new event</div>
                            <form method="POST" action="{{ route('admin.event.store') }}" enctype="multipart/form-data">
                            	@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Event name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter the event name">
                                        @error('name')
                                        	<small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="date">Event Date</label>
                                        <input class="form-control" id="date" name="date" type="date" placeholder="Enter the date of the event">
                                        @error('date')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="time">Time</label>
                                        <input class="form-control" id="time" name="time" type="time" min="00:00" max="24:00" placeholder="What time is the event?">
                                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        @error('time')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea class="form-control text-left" name="description" placeholder="A description about the event"></textarea>
                                        @error('description')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-6 form-group mb-3">
                                        <label for="start_time">Start time</label>
                                        <input class="form-control" id="start_time" type="time" name="start_time" placeholder="00:00 AM">
                                        @error('start_time')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="end_time">Stop time</label>
                                        <input class="form-control" id="end_time" type="time" name="end_time" placeholder="00:00 AM">
                                        @error('end_time')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div> --}}

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="avatar">Image</label>
                                        <div class="input-group mb-3">
										    <input class="form-control" type="file" name="avatar">
										</div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                        	<span class="ladda-label">Add event</span>
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
	<script src="/admin/dist-assets/js/plugins/dropzone.min.js"></script>
	<script src="/admin/dist-assets/js/scripts/dropzone.script.min.js"></script>
@endsection