@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
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
                        <form method="POST" id="program-form" class="was-validated" action="{{ route('admission.apply.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Program Info -->

                              <div class="form-group row ">
                                  <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Applying For') }}</label>

                                  <div class="col-md-8">
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                              <input type="radio" class="form-check-input mt-10" name="degree" value="1" required> Undergraduate
                                         </label>
                                      </div>
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                              <input type="radio" class="form-check-input mt-10" name="degree" value="2" required> Postgraduate
                                         </label>
                                      </div>
                                      <span id="error-program" class="invalid-feedback" role="alert"></span>
                                  </div>
                              </div>
                              <div class="form-group row ">
                                  <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                                  <div class="col-md-8">
                                      <select name="porgram" id="program" class="form-control form-control-sm custom-select" required>
                                            <option value="" selected>Select One</option>
                                            @foreach( $programs as $data )
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach

                                      </select>
                                      <span id="error-program" class="invalid-feedback" role="alert"></span>
                                  </div>
                              </div>

                              <div class="form-group row ">
                                  <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Applying Year') }}</label>

                                  <div class="col-md-8">
                                      <select name="year" id="year" class="form-control form-control-sm custom-select" required>
                                            <option value="" selected>Select One</option>

                                            <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                            <option value="{{ date('Y') + 1 }}">{{ date('Y') + 1 }}</option>

                                      </select>
                                      <div id="error-year" class="invalid-feedback" role="alert"></div>
                                  </div>
                              </div>

                              <div class="form-group row ">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                                  <div class="col-md-8">
                                      <select name="semester" id="semester" class="form-control form-control-sm custom-select" disabled required>
                                            <option value="" selected>Select One</option>
                                            <option value="1" id="spring">Spring</option>
                                            <option value="2">Summar</option>
                                            <option value="3">Fall</option>

                                      </select>
                                      <span id="error-semester" class="invalid-feedback" role="alert"></span>
                                  </div>

                              </div>

                              <div class="form-group row ">
                                  <label for="shift" class="col-md-4 col-form-label text-md-right">{{ __('Shift') }}</label>

                                  <div class="col-md-8">
                                      <select name="shift" id="shift" class="form-control form-control-sm custom-select" required>
                                            <option value="" selected>Select One</option>
                                            <option value="1" >Day</option>
                                            <option value="2">Evening</option>

                                      </select>
                                      <span id="error-shift" class="invalid-feedback" role="alert"></span>
                                  </div>

                              </div>

                              <br>
                              <div class="col text-center">
                                  <button type="button" name="btn-program-details" id="btn-program-details"  class="btn btn-success btn-width">Next</button>

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
<script>

window.scrollTo(0,document.querySelector(".container").scrollHeight);

    $(document).ready(function () {

        // alert($('#year option').find('[value="'+1+'"]'));
        // n = s.closest(".nice-select");
        //     n.find("data-id").removeClass("selected"), s.addClass("selected");


        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
        var alphaRegex = /^[a-zA-Z ]*$/;
        var phoneNumber = /[0-9-()+]{3,20}/;
        //var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/;
        //var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/;
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        var strings = /^[0-9a-zA-Z,. @_-]+$/;
        var address = /^[0-9a-zA-Z,-. #@_-]+$/;
        var password = /^[a-zA-Z0-9_-]{6,15}$/;
        var token = $("input[name='_token']").val();
        var uEmail = '';


        // Submit Program Details form
        $('#btn-program-details').click(function () {
            var error_program = '';
            var error_year = '';
            var error_semester = '';
            var program = $('#program').val();
            var semester = $('#semester').val();
            var year = $('#year').val();

            if ( $.trim($('#program').val()) == '' ) {

                error_program = 'Program is Required';
                $('#error-program').text(error_program);
                $('#program').addClass('is-invalid');

            }else {
                if (!numberRegex.test(program) ){
                    error_program = 'Program must be a number';
                    $('#error-program').text(error_program);
                }else {
                    error_program = '';
                    $('#error-program').text(error_program);
                    $('#program').removeClass('is-invalid');
                }

            }

            if ( $.trim($('#semester').val()) == '' ) {

                error_semester = 'Semester is Required';
                $('#error-semester').text(error_semester);
                $('#semester').addClass('is-invalid');

            }else {
                if (!numberRegex.test(semester) ){
                    error_semester = 'Semester must be a number';
                }else {
                    error_semester = '';
                    $('#error-semester').text(error_semester);
                    $('#semester').removeClass('is-invalid');
                }

            }
            if ( $.trim($('#year').val()) == '' ) {

                error_year = 'Year is Required';
                $('#error-year').text(error_year);
                $('#year').addClass('is-invalid');

            }else {
                if (!numberRegex.test(year) ){
                    error_year = 'Year must be a number';
                }else {
                    error_year = '';
                    $('#error-year').text(error_program);
                    $('#year').removeClass('is-invalid');
                }

            }

            if ( error_year != '' || error_program != '' || error_semester != '') {
                return false;
            } else {
                $('#program-form').submit();
            }

        });

        // Check Year Condition
        $('#year').on('change', function () {

            var d = new Date();
            var month = d.getMonth();
            var year = d.getFullYear();

            if ( $('#year').val() !=  '') {
                $('#semester').removeAttr('disabled');
            } else {
                $('#semester').attr('disabled', 'disabled');
            }

            if ( $('#year').val() == year ) {

                if( month >= 0 && month <= 3 ) {
                    //alert(month);
                    $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+2+'"]').removeAttr('disabled');
                    $('#semester').find('option[value="'+3+'"]').removeAttr('disabled');

                } else if ( month >= 4 && month <= 7 ) {
                    $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+3+'"]').removeAttr('disabled');
                } else {
                    $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+3+'"]').attr('disabled', 'disabled');
                }
            } else if( $('#year').val() == year + 1 ) {

                $('#semester').find('option[value="'+1+'"]').removeAttr('disabled');
                $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
                $('#semester').find('option[value="'+3+'"]').attr('disabled', 'disabled');
            }

        });


    });
</script>
@endpush
