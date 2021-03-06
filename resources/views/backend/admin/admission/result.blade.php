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
                        Merit List
                        
                    </h2>
                </div>
                <div class="body">

                    @php
                        $users = [];
                    @endphp
                    @foreach( $programs as $program )
                        <div class="top" style="margin-bottom:15px;">
                            <h4 class="text-center"> {{ $program->name}} </h4>
                            <h5 class="text-center"> Spring- {{date('Y')}}</h5>
                        </div>

                        <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="exampleTest">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Program</th>
                                <th>Marks</th>
                                <th>id</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $count = 1;
                            @endphp

                            @foreach( $springs as $key => $spring )

                                @if( in_array($spring->id, $users)  )
                                    @continue
                                @else

                                    @foreach( $spring->programs as $data )

                                        @if( $program->id == $data->id )

                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>  {{ $spring->name}}</td>
                                            <td>  {{ $data->short_name}}</td>
                                            <td>  {{ $spring->result}}</td>
                                            <td>  {{ $spring->id}}</td>
                                        </tr>
                                        @php $count++; @endphp
                                        <?php $users[] = $spring->id; ?>

                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                        </table>

                    @endforeach


                </div>
            </div>
        </div>a
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
