@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Podcasts</h1>
            <ul>
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
        	<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-muted mt-2 mb-2">Total podcasts</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $podcasts->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 ml-auto">
                <a href="/podcast/create" class="btn btn-rounded btn-primary btn-block mb-4">
                    <button class="btn btn-primary btn-icon m-1" type="button">
                        <span class="ul-btn__icon"><i class="i-Add-File"></i></span>
                        <span class="ul-btn__text">Add new</span>
                    </button>
                </a>
            </div>
            <div class="col-md-12">
                <h4>List of all podcast</h4>
            </div>
        </div>

        <div class="row">
        	@foreach($podcasts as $podcast)
                <div class="col-md-3">
	                <div class="card mb-4 o-hidden"><img class="card-img-top" src="{{ $podcast->avatar ? $podcast->avatar : '/admin/dist-assets/images/faces/Selfie.png' }}" alt="{{ $podcast->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $podcast->title }}</h5>
                            <p class="card-text">{{ $podcast->url }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="">Owner: </span> {{ $podcast->owner }}</li>
                        </ul>
                        {{-- <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div> --}}
                        <div class="d-flex card-body justify-content-around text-center col-12">
                            <form method="POST" action="{{ route('podcast.destroy', $podcast->path()) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-default btn-rounded text-danger">Delete</button>
                            </form>
                            <a href="/podcast/{{ $podcast->path() }}/edit" class="btn btn-primary btn-rounded text-white">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- end of main-content -->
    </div>
@endsection