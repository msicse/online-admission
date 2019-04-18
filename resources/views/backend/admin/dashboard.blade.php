@extends('layouts.backend.app')

@section('title','Admin | Dashboard')

@section('content')
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">Total Applications</div>
                    <div class="number count-to" data-from="0" data-to="{{ $applications->count() }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">Approved Applications</div>
                    <div class="number count-to" data-from="0" data-to="{{ $approved }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">library_books</i>
                </div>
                <div class="content">
                    <div class="text">Pending Applications</div>
                    <div class="number count-to" data-from="0" data-to="{{ $pendings->count() }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">Total Views</div>
                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-blue-grey hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">view_comfy</i>
                </div>
                <div class="content">
                    <div class="text">Departments</div>
                    <div class="number count-to" data-from="0" data-to="{{ $departments }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
            <div class="info-box bg-brown hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">label</i>
                </div>
                <div class="content">
                    <div class="text">Programs</div>
                    <div class="number count-to" data-from="0" data-to="{{ $programs }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
            
            <div class="info-box bg-lime hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">fiber_new</i>
                </div>
                <div class="content">
                    <div class="text">Applications Today</div>
                    <div class="number count-to" data-from="0" data-to="{{ $newApplications->count() }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>

        </div>
        <!-- Pending Applications -->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="card">
                <div class="header">
                    <h2>Pending Applications</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                            <tr>
                                <th>S.L</th>
                                <th>Name</th>
                                <th>Appling For</th>
                                <th>Semester</th>
                                <th>Year</th>
                                <th>Shift</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($pendings as $key => $pending)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pending->name }}</td>
                                    <td> {{ ($pending->level == 1 ) ? 'Under Graduate' : 'Post Graduate'  }}</td>
                                    
                                    <td>
                                        {{ ($pending->semester == 1) ? 'Spring' : '' }}
                                        {{ ($pending->semester == 2) ? 'Summer' : '' }}
                                        {{ ($pending->semester == 3) ? 'Fall' : '' }}
                                    </td>
                                    <td>{{ $pending->year }}</td>
                                    <td>
                                         {{ ($pending->shift == 1) ? 'Day' : 'Evening'}}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.applications.show',$pending->id)}}" class="btn btn-primary">view</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Pending Applications -->
    </div>
@endsection

@push('js')
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/morrisjs/morris.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <script src="{{ asset('backend/js/pages/index.js') }}"></script>
@endpush
