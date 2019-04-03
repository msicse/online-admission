@extends('layouts.backend.app')

@section('title','Admin | Applications')

@push('css')
	<!-- JQuery DataTable Css -->
    <link href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <style>
        .img-thumbnail { height: 100px;}
    </style>

@endpush
@section('content')
<div class="container-fluid">

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Applications
                        <span class="badge ">{{ $summers->count() }}</span>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Semester</th>
                                    <th>Shift</th>
                                    <th>Year</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Semester</th>
                                    <th>Shift</th>
                                    <th>Year</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach( $summers as $key => $data)

                                @if( $data->year == date('Y'))
                                <tr>
                                    <td>{{ $key + 1 }} {{ date('Y') }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        {{ ($data->level == 1 ) ? 'Under Graduate' : '' }}
                                        {{ ($data->level == 2 ) ? 'Post Graduate' : '' }}
                                    </td>
                                    <td>
                                        {{ ($data->semester == 1) ? 'Spring' : '' }}
                                        {{ ($data->semester == 2) ? 'Summer' : '' }}
                                        {{ ($data->semester == 3) ? 'Fall' : '' }}
                                    </td>
                                    <td>
                                        {{ ($data->shift == 1) ? 'Day' : ''}}
                                        {{ ($data->level == 2) ? 'Evening' : ''}}
                                    </td>

                                    <td>{{ $data->year }}</td>
                                    <td> <img src="{{ asset('storage/admission/'.$data->image) }}" class="img-thumbnail" height="100"> </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.applications.show',$data->id) }}" class="btn btn-success waves-effect " >
                                            <i class="material-icons">visibility</i>
                                        </a>


                                    </td>
                                </tr>

                                @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
</div>


@endsection

@push('js')
	<!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

	<script src="{{ asset('backend/js/pages/tables/jquery-datatable.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#example').dataTable( {
            "pageLength": 20
        } );
    } );

</script>


@endpush
