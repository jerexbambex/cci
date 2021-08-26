@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit social</h1>
            <ul>
                <li><a href="/social">Socials</a></li>
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
                            <div class="card-title mb-3">Edit record</div>
                            <form method="POST" action="{{ route('social.update', $social->path()) }}">
                                @method('patch')
                            	@csrf

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Youtube</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" placeholder="Youtube" name="youtube" value="{{ $social->youtube }}">
                                        </div>
                                        @error('youtube')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Facebook</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" placeholder="Facebook" name="facebook" value="{{ $social->facebook }}">
                                        </div>
                                        @error('facebook')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Instagram</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" placeholder="Instagram" name="instagram" value="{{ $social->instagram }}">
                                        </div>
                                        @error('instagram')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Twitter</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" placeholder="Twitter" name="twitter" value="{{ $social->twitter }}">
                                        </div>
                                        @error('twitter')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Linkedin</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" placeholder="Linkedin" name="linkedin" value="{{ $social->linkedin }}">
                                        </div>
                                        @error('linkedin')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Pinterest</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" placeholder="Pinterest" name="pinterest" value="{{ $social->pinterest }}">
                                        </div>
                                        @error('pinterest')
                                            <small class="form-control-feedback alert-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                            <span class="ladda-label">Update</span>
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