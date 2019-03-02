@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
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
                        <div class="alert alert-danger text-center alert-custom">
                            All fields aren't be empty
                        </div>
                        <form method="POST" id="apply-form" class="was-validated" action="{{ route('admission.application.form.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <!-- Tab List -->
                                <li class="nav-item">
                                    <a class="nav-link active readonly" id="program-details-list" data-toggle="tab" href="#program-details-tab" role="tab" aria-controls="program-details-tab" aria-selected="true"> Applying For </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="verify-details-list" data-toggle="tab" href="#verify-details-tab" role="tab" aria-controls="verify-details-tab" aria-selected="false">Academic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="personal-details-list" data-toggle="tab" href="#personal-details-tab" role="tab" aria-controls="personal-details-tab" aria-selected="false">Personal Information</a>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content" id="myTabContent">
                                <!-- Program Info -->
                                  <div class="tab-pane fade show custom-tab active" id="program-details-tab" role="tabpanel" aria-labelledby="program-details-list">
                                      <div class="form-group row ">
                                          <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                                          <div class="col-md-8">
                                              <select name="program" id="program" class="form-control form-control-sm custom-select" required>
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
                                              <select name="year" id="year" class="form-control form-control-sm custom-select">
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
                                              <select name="semester" id="semester" class="form-control form-control-sm custom-select" disabled>
                                                    <option value="" selected>Select One</option>
                                                    <option value="1" id="spring">Spring</option>
                                                    <option value="2">Summar</option>
                                                    <option value="3">Fall</option>

                                              </select>
                                              <span id="error-semester" class="invalid-feedback" role="alert"></span>
                                          </div>

                                      </div>
                                      <br>
                                      <div class="col text-center">
                                          <button type="button" name="btn-program-details" id="btn-program-details"  class="btn btn-success btn-width">Next</button>

                                      </div>
                                  </div> <!-- End Program Info Tab -->
                                  <!-- Verify Info -->
                                  <div class="tab-pane fade custom-tab" id="verify-details-tab" role="tabpanel" aria-labelledby="verify-details-list">
                                      <div class="row">
                                          <div class="col">
                                              <p id="msg" class="alert alert-danger"></p>
                                          </div>
                                      </div>
                                      <div class="row">

                                          <div class="col-md-3 offset-md-2 text-center v-align-middle">
                                              <strong>SSC / Equivalent Degree</strong>

                                          </div>

                                          <div class="col-md-5">
                                              <div class="form-group row">
                                                  <label for="ssc_roll" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="ssc_roll" type="text" class="form-control form-control-sm" name="ssc_roll" value="{{ old('ssc_roll') }}" required autofocus>
                                                      <span id="error_ssc_roll" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('ssc_roll'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('ssc_roll') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="ssc_reg" class="col-md-4 col-form-label text-md-right">{{ __('Reg. No.') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="ssc_reg" type="text" class="form-control form-control-sm" name="ssc_reg" value="{{ old('ssc_reg') }}" required autofocus>
                                                      <span id="error_ssc_reg" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('ssc_reg'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('ssc_reg') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="ssc_year" class="col-md-4 col-form-label text-md-right">{{ __('Passing Year') }}</label>

                                                  <div class="col-md-8">
                                                      <select name="ssc_year" id="ssc_year" class="form-control form-control-sm custom-select"  required autofocus>
                                                            <option value="" selected>None</option>
                                                            @for( $i = date('Y'); $i > 2008 ; $i -- )
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor

                                                      </select>
                                                      <span id="error_ssc_year" class="invalid-feedback" role="alert"></span>
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="ssc_board" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>

                                                  <div class="col-md-8">
                                                      <select name="ssc_board" id="ssc_board" class="form-control form-control-sm custom-select" required autofocus>
                                                            <option value="" selected>Select One</option>
                                                            <option value="barisal">Barisal</option>
                                  						  <option value="chittagong">Chittagong</option>
                                  						  <option value="comilla">Comilla</option>
                                                            <option value="dhaka">Dhaka</option>
                                  						  <option value="dinajpur">Dinajpur</option>
                                  						  <option value="jessore">Jessore</option>
                                                            <option value="Rajshahi">Rajshahi</option>
                                                            <option value="sylhet">Sylhet</option>
                                                            <option value="madrasah">Madrasah</option>
                                  						  <option value="tec">Technical</option>
                                  						  <option value="dibs">DIBS(Dhaka)</option>
                                                      </select>
                                                      <span id="error_ssc_board" class="invalid-feedback" role="alert"></span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="dropdown-divider"></div>
                                      <div class="row">
                                          <div class="col-md-3 offset-md-2 text-center v-align-middle">
                                              <strong> HSC / Diploma</strong>
                                          </div>
                                          <div class="col-md-5">
                                              <div class="form-group row">
                                                  <label for="hsc_roll" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="hsc_roll" type="text" class="form-control form-control-sm custom-select" name="hsc_roll" value="{{ old('hsc_roll') }}" required autofocus>
                                                      <span id="error_hsc_roll" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('hsc_roll'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('hsc_roll') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="hsc_reg" class="col-md-4 col-form-label text-md-right">{{ __('Reg. No.') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="hsc_reg" type="text" class="form-control form-control-sm" name="hsc_reg" value="{{ old('hsc_reg') }}" required autofocus>
                                                      <span id="error_hsc_reg" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('hsc_reg'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('hsc_reg') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="hsc_year" class="col-md-4 col-form-label text-md-right">{{ __('passing Year') }}</label>

                                                  <div class="col-md-8">
                                                      <select name="hsc_year" id="hsc_year" class="form-control form-control-sm custom-select"  required autofocus>
                                                            <option value="" selected>Select One</option>
                                                            @for( $i = date('Y'); $i > 2008 ; $i -- )
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor

                                                      </select>
                                                      <span id="error_hsc_year" class="invalid-feedback" role="alert"></span>
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="hsc_board" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>
                                                  <div class="col-md-8">
                                                        <select name="hsc_board" id="hsc_board" class="form-control form-control-sm custom-select" required autofocus >
                                                            <option value="" selected>Select One</option>
                                                            <option value="barisal">Barisal</option>
                                                            <option value="chittagong">Chittagong</option>
                                                            <option value="comilla">Comilla</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="dinajpur">Dinajpur</option>
                                                            <option value="jessore">Jessore</option>
                                                            <option value="Rajshahi">Rajshahi</option>
                                                            <option value="sylhet">Sylhet</option>
                                                            <option value="madrasah">Madrasah</option>
                                                            <option value="tec">Technical</option>
                                                            <option value="dibs">DIBS(Dhaka)</option>
                                                        </select>
                                                        <span id="error_hsc_board" class="invalid-feedback" role="alert"></span>
                                                  </div>


                                              </div>
                                              <br>
                                              <div class="col text-center">
                                                  <button type="button" name="btn-verify-prefious" id="btn-verify-prefious"  class="btn btn-info btn-width">Previous</button>
                                                  <button type="button" name="btn-verify-next" id="btn-verify-next"  class="btn btn-success  btn-width">Next</button>

                                              </div>
                                          </div>
                                        </div>
                                  </div> <!-- End Verify Info Tab -->
                                  <!-- Personal Info -->
                                  <div class="tab-pane fade custom-tab" id="personal-details-tab" role="tabpanel" aria-labelledby="personal-details-list">

                                      <div class="row">
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="phone" type="text" class="form-control form-control-sm" name="phone" value="{{ old('phone') }}" required autofocus>
                                                      <span id="error_phone" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('phone'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('phone') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="email" type="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}" required autofocus>
                                                      <span id="error_email" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('email'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('email') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                       </div>

                                      <div class="row">
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="guardian" class="col-md-4 col-form-label text-md-right">{{ __('Guardian Name') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="gname" type="text" class="form-control form-control-sm" name="guardian" value="{{ old('roll') }}" required autofocus>
                                                      <span id="error_gname" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('guardian'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('guardian') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="relation" class="col-md-4 col-form-label text-md-right">{{ __('Relation') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="grelation" type="text" class="form-control form-control-sm" name="relation" value="{{ old('roll') }}" required autofocus>
                                                      <span id="error_grelation" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('relation'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('relation') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                       </div>

                                      <div class="row">
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="present_address" class="col-md-4 col-form-label text-md-right">{{ __('Present Address') }}</label>

                                                  <div class="col-md-8">
                                                      <textarea name="present_address"class="form-control" id="present" rows="3"></textarea>
                                                      <span id="error_present" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('present_address'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('present_address') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="parmanent_address" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                                                  <div class="col-md-8">
                                                      <textarea name="parmanent_address" class="form-control" id="permanent" rows="3"></textarea>
                                                      <span id="error_permanent" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('parmanent_address'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('parmanent_address') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                       </div>

                                      <div class="row">
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="nationality" type="text" class="form-control form-control-sm" name="nationality" value="{{ old('nationality') }}" required autofocus>
                                                      <span id="error_nationality" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('nationality'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('nationality') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                  <div class="col-md-8">
                                                      <input id="password" type="password" class="form-control form-control-sm" name="password" value="{{ old('roll') }}" required autofocus>
                                                      <span id="error_pass" class="invalid-feedback" role="alert"></span>
                                                      @if ($errors->has('password'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('password') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                       </div>

                                      <div class="row">
                                          <div class="col">
                                              <div class="form-group row ">
                                                  <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                                                  <div class="col-md-4">
                                                      <!-- <div class="custom-file">
                                                          <input type="file" name="image" class="custom-file-input" id="image" aria-describedby="image">
                                                          <label class="custom-file-label" for="image">Choose Image</label>
                                                       </div>
                                                       <span id="error_image" class="invalid-feedback" role="alert"></span> -->
                                                       <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" required>
                                                            <label class="custom-file-label" for="image">Choose file...</label>
                                                            <div class="invalid-feedback" id="error_image"></div>
                                                        </div>
                                                      @if ($errors->has('image'))
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $errors->first('image') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row mt-10">
                                          <div class="col-md-4 offset-md-4 text-center  mt-10">
                                              <button type="button" class="btn btn-info btn-width" name="btn-personal-prev" id="btn-personal-prev" >Previous</button>
                                              <button type="button" class="btn btn-success btn-width" id="form-submit"> Submit </button>
                                          </div>
                                      </div>
                                  </div> <!-- End Personal Info Tab -->
                            </div> <!-- End tab-content -->
                        </form> <!-- End form -->
                   </div> <!-- End card-body -->
               </div><!--  End Card -->
           </div> <!-- End col-lg-9 -->
       </div> <!--End Row-->
    </div> <!--End Container-->
</section>
<!--================End Finance Area =================-->

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

        $('#program-details-list').addClass('disabled');
        $('#verify-details-list').addClass('disabled');
        $('#personal-details-list').addClass('disabled');


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
                $('#program-details-list').removeClass('active');
                $('#program-details-list').addClass('disabled');
                $('#program-details-tab').removeClass('active show');
                $('#verify-details-list').addClass('active');
                $('#verify-details-tab').addClass('active show');
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

                } else if ( month >= 4 && month <= 7 ) {
                    $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
                } else {
                    $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
                    $('#semester').find('option[value="'+3+'"]').attr('disabled', 'disabled');
                }
            } else {
                $('#semester').find('option[value="'+1+'"]').removeAttr('disabled');
                $('#semester').find('option[value="'+2+'"]').removeAttr('disabled');
                $('#semester').find('option[value="'+3+'"]').removeAttr('disabled');
            }

        });

        //verify Previous button

        $('#btn-verify-prefious').on('click', function () {
            $('#program-details-list').addClass('active');
            $('#program-details-list').removeClass('disabled');
            $('#program-details-tab').addClass('active show');
            $('#verify-details-list').removeClass('active');
            $('#verify-details-tab').removeClass('active show');
        });

        $('#btn-verify-next').on('click', function () {
            //alert('test');
            var token = $("input[name='_token']").val();
            // SSC Section
            var error_ssc_roll = '';
            var error_ssc_reg = '';
            var error_ssc_year = '';
            var error_ssc_board = '';

            var ssc_roll = $.trim($('#ssc_roll').val());
            var ssc_reg = $.trim($('#ssc_reg').val());
            var ssc_year = $.trim($('#ssc_year').val());
            var ssc_board = $.trim($('#ssc_board').val());

            if ( ssc_roll == '' ) {
                error_ssc_roll = 'Roll is Required';
                $('#error_ssc_roll').text(error_ssc_roll);
                $('#ssc_roll').addClass('is-invalid');
                } else {
                if (!numberRegex.test( ssc_roll ) ){
                    error_ssc_roll = 'Roll must be a number';
                    $('#error_ssc_roll').text(error_ssc_roll);
                    $('#ssc_roll').addClass('is-invalid');
                }else {
                    error_ssc_roll = '';
                    $('#error_ssc_roll').text(error_ssc_roll);
                    $('#ssc_roll').removeClass('is-invalid');
                }
            }
            if ( ssc_reg == '' ) {
                error_ssc_reg = 'Registration is Required';
                $('#error_ssc_reg').text(error_ssc_reg);
                $('#ssc_reg').addClass('is-invalid');
            } else {
                if (!numberRegex.test( ssc_reg ) ){
                    error_ssc_reg = 'Registration  must be a number';
                    $('#error_ssc_reg').text(error_ssc_reg);
                    $('#ssc_reg').addClass('is-invalid');
                }else {
                    error_ssc_reg = '';
                    $('#error_ssc_reg').text(error_ssc_reg);
                    $('#ssc_reg').removeClass('is-invalid');
                }
            }
            if ( ssc_year == '' ) {
                error_ssc_year = 'Registration is Required';
                $('#error_ssc_year').text(error_ssc_year);
                $('#ssc_year').addClass('is-invalid');
            } else {
                if (!numberRegex.test( ssc_year ) ){
                    error_ssc_year = 'Registration  must be a number';
                    $('#error_ssc_year').text(error_ssc_year);
                    $('#ssc_year').addClass('is-invalid');
                }else {
                    error_ssc_year = '';
                    $('#error_ssc_year').text(error_ssc_year);
                    $('#ssc_year').removeClass('is-invalid');
                }
            }
            if ( ssc_board == '' ) {
                error_ssc_board = 'Board is Required';
                $('#error_ssc_board').text(error_ssc_board);
                $('#ssc_board').addClass('is-invalid');
            } else {
                if (!alphaRegex.test( ssc_board ) ){
                    error_ssc_board = 'Board  must be a String';
                    $('#error_ssc_board').text(error_ssc_board);
                    $('#ssc_board').addClass('is-invalid');
                }else {
                    error_ssc_board = '';
                    $('#error_ssc_board').text(error_ssc_board);
                    $('#ssc_board').removeClass('is-invalid');
                }
            }


            // HSC Section
            var error_hsc_roll = '';
            var error_hsc_reg = '';
            var error_hsc_year = '';
            var error_hsc_board = '';

            var hsc_roll = $.trim($('#hsc_roll').val());
            var hsc_reg = $.trim($('#hsc_reg').val());
            var hsc_year = $.trim($('#hsc_year').val());
            var hsc_board = $.trim($('#hsc_board').val());

            if ( hsc_roll == '' ) {
                error_hsc_roll = 'Roll is Required';
                $('#error_hsc_roll').text(error_hsc_roll);
                $('#hsc_roll').addClass('is-invalid');
            } else {
                if (!numberRegex.test( hsc_roll ) ){
                    error_hsc_roll = 'Roll must be a number';
                    $('#error_hsc_roll').text(error_hsc_roll);
                    $('#hsc_roll').addClass('is-invalid');
                }else {
                    error_hsc_roll = '';
                    $('#error_hsc_roll').text(error_hsc_roll);
                    $('#hsc_roll').removeClass('is-invalid');
                }
            }
            if ( hsc_reg == '' ) {
                error_hsc_reg = 'Registration is Required';
                $('#error_hsc_reg').text(error_hsc_reg);
                $('#hsc_reg').addClass('is-invalid');
            } else {
                if (!numberRegex.test( hsc_reg ) ){
                    error_hsc_reg = 'Registration  must be a number';
                    $('#error_hsc_reg').text(error_hsc_reg);
                    $('#hsc_reg').addClass('is-invalid');
                }else {
                    error_hsc_reg = '';
                    $('#error_hsc_reg').text(error_hsc_reg);
                    $('#hsc_reg').removeClass('is-invalid');
                }
            }

            if ( hsc_year == '' ) {
                error_hsc_year = 'Registration is Required';
                $('#error_hsc_year').text(error_hsc_year);
                $('#hsc_year').addClass('is-invalid');
            } else {
                if (!numberRegex.test( hsc_year ) ){
                    error_hsc_year = 'Registration  must be a number';
                    $('#error_hsc_year').text(error_hsc_year);
                    $('#hsc_year').addClass('is-invalid');
                }else {
                    error_hsc_year = '';
                    $('#error_hsc_year').text(error_hsc_year);
                    $('#hsc_year').removeClass('is-invalid');
                }
            }
            if ( hsc_board == '' ) {
                error_hsc_board = 'Board is Required';
                $('#error_hsc_board').text(error_hsc_board);
                $('#hsc_board').addClass('is-invalid');
            } else {
                if (!alphaRegex.test( hsc_board ) ){
                    error_hsc_board = 'Board  must be a String';
                    $('#error_hsc_board').text(error_hsc_board);
                    $('#hsc_board').addClass('is-invalid');
                }else {
                    error_hsc_board = '';
                    $('#error_hsc_board').text(error_hsc_board);
                    $('#hsc_board').removeClass('is-invalid');
                }
            }

            if ( error_hsc_roll != '' || error_hsc_reg != '' || error_hsc_year != '' || error_hsc_board != '' ||
            error_hsc_roll != '' || error_hsc_reg != '' || error_hsc_year != '' || error_hsc_board != ''
        ) {
                return false;
            } else {
                //alert('all-ok');
                var url=location.origin + '/admission/application/verify';

                $.ajax({
                  type: "post",
                  data: "ssc_roll=" + ssc_roll+"&ssc_reg="+ssc_reg+"&ssc_year="+ssc_year+"&ssc_board="+ssc_board+"&hsc_roll="+hsc_roll+"&hsc_reg="+hsc_reg+"&hsc_year="+hsc_year+"&hsc_board="+hsc_board+"&_token="+token,
                  url: url,
                  success:function(data){
                      //console.log(data);
                      //alert(data);
                      if (data == 'ssc') {

                          $("#msg").html("SSC info don't match");
                          //$("#msg").fadeOut(1000);
                      }
                      if ( data == 'hsc' ) {
                          $("#msg").html("HSC info don't match");
                          //$("#msg").fadeOut(2000);
                      }

                      if( data == 'done' ){
                          //alert(data);
                          //$("#msg").html("Product has been inserted");
                         // $("#msg").fadeOut(2000);
                         $('#verify-details-list').removeClass('active');
                         $('#verify-details-list').addClass('disabled');
                         $('#verify-details-tab').removeClass('active show');
                         $('#personal-details-list').addClass('active');
                         $('#personal-details-tab').addClass('active show');
                      }

                  }
                });
            }
        });

        // Personal Previous
        $('#btn-personal-prev').on('click', function () {
            $('#verify-details-list').addClass('active');
            $('#verify-details-list').removeClass('disabled');
            $('#verify-details-tab').addClass('active show');
            $('#personal-details-list').removeClass('active');
            $('#personal-details-tab').removeClass('active show');
        });

        $('#form-submit').on('click', function () {
            var error_phone = '';
            var error_gname = '';
            var error_grelation = '';
            var error_present = '';
            var error_permanent = '';
            var error_nationality = '';
            var error_pass = '';
            var error_imsge = '';

            var phone = $.trim($('#phone').val());
            var email = $.trim($('#email').val());
            var gname = $.trim($('#gname').val());
            var grelation = $.trim($('#grelation').val());
            var present = $.trim($('#present').val());
            var permanent = $.trim($('#permanent').val());
            var nationality = $.trim($('#nationality').val());
            var pass = $.trim($('#password').val());
            var image = $('#image').val();

            if ( phone == '' ) {
                error_phone = 'Phone is Required';
                $('#error_phone').text(error_phone);
                $('#phone').addClass('is-invalid');
            }else {
                if (!phoneNumber.test( phone )) {
                    error_phone = 'Phone not valid';
                    $('#error_phone').text(error_phone);
                    $('#phone').addClass('is-invalid');
                }else {
                    error_phone = '';
                    $('#error_phone').text(error_phone);
                    $('#phone').removeClass('is-invalid');
                }
            }

            if ( email == '' ) {
                error_email = 'Email is Required';
                $('#error_email').text(error_email);
                $('#email').addClass('is-invalid');
            }else {
                if (!emailRegex.test( email )) {
                    error_email = 'Email not valid ! Must be Number';
                    $('#error_email').text(error_email);
                    $('#email').addClass('is-invalid');
                }else {
                    error_email = '';
                    $('#error_email').text(error_email);
                    $('#email').removeClass('is-invalid');
                }
            }
            if ( gname == '' ) {
                error_gname = 'Guardian Name is Required';
                $('#error_gname').text(error_gname);
                $('#gname').addClass('is-invalid');
            }else {
                if (!strings.test( gname )) {
                    error_gname = 'Only strings is allowed';
                    $('#error_gname').text(error_gname);
                    $('#gname').addClass('is-invalid');
                }else {
                    error_gname = '';
                    $('#error_gname').text(error_gname);
                    $('#gname').removeClass('is-invalid');
                }
            }
            if ( grelation == '' ) {
                error_grelation = 'Relation with Guardian is Required';
                $('#error_grelation').text(error_grelation);
                $('#grelation').addClass('is-invalid');
            }else {
                if (!strings.test( grelation )) {
                    error_grelation = 'Only strings is allowed';
                    $('#error_grelation').text(error_grelation);
                    $('#grelation').addClass('is-invalid');
                }else {
                    error_grelation = '';
                    $('#error_grelation').text(error_grelation);
                    $('#grelation').removeClass('is-invalid');
                }
            }
            if ( present == '' ) {
                error_present = 'Present Address is Required';
                $('#error_present').text(error_present);
                $('#present').addClass('is-invalid');
            }else {
                if (!address.test( present )) {
                    error_present = 'Only strings is allowed';
                    $('#error_present').text(error_present);
                    $('#present').addClass('is-invalid');
                }else {
                    error_present = '';
                    $('#error_present').text(error_present);
                    $('#present').removeClass('is-invalid');
                }
            }

            if ( permanent == '' ) {
                error_permanent = 'Permanent Address is Required';
                $('#error_permanent').text(error_permanent);
                $('#permanent').addClass('is-invalid');
            }else {
                if (!address.test( permanent )) {
                    error_permanent = 'Only strings is allowed';
                    $('#error_permanent').text(error_permanent);
                    $('#permanent').addClass('is-invalid');
                }else {
                    error_permanent = '';
                    $('#error_permanent').text(error_permanent);
                    $('#permanent').removeClass('is-invalid');
                }
            }
            if ( nationality == '' ) {
                error_nationality = 'Nationality is Required';
                $('#error_nationality').text(error_nationality);
                $('#nationality').addClass('is-invalid');
            }else {
                if (!alphaRegex.test( nationality )) {
                    error_nationality = 'Only Alphabet is allowed';
                    $('#error_nationality').text(error_nationality);
                    $('#nationality').addClass('is-invalid');
                }else {
                    error_nationality = '';
                    $('#error_nationality').text(error_nationality);
                    $('#nationality').removeClass('is-invalid');
                }
            }
            if ( pass == '' ) {
                error_pass = 'Password is Required';
                $('#error_pass').text(error_pass);
                $('#password').addClass('is-invalid');
            }else {
                if (!password.test( pass )) {
                    error_pass = 'Only Alphabet, Number, Special Character  is allowed & Length must be 6-15 Character';
                    $('#error_pass').text(error_pass);
                    $('#password').addClass('is-invalid');
                }else {
                    error_pass = '';
                    $('#error_pass').text(error_pass);
                    $('#password').removeClass('is-invalid');
                }
            }
            if ( image == '' ) {
                error_image = 'Image is Required';
                $('#error_image').text(error_image);
                $('#image').addClass('is-invalid');
            }else {
                if (!image.match(/(?:gif|jpg|png|bmp)$/)) {
                    error_image = 'Image must be jpg,gif,png,bmp and jpeg';
                    $('#error_image').text(error_pass);
                    $('#image').addClass('is-invalid');
                }else {
                    error_image = '';
                    $('#error_image').text(error_image);
                    $('#image').removeClass('is-invalid');
                }
            }


            if( error_phone != '' || error_email != '' || error_gname != '' || error_grelation != '' || error_present != '' ||
                error_permanent != '' || error_nationality != '' || error_pass != '' || error_image != '' ) {
                    return false;
            } else {
                var r = confirm("Are You Sure to Submit!");
                 if (r == true) {
                   $('#apply-form').submit();
                 }

            }


        });

    });
</script>
@endpush
