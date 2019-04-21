@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/themify/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/student.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
        .form-control { width: 250px;}
    </style>
@endpush

@section('content')
<!--================Admission form Area =================-->
<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">
            @include('frontend.application.sidebar')
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
                        <form method="POST" id="program-form" class="was-validated" action="{{ route('application.apply.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Program Info -->

                              <div class="form-group row ">
                                  <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Applying For') }}</label>

                                  <div class="col-md-8">
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                              <input type="radio" class="form-check-input mt-10" name="level" value="1" {{ (isset($applicant->level) && $applicant->level == 1) ? "checked" : ''}} required > Undergraduate
                                         </label>
                                      </div>
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                              <input type="radio" class="form-check-input mt-10" name="level" value="2" required {{ (isset($applicant->level) && $applicant->level == 2) ? "checked" : ''}}> Postgraduate
                                         </label>
                                      </div>
                                      <span id="error-program" class="invalid-feedback" role="alert"></span>
                                  </div>
                              </div>


                              <div class="form-group row ">
                                  <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Applying Year') }}</label>

                                  <div class="col-md-8">
                                      <select name="year" id="year" class="form-control form-control-sm custom-select" required onclick="yearChange()" onclick="yearChange()">
                                            <option value="" selected>Select One</option>

                                            <option value="{{ date('Y') }}" {{ (isset($applicant->year) && $applicant->year == date('Y')) ? "selected" : ''}}>{{ date('Y') }}</option>
                                            <option value="{{ date('Y') + 1 }}" {{ (isset($applicant->year) && $applicant->year  == date('Y')+1) ? "selected" : ''}}>{{ date('Y') + 1 }}</option>

                                      </select>
                                      <div id="error-year" class="invalid-feedback" role="alert"></div>
                                  </div>
                              </div>

                              <div class="form-group row ">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                                  <div class="col-md-8">
                                      <select name="semester" id="semester" class="form-control form-control-sm custom-select" disabled required>
                                            <option value="" selected>Select One</option>
                                            <option value="1" id="spring" {{ (isset($applicant->semester) && $applicant->semester == 1) ? "selected" : ''}}>Spring</option>
                                            <option value="2" {{ (isset($applicant->semester) && $applicant->semester == 2) ? "selected" : ''}}>Summar</option>
                                            <option value="3" {{ (isset($applicant->semester) && $applicant->semester == 3) ? "selected" : ''}}>Fall</option>

                                      </select>
                                      <span id="error-semester" class="invalid-feedback" role="alert"></span>
                                  </div>

                              </div>

                              <div class="form-group row ">
                                  <label for="shift" class="col-md-4 col-form-label text-md-right">{{ __('Shift') }}</label>

                                  <div class="col-md-8">
                                      <select name="shift" id="shift" class="form-control form-control-sm custom-select" required>
                                            <option value="" selected>Select One</option>
                                            <option value="1" {{ (isset($applicant->shift) && $applicant->shift == 1) ? "selected" : ''}}>Day</option>
                                            <option value="2" {{ (isset($applicant->shift) && $applicant->shift == 2) ? "selected" : ''}}>Evening</option>

                                      </select>
                                      <span id="error-shift" class="invalid-feedback" role="alert"></span>
                                  </div>

                              </div>

                              <br>
                              <div class="col text-center">
                                  <button type="submit" name="btn-program-details" id="btn-program-details"  class="btn btn-success btn-width">Next</button>

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

$('document').ready(function () {
    yearChange();
});

function yearChange() {

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

}
</script>
@endpush
