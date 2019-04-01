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
                        <span class="badge ">{{ $applications->count() }}</span>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="example">
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
                                @foreach( $applications as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
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



$( ".edit" ).click(function( event ) {
    var id = $(this).data('id');
    var update_url = location.origin + "/admin/programs/" + id;
    var url = location.origin + '/admin/programs/' + id + '/edit';
    $('.edit-programe-form').attr('action', update_url);
    $.get(url, function (data) {
        //$('#edit_dept').val(data['name']);
        $('#edit_dept').val(data['department_id']).attr("selected", "selected");
        $('#edit_name').val(data['name']);
        $('#edit_short_name').val(data['short_name']);
        //$('#edit_image').attr('src',location.origin + '/storage/category/' + data['image']);
    });
});

</script>


@endpush
