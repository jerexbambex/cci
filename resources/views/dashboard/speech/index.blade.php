@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Speeches</h1>
            <ul>
                {{-- <li>Team</li> --}}
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <!--  end of col -->
            <div class="col-md-8">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3">View and edit</h4>
                        <ul class="nav nav-pills" id="myPillTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="true"><i class="nav-icon i-Home1 mr-1"></i>Director's Speech</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Principal's Speech</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-icon-pill" data-toggle="pill" href="#contactPIll" role="tab" aria-controls="contactPIll" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Coordinator's Speech</a></li>
                        </ul>
                        <div class="tab-content" id="myPillTabContent">
                            <div class="tab-pane fade show active" id="homePIll" role="tabpanel" aria-labelledby="home-icon-pill">
                                {!! nl2br($director->body) !!}
                                <p>
                                    <a class="btn btn-primary" href="{{ route('admin.speech.director.edit', $director->path()) }}">Edit</a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profilePIll" role="tabpanel" aria-labelledby="profile-icon-pill">
                                {!! nl2br($principal->body) !!}
                                <p>
                                    <a class="btn btn-primary" href="{{ route('admin.speech.principal.edit', $principal->path()) }}">Edit</a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="contactPIll" role="tabpanel" aria-labelledby="contact-icon-pill">
                                {!! nl2br($coordinator->body) !!}
                                <p>
                                    <a class="btn btn-primary" href="{{ route('admin.speech.coordinator.edit', $coordinator->path()) }}">Edit</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  end of col -->
        </div>
    </div>
@endsection