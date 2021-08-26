@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit result member</h1>
            <ul>
                <li><a href="{{ route('admin.result.index') }}">All results</a></li>
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
                            <div class="card-title mb-3">Edit {{ $result->name }}'s record</div>
                            <form method="POST" action="{{ route('admin.result.update', $result->path()) }}" enctype="multipart/form-data">
                                @method('PATCH')
                            	@csrf

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Candidate's name</label>
                                        <input class="form-control" id="name" name="name" type="text" value="{{ $result->name }}">
                                        @error('name')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Exam No.</label>
                                        <input class="form-control" id="exam_number" name="exam_number" type="text" value="{{ $result->exam_number }}">
                                        @error('exam_number')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Exam Type</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="exam_type" value="{{ $result->exam_type }}">
                                            <option value="">Select</option>
                                            <option value="A-Levels">A-Levels</option>
                                            <option value="UFP">UFP</option>
                                        </select>
                                        @error('exam_type')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Exam Year</label>
                                        <input class="form-control text-left" name="exam_year" value="{{ $result->exam_year }}">
                                        @error('exam_year')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 1</label>
                                        <input class="form-control text-left" name="subject_1" value="{{ $result->subject_1 }}">
                                        @error('subject_1')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 1 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_1" value="{{ $result->grade_1 }}" required>
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 2</label>
                                        <input class="form-control text-left" name="subject_2" value="{{ $result->subject_2 }}">
                                        @error('subject_2')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 2 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_2" value="{{ $result->grade_2 }}" required>
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 3</label>
                                        <input class="form-control text-left" name="subject_3" value="{{ $result->subject_3 }}">
                                        @error('subject_3')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 3 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_3" value="{{ $result->grade_3 }}" required>
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 4</label>
                                        <input class="form-control text-left" name="subject_4" value="{{ $result->subject_4 }}">
                                        @error('subject_4')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 4 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_4" value="{{ $result->grade_4 }}">
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1">Candidate's Image</label>
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
                            <img class="" src="{{ $result->avatar ? json_decode($result->avatar)->secure_url : '/admin/dist-assets/images/faces/Selfie.png' }}" alt="{{ $result->name }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $result->name }}</h5>
                            <p class="card-text">{{ $result->exam_type }} {{ $result->exam_year }}</p>
                            <p class="card-text">{{ $result->exam_number }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $result->subject_1 }}: {{ $result->grade_1 }}</li>
                            <li class="list-group-item">{{ $result->subject_2 }}: {{ $result->grade_2 }}</li>
                            <li class="list-group-item">{{ $result->subject_3 }}: {{ $result->grade_3 }}</li>
                            <li class="list-group-item">{{ $result->subject_4 ? $result->subject_4. ':' : '' }} {{ $result->grade_4 ? $result->grade_4 : 'No information added for forth subject' }}</li>
                        </ul>
                        {{-- <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div> --}}
                    </div>
                </div>
            </div>
        <!-- end of main-content -->
    </div>
@endsection