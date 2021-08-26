@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Add a Schedule</h1>
            <ul>
                <li><a href="/schedule">Schedules</a></li>
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
                                    {{-- × --}}
                                </div>
							    {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
							@endif
                            <div class="card-title mb-3">Add new schedule</div>
                            <form method="POST" action="{{ route('schedule.update', $schedule->path()) }}" enctype="multipart/form-data">
                            	@csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="day">Which Day</label>
                                        <select class="form-control" name="day" value="{{ $schedule->day }}">
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                        </select>
                                        {{-- <input class="form-control" id="day" name="first_name" type="text" placeholder="Enter your first name"> --}}
                                        @error('day')
                                        	<small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Programme Title</label>
                                        <input class="form-control" id="title" name="title" type="text" placeholder="Enter the title of the programme" value="{{ $schedule->title }}">
                                        @error('title')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="anchor">Anchored by</label>
                                        <input class="form-control" id="anchor" name="anchor" type="text" placeholder="The presenter anchoring the programme" value="{{ $schedule->anchor }}">
                                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        @error('anchor')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea class="form-control text-left" name="description" placeholder="A description about the programme">{{ $schedule->description }}</textarea>
                                        @error('description')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="start_time">Start time</label>
                                        <input class="form-control" id="start_time" type="time" min="00:00" max="24:00" name="start_time" placeholder="00:00 AM" value="{{ $schedule->start_time }}">
                                        @error('start_time')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="end_time">Stop time</label>
                                        <input class="form-control" id="end_time" type="time" min="00:00" max="24:00" name="end_time" placeholder="00:00 AM" value="{{ $schedule->end_time }}">
                                        @error('end_time')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="priority">Priority</label>
                                        <input class="form-control" id="priority" name="priority" type="text" value="{{ $schedule->priority }}">
                                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        @error('priority')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="avatar">Image</label>
                                        <div class="input-group mb-3">
										    <input class="form-control" type="file" name="avatar">
										</div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                        	<span class="ladda-label">Update programme</span>
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