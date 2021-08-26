@extends('layouts.template')

@section('styles')
	<link rel="stylesheet" href="/admin/dist-assets/css/plugins/quill.bubble.min.css" />
    <link rel="stylesheet" href="/admin/dist-assets/css/plugins/quill.snow.min.css" />
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Why us</h1>
            <ul>
                <li><a href="{{ route('admin.whyus.index')}}">Why us</a></li>
                {{-- <li>Add</li> --}}
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- end of col-->
                <div class="col-md-12 mb-4">
                    <div class="card text-left">
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> {{ Session::get('message') }}
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
                            @endif
                            <h2>Full Editor</h2>
                            <p>
                                {{-- This is the about us page --}}
                            </p>
                            {{-- <div class="mx-auto col-md-8">
                                <textarea class="form-control" name="body" rows="20"></textarea>
                            </div> --}}
                            {{-- <p class="col-md-8 mx-auto">{!! nl2br(str_replace(" ", "&nbsp;", $about->body)) !!}</p> --}}
                            {{-- <h4>{{ $about->headline }}</h4> --}}
                            <p class="col-md-8 mx-auto">{!!nl2br( $about->body )!!}</p>
                            <a href="{{ route('admin.whyus.edit', $about->path()) }}" class="btn btn-primary rounded">Edit</a>
                        </div>
                    </div>
                </div>
                <!-- end of col-->
            </div>
        <!-- end of main-content -->
    </div>
@endsection

@section('scripts')
	<script src="/admin/dist-assets/js/plugins/quill.min.js"></script>
    <script src="/admin/dist-assets/js/scripts/quill.script.min.js"></script>
@endsection


