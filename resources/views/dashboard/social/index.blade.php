@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Socials</h1>
            <ul>
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
        	{{-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-muted mt-2 mb-2">Total socials</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $socials->count() }}</p>
                    </div>
                </div>
            </div> --}}

            <div class="col-md-12">
                <h4>List of all social media handles</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card mb-4">
                    <div class="card-body">
                    	@foreach($socials as $social)
                            <div class="col-md-12">
            	                <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <p>
                                        This is the list you have got. You can edit it all at once.
                                    </p>
                                    <hr>
                                    <div class="row">
                                        @foreach($socials as $social)
                                            <div class="col-md-6 col-6">
                                                <div class="mb-4">
                                                    <p class="text-primary mb-1"><i class="i-Facebook text-16 mr-1"></i> Facebook</p><span>@ {{ $social->facebook }}</span>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="text-primary mb-1"><i class="i-Youtube text-16 mr-1"></i> Youtube</p><span>@ {{ $social->youtube }}</span>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="text-primary mb-1"><i class="i-Instagram text-16 mr-1"></i> Instagram</p><span>@ {{ $social->instagram }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="mb-4">
                                                    <p class="text-primary mb-1"><i class="i-Twitter text-16 mr-1"></i> Twitter</p><span>@ {{ $social->twitter }}</span>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="text-primary mb-1"><i class="i-Linkedin text-16 mr-1"></i> Linkedin</p><span>@ {{ $social->linkedin }}</span>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="text-primary mb-1"><i class="i-Pinterest text-16 mr-1"></i> Pinterest</p><span>@ {{ $social->pinterest }}</span>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <a href="/social/{{ $social->path() }}/edit">
                                                    <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                                        <span class="ladda-label">Edit</span>
                                                        <span class="ladda-spinner"></span>
                                                        <span class="ladda-spinner"></span>
                                                    </button>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main-content -->
    </div>
@endsection