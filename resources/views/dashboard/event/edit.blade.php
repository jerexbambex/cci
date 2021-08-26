@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit event</h1>
            <ul>
                <li><a href="{{ route('admin.event.index') }}">event</a></li>
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
                            <div class="card-title mb-3">Edit event</div>
                            <form method="POST" action="{{ route('admin.event.update', $event->path()) }}" enctype="multipart/form-data">
                                @method('patch')
                            	@csrf

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Event name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter the event name" value="{{ $event->name }}">
                                        @error('name')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="date">Event Date</label>
                                        <input class="form-control" id="date" name="date" type="date" placeholder="Enter the date of the event" value="{{ $event->date }}">
                                        @error('date')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="time">Time</label>
                                        <input class="form-control" id="time" name="time" type="time" min="00:00" max="24:00" placeholder="What time is the event?" value="{{ $event->time }}">
                                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        @error('time')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea class="form-control text-left" name="description" placeholder="A description about the event">{{ $event->description }}</textarea>
                                        @error('description')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="avatar">Image</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="file" name="avatar" value="{{ $event->avatar }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                            <span class="ladda-label">Update event</span>
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
                    <div class="card mb-4 o-hidden"><img class="card-img-top" src="{{ $event->avatar ? json_decode($event->avatar)->secure_url : '/admin/dist-assets/images/faces/Selfie.png' }}" alt="{{ $event->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="">Date: </span> {{ $event->date }}</li>
                            <li class="list-group-item">Time: {{ $event->time }}</li>
                        </ul>
                        {{-- <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div> --}}
                    </div>
                </div>
            </div>
        <!-- end of main-content -->
    </div>
@endsection