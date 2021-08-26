@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit Podcast</h1>
            <ul>
                <li><a href="/podcast">Podcast</a></li>
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
                            <form method="POST" action="{{ route('podcast.update', $podcast->path()) }}" enctype="multipart/form-data">
                                @method('patch')
                            	@csrf

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName1">Title</label>
                                        <input class="form-control" id="firstName1" name="title" type="text" value="{{ $podcast->title }}">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="lastName1">URL</label>
                                        <input class="form-control" id="lastName1" name="url" type="text" value="{{ $podcast->url }}">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="exampleInputEmail1">Owner</label>
                                        <input class="form-control" id="exampleInputEmail1" name="owner" type="text" value="{{ $podcast->owner }}">
                                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1">Image</label>
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
                    <div class="card mb-4 o-hidden"><img class="card-img-top" src="{{ $podcast->avatar ? $podcast->avatar : '/admin/dist-assets/images/faces/Selfie.png' }}" alt="{{ $podcast->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $podcast->title }}</h5>
                            <p class="card-text">{{ $podcast->url }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="">Owner: </span> {{ $podcast->owner }}</li>
                            {{-- <li class="list-group-item">Instagram: </li> --}}
                        </ul>
                        {{-- <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div> --}}
                    </div>
                </div>
            </div>
        <!-- end of main-content -->
    </div>
@endsection