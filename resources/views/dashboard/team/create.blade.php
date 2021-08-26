@extends('layouts.template')

@section('styles')
	<link rel="stylesheet" href="/admin/dist-assets/css/plugins/dropzone.min.css">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Add Team member</h1>
            <ul>
                <li><a href="{{ route('admin.team.index') }}">All Teams</a></li>
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
                            <div class="card-title mb-3">Add new member to the team</div>
                            <form method="POST" action="{{ route('admin.team.store') }}" enctype="multipart/form-data">
                            	@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">Full name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your first name">
                                        @error('name')
                                        	<small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Title</label>
                                        <input class="form-control" id="title" name="title" type="text" placeholder="Optional">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input class="form-control" id="exampleInputEmail1" name="email" type="email" placeholder="Enter email">
                                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        @error('email')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="role">Role</label>
                                        <input class="form-control" id="role" name="role" type="text" placeholder="Optional">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="twitter">Twitter ID</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" id="twitter" name="twitter" placeholder="cambridgeikeja">
                                        </div>

                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="facebook">Facebook ID</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" id="facebook" name="facebook" placeholder="cambridgeikeja">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="instagram">Instagram ID</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" id="instagram" name="instagram" placeholder="cambridgeikeja">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="facebook">LinkedIn</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" id="linkedin" name="linkedin" placeholder="cambridgeikeja">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">About</label>
                                        <textarea class="form-control text-left" name="description" placeholder="A bio of the new member" rows="15"></textarea>
                                        @error('description')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1">Image</label>
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