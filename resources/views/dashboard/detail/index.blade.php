@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Details</h1>
            <ul>
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
        	{{-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-muted mt-2 mb-2">Total details</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $details->count() }}</p>
                    </div>
                </div>
            </div> --}}
            @if(!$details->count())
                <div class="col-lg-2 col-md-6 col-sm-12 ml-auto">
                    <a href="/detail/create" class="btn btn-rounded btn-primary btn-block mb-4">
                        <button class="btn btn-primary btn-icon m-1" type="button">
                            <span class="ul-btn__icon"><i class="i-Add-File"></i></span>
                            <span class="ul-btn__text">Add new</span>
                        </button>
                    </a>
                </div>
            @endif
        </div>

        <div class="row">

        </div>

        <div class="row">
            @foreach($details as $detail)
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-header"><h4>Your current details</h4></div>
                        <div class="card-body">
                            <h5 class="card-title mb-2">Address</h5>
                            <p class="card-text">{!! nl2br(str_replace(" ", "&nbsp;", $detail->address)) !!}</p>

                            <h5 class="card-title mb-2">Phone</h5>
                            <p class="card-text">{{ $detail->phone }}</p>

                            <h5 class="card-title mb-2">Email</h5>
                            <p class="card-text">{{ $detail->email }}</p>

                            <a class="btn btn-primary btn-rounded" href="/detail/{{ $detail->path() }}/edit">Edit details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- end of main-content -->
    </div>
@endsection