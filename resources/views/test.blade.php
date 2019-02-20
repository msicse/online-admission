@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
@endpush

@section('content')
<!--================Finance Area =================-->
<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">
            @include('frontend.admission._sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 ">
                <div class="card">
                    <h5 class="card-header">Application Form ( Step- 2 )</h5>

                    <div class="card-body addmission-form ">
                        <div class="alert alert-danger text-center alert-custom">
                            All fields aren't be empty
                        </div>
                        <form method="POST" action="{{ route('admission.application.form.submit') }}" enctype="multipart/form-data">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                  <li class="nav-item">
                                    <a class="nav-link active" id="program-details-tab" data-toggle="tab" href="#program-details" role="tab" aria-controls="home" aria-selected="true">Applying For</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                  </li>
                                </ul>


                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="program-details" role="tabpanel" aria-labelledby="home-tab">
                                      <div class="form-group row ">
                                          <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                                          <div class="col-md-8">
                                              <select name="program" id="program" class="custom-select custom-select-sm" size="5">
                                                    <option value="0" selected>Select One</option>
                                                    <option value="1">B.Sc. in Textile Engg. (Regular)</option>
                                                    <option value="11">B.Sc. in Textile Engg. (Diploma Holders)</option>
                                                    <option value="2">B.Sc. in EEE (Regular)</option>
                                                    <option value="21">B.Sc. in EEE (Diploma Holders)</option>
                                                    <option value="3">B.Sc. in Civil Engg. (Regular)</option>
                                                    <option value="31">B.Sc. in Civil Engg. (Diploma Holders)</option>
                                                    <option value="4">B.Sc. in CSE (Regular)</option>
                                                    <option value="41">B.Sc. in CSE (Diploma Holders)</option>
                                                    <option value="5">B.Sc. in MIPE (Regular)</option>
                                                    <option value="51">B.Sc. in MIPE (Diploma Holders)</option>
                                              </select>
                                              <span id="error-program" class="" role="alert"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row ">
                                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                                          <div class="col-md-8">
                                              <select name="semester" id="semester" class="custom-select custom-select-sm" size="5">
                                                    <option selected>Select One</option>
                                                    <option value="1">Spring</option>
                                                    <option value="2">Summar</option>
                                                    <option value="3">Fall</option>

                                              </select>
                                              <span id="error-semester" class="invalid-feedback" role="alert"></span>
                                          </div>

                                      </div>
                                      <div class="form-group row ">
                                          <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Applying Year') }}</label>

                                          <div class="col-md-8">
                                              <select name="year" id="year" class="custom-select custom-select-sm" size="5">
                                                    <option selected>Select One</option>

                                                    <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                                    <option value="{{ date('Y') + 1 }}">{{ date('Y') + 1 }}</option>
                                                    <option value="{{ date('Y') + 2 }}">{{ date('Y') + 2 }}</option>
                                              </select>
                                              <span id="error-year" class="invalid-feedback" role="alert"></span>
                                          </div>
                                      </div>

                                      <br>
                                      <div class="col text-center">
                                          <button type="button" name="btn-program-details" id="btn-program-details"  class="btn btn-info ">Next</button>
                                      </div>
                                  </div>
                                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                </div>
                        </form>
                   </div>
               </div><!--  End Card -->
           </div>
       </div> <!--End Row-->
    </div> <!--End Container-->
</section>
<!--================End Finance Area =================-->

@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#btn-program-details').click(function () {
            var error_program = '';
            var error_year = '';
            var error_semester = '';

            if ( $.isNumeric($.trim($('#program').val()))  > 0 ) {
                alert('empty');
                error_program = 'Program is Required';
                alert
                $('#error_program').text(error_program);
                //$('#email').addClass('has-error');

            }else {
                alert($('#program').val());
            }
        });
    });
</script>
@endpush
