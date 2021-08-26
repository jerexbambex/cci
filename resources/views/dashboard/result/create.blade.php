@extends('layouts.template')

@section('styles')
	<link rel="stylesheet" href="/admin/dist-assets/css/plugins/dropzone.min.css">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Add result member</h1>
            <ul>
                <li><a href="{{ route('admin.result.index') }}">All results</a></li>
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
                            <div class="card-title mb-3">Add new result</div>
                            <form method="POST" action="{{ route('admin.result.store') }}" enctype="multipart/form-data">
                            	@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Candidate's name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Adam Ademola">
                                        @error('name')
                                        	<small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Exam No.</label>
                                        <input class="form-control" id="name" name="exam_number" type="text" placeholder="AB1234567">
                                        @error('exam_number')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Exam Type</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="exam_type">
                                            <option value="">Select</option>
                                            <option value="A-Levels">A-Levels</option>
                                            <option value="UFP">UFP</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Exam Year</label>
                                        <input class="form-control text-left" name="exam_year" placeholder="{{ date('Y') - 10 }}">
                                        @error('exam_year')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 1</label>
                                        <input class="form-control text-left" name="subject_1" placeholder="Physics">
                                        @error('subject_1')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 1 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_1">
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 2</label>
                                        <input class="form-control text-left" name="subject_2" placeholder="Physics">
                                        @error('subject_2')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 2 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_2">
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 3</label>
                                        <input class="form-control text-left" name="subject_3" placeholder="Physics">
                                        @error('subject_3')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 3 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_3">
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Subject 4</label>
                                        <input class="form-control text-left" name="subject_4" placeholder="Physics">
                                        @error('subject_4')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Subject 4 Grade</label>
                                        {{-- <input class="form-control" id="title" name="exam_type" type="text" placeholder="A-Levels"> --}}
                                        <select class="form-control" name="grade_4">
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
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                        	<span class="ladda-label">Add member</span>
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