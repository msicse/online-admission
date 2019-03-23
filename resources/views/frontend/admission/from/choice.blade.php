@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')

    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
        .input-group-append button { height: 32px;}
        input[type='file'] {
          color: transparent;
          height: 35px;

        }
        .multiselectable { width:500px; display:block; overflow: hidden; width: 100%; }
        .multiselectable select, .multiselectable div { width: 200px; float:left; }
        .multiselectable div * { display: block; margin: 0 auto; }
        .multiselectable div { display: inline; }
        .multiselectable .m-selectable-controls { margin-top: 3em; width: 50px; }
        .multiselectable .m-selectable-controls button { margin-top: 1em; }
    </style>
@endpush

@section('content')
<!--================Admission form Area =================-->
<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">
            @include('frontend.admission._sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 ">
                <div class="card">
                    <h5 class="card-header">Application Form </h5>

                    <div class="card-body addmission-form ">
                        <div id="msg" class="alert alert-danger text-center alert-custom display-n">

                        </div>
                        <!-- <div class="row">
                            <div class="col">
                                <p id="msg" class="alert alert-danger"></p>
                            </div>
                        </div> -->
                        <form method="POST" id="personal-info-form" class="was-validated" action="{{ route('admission.choice.submit') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-5">
                                    <select name="from[]" id="undo_redo" class="form-control" size="13" multiple="multiple">
                                        @foreach( $programs as $data )
                                        <option value="{{ $data->id }}"> {{ $data->name }} </option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <button type="button" id="undo_redo_undo" class="btn btn-primary btn-block">undo</button>
                                    <button type="button" id="undo_redo_rightAll" class="btn btn-default btn-block"><i class="fa fa-forward" aria-hidden="true"></i></button>
                                    <button type="button" id="undo_redo_rightSelected" class="btn btn-default btn-block"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                    <button type="button" id="undo_redo_leftSelected" class="btn btn-default btn-block"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                    <button type="button" id="undo_redo_leftAll" class="btn btn-default btn-block"><i class="fa fa-backward" aria-hidden="true"></i></button>
                                    <button type="button" id="undo_redo_redo" class="btn btn-warning btn-block">redo</button>
                                </div>

                                <div class="col-md-5">
                                    <select name="to[]" id="undo_redo_to" class="form-control" size="13" multiple="multiple"></select>
                                </div>
                            </div>
                            <div class="row mt-10">
                                <div class="col-md-4 offset-md-4 text-center  mt-10">
                                    <button type="button" class="btn btn-info btn-width" name="btn-personal-prev" id="btn-personal-prev" >Previous</button>
                                    <button type="submit" class="btn btn-success btn-width" id="form-submit"> Submit </button>
                                    <button type="button" class="btn btn-success btn-width" id="btn-t"> Test </button>
                                </div>
                            </div>
                        </form> <!-- End form -->
                   </div> <!-- End card-body -->
               </div><!--  End Card -->
           </div> <!-- End col-lg-9 -->
       </div> <!--End Row-->
    </div> <!--End Container-->
</section>
<!--================End Content Area =================-->

@endsection

@push('js')
<!-- <script src="{{ asset('frontend/pages/multiselectable.js')}}"></script> -->
<script src="{{ asset('frontend/pages/multiselect.js')}}"></script>
<script>

    $('#btn-t').on('click', function () {
        var l = $('#undo_redo_to option').length;
        if( l > 3 ) {
            $('#undo_redo_rightAll').addClass('disabled');
        }
        alert(l);
    });

    $(function() {
        $('#undo_redo').multiselect();
    });
</script>
@endpush
