@extends('layouts.template')

@section('styles')
    <link rel="stylesheet" href="/admin/dist-assets/css/plugins/datatables.min.css">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Programme Schedules</h1>
            <ul>
                {{-- <li>Team</li> --}}
                <li>All</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
        	<div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-muted mt-2 mb-2">Total uploaded Programmes</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $allSchedules->count() }}</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-12">
                <h4>List of programmes</h4>
            </div> --}}
        </div>

        <div class="row">
        	<div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h4 class="card-title mb-3">List of programmes</h4>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 ml-auto">
                                <a href="/schedule/create" class="btn btn-rounded btn-primary btn-block mb-4">
                                    <button class="btn ripple btn-primary btn-icon m-1" type="button">
                                        <span class="ul-btn__icon"><i class="i-Add-File"></i></span>
                                        <span class="ul-btn__text">Add new</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="language_option_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="language_option_table_length">
                                            <label>Display
                                                <select name="language_option_table_length" aria-controls="language_option_table" class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> records per page
                                            </label>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div id="language_option_table_filter" class="dataTables_filter">
                                            <label>Search:
                                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="language_option_table">
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="language_option_table_paginate">
                                            {{ $schedules->appends(['sort' => 'day'])->links() }}
                                        </div>
                                    </div>
                                </div>

                                <div class="row"><div class="col-sm-12">
                                    <table class="display table table-striped table-bordered dataTable" id="language_option_table" style="width: 100%;" role="grid" aria-describedby="language_option_table_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">
                                                        Day
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 215px;">
                                                        Title
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 87px;">
                                                        Starts
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 87px;">
                                                        Ends
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 157px;">
                                                        Anchor
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 325px;">
                                                        Description
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="language_option_table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 115px;">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            @foreach($schedules as $schedule)
                                                <tr role="row" class="">
                                                    <td class="sorting_1">{{ $schedule->day }}</td>
                                                    <td>{{ $schedule->title }}</td>
                                                    <td>{{ $schedule->start_time }}</td>
                                                    <td>{{ $schedule->end_time }}</td>
                                                    <td>{{ $schedule->anchor }}</td>
                                                    <td>{{  Str::limit($schedule->description, $limit = 50, $end = '...')  }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-around text-center col-12">
                                                            <form method="POST" action="{{ route('schedule.destroy', $schedule->path()) }}">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-rounded mr-2 text-danger">
                                                                    <i class="text-danger small">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6"/></svg>
                                                                    </i>
                                                                    Delete
                                                                </button>
                                                            </form>
                                                            <a href="/schedule/{{ $schedule->path() }}/edit" class="btn btn-primary btn-rounded text-white">
                                                                <i class="text-white small">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                                                </i>
                                                                Edit
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">Day</th><th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Starts</th><th rowspan="1" colspan="1">Ends</th><th rowspan="1" colspan="1">Anchor</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Action</th></tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        {{-- <div class="dataTables_info" id="language_option_table_info" role="status" aria-live="polite">Showing page 1 of 2</div> --}}
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="language_option_table_paginate">
                                            {{ $schedules->appends(['sort' => 'day'])->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main-content -->
    </div>
@endsection

@section('scripts')
    {{-- <script src="/admin/dist-assets/js/plugins/datatables.min.js"></script> --}}
    <script src="/admin/dist-assets/js/scripts/datatables.script.min.js"></script>
@endsection