@extends('layouts.template')

@section('content')
	<div class="main-content">
        @if(!$subscribes->count())
            <div class="not-found-wrap text-center">
                <h1 class="text-50">Welcome</h1>
                <p class="subheading mb-3"><img src="/admin/dist-assets/images/faces/Illustration_bokcnj.png" width="20%"></p>
                <p class="mb-5 text-muted text-18">No subcribers yet.</p>
            </div>
        @else
            <div class="breadcrumb">
                <h1>subscribe</h1>
                <ul>
                    <li>subscribe</li>
                    <li>All</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
            	<div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-icon mb-4">
                        <div class="card-body text-center"><i class="i-Data-Upload"></i>
                            <p class="text-muted mt-2 mb-2">Total subcibers</p>
                            <p class="text-primary text-24 line-height-1 m-0">{{ $subscribes->count() }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4>List of all subcibers</h4>
                </div>
            </div>

            <div class="row">
            	<div class="table-responsive">
                            <div id="language_option_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row"><div class="col-md-6 col-sm-12">
                                    <table class="display table table-striped table-bordered dataTable" id="language_option_table" style="width: 100%;" role="grid" aria-describedby="language_option_table_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;">
                                                        Id
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 325px;">
                                                        Email
                                                    </th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            @foreach($subscribes as $subscribe)
                                                <tr role="row" class="">
                                                    <td class="sorting_1">{{ $subscribe->id }}</td>
                                                    <td>{{ $subscribe->email }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Email</th></tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- end of main-content -->
        @endif
    </div>
@endsection