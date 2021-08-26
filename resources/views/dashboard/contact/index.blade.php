@extends('layouts.template')

@section('content')
 	@if(!$mails->count())
        <div class="not-found-wrap text-center">
            <h1 class="text-50">Welcome</h1>
            <p class="subheading mb-3"><img src="/admin/dist-assets/images/faces/Illustration_bokcnj.png" width="20%"></p>
            <p class="mb-5 text-muted text-18">No mails yet.</p>
        </div>
    @else
		<div class="main-content">
	        <div class="breadcrumb">
	            <h1>Inbox</h1>
	            <ul>
	                <li><a href="/">Dashboard</a></li>
	                {{-- <li>Add</li> --}}
	            </ul>
	        </div>
	        <div class="separator-breadcrumb border-top"></div>

            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Welcome back {{ Auth::user()->first_name }}</h4>
                    {{-- <p>Use <code>.table-striped</code> to add zebra-striping to any table rowwithin the <code>&lt;tbody&gt;</code>.</p> --}}
                    <p>You have {{ $mails->count() }} messages in your inbox.</p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">From</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mails as $mail)
                                    <tr class="{{ $mail->status ? '' : 'font-weight-bold text-dark' }}">
                                        <th scope="row"><a href="{{ route('admin.inbox.show', $mail->path()) }}">{{ Str::limit($mail->name, 1) }}</a></th>
                                        <td><a href="{{ route('admin.inbox.show', $mail->path()) }}">{{ $mail->name }}</a></td>
                                        <td><a href="{{ route('admin.inbox.show', $mail->path()) }}">{{ $mail->subject }}</a></td>
                                        <td><a href="{{ route('admin.inbox.show', $mail->path()) }}">{{ $mail->email }}</a></td>
                                        <td><a href="{{ route('admin.inbox.show', $mail->path()) }}">{{ $mail->created_at->diffForHumans() }}</a></td>
                                        <td>
                                            @if(!$mail->status)
                                                <a href="{{ route('admin.inbox.show', $mail->path()) }}">
                                                    <span class="badge badge-success">New</span>
                                                </a>
                                            @else
                                                <a class="small" href="{{ route('admin.inbox.show', $mail->path()) }}">
                                                    Read
                                                </a>
                                            @endif
                                        </td>
                                        <td class="form-inline">
                                            <a class="text-success mr-2" href="{{ route('admin.inbox.show', $mail->path()) }}"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                            <form class="px-5" method="POST" action="{{ route('admin.inbox.delete', $mail->path()) }}">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" type="submit"><i class="nav-icon i-Close-Window font-weight-bold"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

	    </div>
	@endif
@endsection