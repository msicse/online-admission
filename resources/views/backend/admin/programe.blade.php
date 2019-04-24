@extends('layouts.backend.app')

@section('title','Admin | Programs')

@push('css')
	<!-- JQuery DataTable Css -->
    <link href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

@endpush
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <button type="button" class="btn btn-primary waves-effect " data-toggle="modal" data-target="#craeatePrograme">
            <i class="material-icons">add</i>

            <span>Add New Program</span>
        </button>

    </div>
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-green">
                    <h2>
                        All Programes
                        <span class="badge ">{{ $programs->count() }}</span>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Program Name</th>
                                    <th>Department</th>
                                    <th>Short Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Program Name</th>
                                    <th>Department</th>
                                    <th>Short Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach( $programs as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->department->name }}</td>
                                    <td>{{ $data->short_name }}</td>
                                    <td>{{ $data->slug }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success waves-effect " data-toggle="modal" data-target="#">
                                            <i class="material-icons">visibility</i>
                                        </button>

                                        <button type="button" class="btn btn-primary waves-effect  edit" data-toggle="modal" data-target="#EditPrograme" data-id="{{ $data->id }}">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-danger waves-effect"
                                                onclick="if(confirm('Are You sure want To Delete?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $data->id }}').submit();
                                                } else {
                                                event.preventDefault();
                                                }" >
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <form id="delete-form-{{ $data->id }}" style="display: none;" action="{{  route('admin.programs.destroy',$data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

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
    </div>
    <!-- #END# Exportable Table -->
</div>
<!-- Create Programe -->
<div class="modal fade" id="craeatePrograme" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.programs.store')}}" method="post" enctype="multipart/form-data">
                <div class="modal-header custom-modal">
                    <h4 class="modal-title" id="defaultModalLabel">Add New Programe</h4>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group form-float">

                        <label class="form-label">Level</label>

                        <select name="level" class="form-control show-tick form-line">
                            <option value="">-- Please select --</option>
                            <option value="1" >Undergraduate</option>
                            <option value="2" >Postgraduate</option>
                        </select>
                    </div>
                    <div class="form-group form-float">

                        <label class="form-label">Department</label>

                        <select name="department" class="form-control show-tick form-line">
                            <option value="">-- Please select --</option>

                            @foreach( $departments as $data )

                            <option value="{{ $data->id }}" >{{ $data->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" id="sname" name="name" class="form-control">
                            <label class="form-label">Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" id="short_name" name="short_name" class="form-control">
                            <label class="form-label">Short Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" id="seat" name="seat" class="form-control">
                            <label class="form-label">Number of Seat</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Programe -->
<div class="modal fade" id="EditPrograme" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="edit-programe-form" method="post" enctype="multipart/form-data">
                <div class="modal-header custom-modal">
                    <h4 class="modal-title" id="defaultModalLabel">Edit Programe</h4>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group form-float">

                        <label class="form-label">Department</label>

                        <select name="department" id="edit_dept" class="form-control show-tick form-line">
                            <option value="">-- Please select --</option>

                            @foreach( $departments as $data )

                            <option value="{{ $data->id }}" >{{ $data->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="">Programe Name</label>
                            <input  type="text" id="edit_name" name="name" value="" class="form-control">

                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="">Short Name</label>
                            <input type="text" id="edit_short_name" name="short_name" class="form-control">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect">Save Change</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
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
