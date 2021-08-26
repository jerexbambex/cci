@extends('layouts.template')

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Inbox</h1>
            <ul>
                <li><a href="{{ route('admin.inbox.index') }}">back</a></li>
                {{-- <li>Add</li> --}}
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="inbox-main-sidebar-container sidebar-container" data-sidebar-container="main">
            <div class="inbox-main-content sidebar-content" data-sidebar-content="main">
                <!-- SECONDARY SIDEBAR CONTAINER-->
                <div class="inbox-secondary-sidebar-container box-shadow-1 sidebar-container" data-sidebar-container="secondary">
                    <div data-sidebar-content="secondary" class="sidebar-content" style="">
                        <div class="inbox-secondary-sidebar-content position-relative" style="min-height: 500px">
                            <div class="inbox-topbar box-shadow-1 perfect-scrollbar rtl-ps-none pl-3 ps" data-suppress-scroll-y="true">
                                <!-- <span class="d-sm-none">Test</span>-->
                                <a class="link-icon d-md-none" data-sidebar-toggle="main">
                                    <i class="icon-regular i-Arrow-Turn-Left"></i>
                                </a>
                                <a class="link-icon mr-3 d-md-none" data-sidebar-toggle="secondary">
                                    <i class="icon-regular mr-1 i-Left-3"></i> Inbox
                                </a>
                                <div class="d-flex">
                                    <form method="POST" action="{{ route('admin.inbox.delete', $contact->path()) }}">
                                        @method('delete')
                                        @csrf
                                      {{--   <a class="link-icon mr-3 py-3" href="/contact/">
                                            <i class="icon-regular i-Mail-Reply-All"></i> Delete
                                        </a> --}}
                                        {{-- <button class="btn btn-primary btn-icon m-1" type="button">
                                            <span class="ul-btn__icon"><i class="icon-regular i-Mail-Reply-All"></span>
                                            <span class="ul-btn__text">Delete</span>
                                        </button> --}}
                                        <button class="btn btn-default btn-icon m-1 text-danger" type="submit">
                                            <span class="ul-btn__icon"><i class="i-Mail-Reply-All"></i></span>
                                            <span class="ul-btn__text">Delete</span>
                                        </button>
                                    </form>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div>
                            <!-- EMAIL DETAILS-->
                            <div class="inbox-details perfect-scrollbar rtl-ps-none ps" data-suppress-scroll-x="true">
                                <div class="row no-gutters">
                                    <div class="col-xs-12">
                                        <p class="m-0">From: {{ $contact->name }}</p>
                                        <p class="m-0">Email: {{ $contact->email }}</p>
                                        <p class="text-12 text-muted">{{ $contact->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <h4 class="mb-3">Subject: {{ $contact->subject }}</h4>
                                <div>
                                    {!! nl2br($contact->message) !!}
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Secondary Inbox sidebar-->
                   {{--  <div class="inbox-secondary-sidebar perfect-scrollbar rtl-ps-none ps sidebar ps--active-y" data-sidebar="secondary" style="left: 0px;"><i class="sidebar-close i-Close" data-sidebar-toggle="secondary"></i>
                        @foreach($mails as $mail)
                            <div class="">
                                <a class="mail-item {{ $mail->status ? '' : 'font-weight-bold' }}" href="/contact/{{ $mail->path() }}">
                                    <div class="col-xs-6 details"><span class="name text-muted">{{ $mail->fullname }}</span>
                                        <p class="m-0">{{ $mail->subject }}</p>
                                    </div>
                                    <div class="col-xs-3 date">
                                        <span class="text-muted">{{ $mail->created_at->diffForHumans() }}</span>
                                        @if(!$mail->status)
                                            <span class="badge badge-pill badge-danger m-2">New</span>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 568px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 497px;"></div></div></div> --}}
                </div>
            </div>
            <!-- MAIN INBOX SIDEBAR-->

        </div>
    </div>
@endsection