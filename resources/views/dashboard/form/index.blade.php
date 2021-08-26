@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Admission form Upload</h1>
            <ul>
                {{-- <li>Team</li> --}}
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
		
		@if($forms->count() >= 1)
			<div class="row">
				@foreach($forms as $form)
				<div class="card">
					<div class="card-header">
						{{ $form->name }}
					</div>
					<div class="card-body form-group">
						<a href="{{ route('admin.form.edit', $form->path()) }}">Change the form</a><br>
						<a href="{{ $form->avatar ? json_decode($form->avatar)->secure_url : '#' }}"> Download file</a>
					</div>
				</div>
				@endforeach
			</div>
		@else
			<a class="btn btn-primary btn-lg" href="{{ route('admin.form.create') }}">Add form</a>
		@endif
	

    </div>
 @endsection