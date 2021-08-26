@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>videos</h1>
            <ul>
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
        	<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-muted mt-2 mb-2">Total videos</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $videos->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h4>List of all video media handles</h4>
            </div>
        </div>

        <div class="row">
            @foreach($videos as $video)
                {{-- <div class="card col-md-3 mb-5 mr-2">
                    <div class="mb-3">
                        <iframe src="{{ $video->url }}" class="video-stream"></iframe>
                    </div>
                    <h5 class="m-0 mb-4">{{ $video->title }}</h5>
                    <div class="d-flex justify-content-around text-center col-12 mt-3">
                        <form method="POST" action="{{ route('video.destroy', $video->path()) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-default btn-rounded text-danger">Delete</button>
                        </form>
                        <a href="/video/{{ $video->path() }}/edit" class="btn btn-primary btn-rounded text-white">Edit</a>
                    </div>
                </div> --}}
                <div class="col-md-3">
                    <div class="card mb-4 o-hidden"><iframe src="{{ $video->url }}" class="video-stream"></iframe>
                        <div class="card-body">
                            <p>{{ $video->title }}</p>
                            <div class="d-flex justify-content-around text-center col-12 mt-3">
                                <form method="POST" action="{{ route('video.destroy', $video->path()) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-default btn-rounded text-danger">Delete</button>
                                </form>
                                <a href="/video/{{ $video->path() }}/edit" class="btn btn-primary btn-rounded text-white">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        <!-- end of main-content -->
    </div>
@endsection