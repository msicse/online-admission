@extends('layouts.backend.app')

@section('title','Admin | Roles')

@push('css')
	<!-- JQuery DataTable Css -->
    <link href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <style>
        textarea.form-control {
            border: 1px solid #ddd !important;
        }
        .form-group { padding-bottom: 0;}
    </style>
@endpush
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <button type="button" class="btn btn-primary waves-effect " data-toggle="modal" data-target="#craeateRole">
            <i class="material-icons">keyboard_backspace</i>

            <span>Back</span>
        </button>

    </div>
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-green">
                    <h2>

                        Add New Date
                        
                    </h2>
                </div>
                <div class="body">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="">Semester</label>
                                    <select id="name" name="name" class="form-control">
                                        <option value=""> -- Please select -- </option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                      <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="">Year</label>
                                    <select id="name" name="name" class="form-control">
                                        <option value="">-- Please select -- </option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="">Start Date</label>
                                    <input type="text" class="datepicker form-control" placeholder="Please choose start Date...">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                      <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="">End Date</label>
                                    <input type="text" class="datepicker form-control" placeholder="Please choose end Date...">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <input type="checkbox" id="basic_checkbox_1" class="filled-in" checked="">
                            <label for="basic_checkbox_1">Approved</label>
                            <br>
                            <input type="submit" value="Submit" class="btn btn-lg btn-primary">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
</div>
<!-- Create Role -->
<div class="modal fade" id="craeateRole" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.roles.store')}}" method="post" enctype="multipart/form-data">
                <div class="modal-header custom-modal">
                    <h4 class="modal-title" id="defaultModalLabel">Add New Date</h4>
                </div>
                <div class="modal-body">
                    @csrf

                    
                    <div class="form-group form-float">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                </div>
                            </div>
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

<!-- Edit Role -->
<div class="modal fade" id="EditRole" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="edit-role-form" method="post" enctype="multipart/form-data">
                <div class="modal-header custom-modal">
                    <h4 class="modal-title" id="defaultModalLabel">Edit Role</h4>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="">Name</label>
                            <input type="text" id="edit_name" name="name" class="form-control">

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
    var update_url = location.origin + "/admin/roles/" + id;
    var url = location.origin + '/admin/roles/' + id + '/edit';
    $('.edit-role-form').attr('action', update_url);
    $.get(url, function (data) {
        //$('#edit_dept').val(data['name']);
        $('#edit_role').val(data['role_id']).attr("selected", "selected");
        $('#edit_name').val(data['name']);
        $('#edit_email').val(data['email']);
        $('#edit_about').text(data['about']);
        $('#edit_image').attr('src',location.origin+'/storage/roles/'+ data['image']);
        //$('#edit_image').attr('src',location.origin + '/storage/category/' + data['image']);
    });
});

</script>


@endpush
