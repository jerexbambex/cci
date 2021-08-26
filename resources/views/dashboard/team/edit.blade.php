@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit Team member</h1>
            <ul>
                <li><a href="{{ route('admin.team.index') }}">All Teams</a></li>
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
                            <div class="card-title mb-3">Edit {{ $team->first_name }}'s record</div>
                            <form method="POST" action="{{ route('admin.team.update', $team->path()) }}" enctype="multipart/form-data">
                                @method('PATCH')
                            	@csrf

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName1">Full name</label>
                                        <input class="form-control" id="firstName1" name="name" type="text" placeholder="Enter your first name" value="{{ $team->name }}">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="title">Title</label>
                                        <input class="form-control" id="title" name="title" type="text" placeholder="Enter your last name" value="{{ $team->title }}">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input class="form-control" id="exampleInputEmail1" name="email" type="email" placeholder="Enter email" value="{{ $team->email }}">
                                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="role">Role</label>
                                        <input class="form-control" id="role" name="role" type="text" placeholder="Enter your last name" value="{{ $team->role }}">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="twitter">Twitter ID</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" name="twitter" placeholder="your twitter handle" aria-label="Username" aria-describedby="basic-addon1" value="{{ $team->twitter ? $team->twitter : 'No information added yet' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="facebook">Facebook ID</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" name="facebook" placeholder="your facebook handle" aria-label="Username" aria-describedby="basic-addon1" value="{{ $team->facebook ? $team->facebook : 'No information added yet' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="instagram">Instagram ID</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" name="instagram" placeholder="your instagram handle" aria-label="Username" aria-describedby="basic-addon1" value="{{ $team->instagram ? $team->instagram : 'No information added yet' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="linkedin">LinkedIN</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                                            <input class="form-control" type="text" name="linkedin" placeholder="your linkedin handle" aria-label="Username" aria-describedby="basic-addon1" value="{{ $team->linkedin ? $team->linkedin : 'No information added yet' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">About</label>
                                        <textarea class="form-control text-left" name="description" placeholder="A short bio description the new member" rows="10">{{ $team->description }}</textarea>
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
                    <div class="card mb-4 o-hidden"><img class="card-img-top" src="{{ $team->avatar ? json_decode($team->avatar)->secure_url : '/admin/dist-assets/images/faces/Selfie.png' }}" alt="{{ $team->first_name }} {{ $team->last_name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $team->first_name }} {{ $team->last_name }}</h5>
                            <p class="card-text">{{ $team->about }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="">Email: </span> {{ $team->email }}</li>
                            <li class="list-group-item">Twitter: {{ $team->twitter ? '@'.$team->twitter : 'No information added yet' }}</li>
                            <li class="list-group-item">Facebook: {{ $team->facebook ? '@'.$team->facebook : 'No information added yet' }}</li>
                            <li class="list-group-item">Instagram: {{ $team->instagram ? '@'.$team->instagram : 'No information added yet' }}</li>
                        </ul>
                        {{-- <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div> --}}
                    </div>
                </div>
            </div>
        <!-- end of main-content -->
    </div>
@endsection