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
                                    <a class="nav-link active readonly" id="program-details-list" data-toggle="tab" href="#program-details-tab" role="tab" aria-controls="program-details-tab" aria-selected="true"> Applying For </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " id="verify-details-list" data-toggle="tab" href="#verify-details-tab" role="tab" aria-controls="verify-details-tab" aria-selected="false">Academic</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="personal-details-list" data-toggle="tab" href="#personal-details-tab" role="tab" aria-controls="personal-details-tab" aria-selected="false">Personal Information</a>
                                  </li>
                                </ul>


                                <div class="tab-content" id="myTabContent">
                                      <div class="tab-pane fade show active" id="program-details-tab" role="tabpanel" aria-labelledby="program-details-list">
                                          <div class="form-group row ">
                                              <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                                              <div class="col-md-8">
                                                  <select name="program" id="program" class="custom-select custom-select-sm" size="5" required>
                                                        <option value="" selected>Select One</option>
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
                                                  <span id="error-program" class="invalid-feedback" role="alert"></span>
                                              </div>
                                          </div>
                                          <div class="form-group row ">
                                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                                              <div class="col-md-8">
                                                  <select name="semester" id="semester" class="custom-select custom-select-sm " size="5">
                                                        <option value="" selected>Select One</option>
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
                                                        <option value="" selected>Select One</option>

                                                        <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                                        <option value="{{ date('Y') + 1 }}">{{ date('Y') + 1 }}</option>
                                                        <option value="{{ date('Y') + 2 }}">{{ date('Y') + 2 }}</option>
                                                  </select>
                                                  <span id="error-year" class="invalid-feedback" role="alert"></span>
                                              </div>
                                          </div>

                                          <br>
                                          <div class="col text-center">
                                              <button type="button" name="btn-program-details" id="btn-program-details"  class="btn btn-success btn-width">Next</button>

                                          </div>
                                      </div>
                                      <div class="tab-pane fade" id="verify-details-tab" role="tabpanel" aria-labelledby="verify-details-list">
                                          <div class="row">
                                              <div class="col-md-3 offset-md-2 text-center v-align-middle">
                                                  <strong>SSC / Equivalent Degree</strong>
                                              </div>

                                              <div class="col-md-5">
                                                  <div class="form-group row">
                                                      <label for="ssc_roll" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                                      <div class="col-md-8">
                                                          <input id="ssc_roll" type="text" class="form-control form-control-sm" name="ssc_roll" value="{{ old('ssc_roll') }}" required autofocus>

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
                                                          <select name="ssc_year" class="custom-select custom-select-sm" size="5" required autofocus>
                                                                <option value="" selected>None</option>
                                                                @for( $i = date('Y'); $i > 2008 ; $i -- )
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                                @endfor

                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="ssc_board" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>

                                                      <div class="col-md-8">
                                                          <select name="ssc_board" class="custom-select custom-select-sm" required autofocus>
                                                                <option selected>Select One</option>
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
                                                          <input id="hsc_roll" type="text" class="form-control form-control-sm" name="hsc_roll" value="{{ old('hsc_roll') }}" required autofocus>

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
                                                          <select name="hsc_year" class="custom-select custom-select-sm" size="5" required autofocus>
                                                                <option selected>Select One</option>
                                                                @for( $i = date('Y'); $i > 2008 ; $i -- )
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                                @endfor

                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="hsc_board" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>
                                                      <div class="col-md-8">
                                                          <select name="hsc_board" class="custom-select custom-select-sm" required autofocus >
                                                                <option selected>Select One</option>
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
                                                      </div>


                                                  </div>
                                                  <br>
                                                  <div class="col text-center">
                                                      <button type="button" name="btn-verify-prefious" id="btn-verify-prefious"  class="btn btn-info btn-width">Previous</button>
                                                      <button type="button" name="btn-verify-next" id="btn-verify-next"  class="btn btn-success  btn-width">Next</button>

                                                  </div>
                                        </div>
                                        </div>
                                        </div>
                                      <div class="tab-pane fade" id="personal-details-tab" role="tabpanel" aria-labelledby="personal-details-list">

                                          <div class="row">
                                              <div class="col">
                                                  <div class="form-group row ">
                                                      <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                      <div class="col-md-8">
                                                          <input id="" type="text" class="form-control form-control-sm" name="" value="" required autofocus readonly>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col">
                                                  <div class="form-group row ">
                                                      <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Fathers Name') }}</label>

                                                      <div class="col-md-8">
                                                          <input id="" type="text" class="form-control form-control-sm" name="" value="" required autofocus readonly>

                                                      </div>
                                                  </div>
                                              </div>
                                           </div>

                                          <div class="row">
                                              <div class="col">
                                                  <div class="form-group row ">
                                                      <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Mother's Name"  ) }}</label>

                                                      <div class="col-md-8">
                                                          <input id="" type="text" class="form-control form-control-sm" name="" value="" required autofocus readonly>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col">
                                                  <div class="form-group row ">
                                                      <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                                                      <div class="col-md-8">
                                                          <input id="" type="text" class="form-control form-control-sm" name="" value="" required autofocus readonly>
                                                      </div>
                                                  </div>
                                              </div>
                                           </div>

                                          <div class="row">
                                              <div class="col">
                                                  <div class="form-group row ">
                                                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                                      <div class="col-md-8">
                                                          <input id="" type="text" class="form-control form-control-sm" name="" value="" required autofocus readonly>

                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col">
                                                  <div class="form-group row ">
                                                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                                                      <div class="col-md-8">
                                                          <select name="semester" class="custom-select custom-select-sm" size="5">
                                                                <option selected>Select One</option>
                                                                <option value="1">Spring</option>
                                                                <option value="2">Summar</option>
                                                                <option value="3">Fall</option>

                                                          </select>
                                                      </div>

                                                  </div>
                                              </div>
                                           </div>

                                          <div class="row">
                                              <div class="col">
                                                  <div class="form-group row ">
                                                      <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                                                      <div class="col-md-8">
                                                          <input id="phone" type="text" class="form-control form-control-sm" name="phone" value="{{ old('phone') }}" required autofocus>

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
                                                          <input id="" type="text" class="form-control form-control-sm" name="guardian" value="{{ old('roll') }}" required autofocus>

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
                                                          <input id="" type="text" class="form-control form-control-sm" name="relation" value="{{ old('roll') }}" required autofocus>

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
                                                          <textarea name="present_address"class="form-control" id="" rows="3"></textarea>
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
                                                          <textarea name="parmanent_address" class="form-control" id="" rows="3"></textarea>
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
                                                          <div class="custom-file">
                                                              <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                              <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
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
                                                  <input type="submit" class="btn btn-success btn-width" name="" value="Submit">
                                              </div>
                                          </div>
                                      </div>
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

window.scrollTo(0,document.querySelector(".container").scrollHeight);
    $(document).ready(function () {

        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;

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
                }

            }
            if ( $.trim($('#year').val()) == '' ) {

                error_year = 'Year is Required';
                $('#error-year').text(error_year);
                $('#year').addClass('is-invalid');

            }else {
                if (!numberRegex.test(year) ){
                    error_program = 'Year must be a number';
                }else {
                    error_program = '';
                    $('#error-year').text(error_program);
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

        //verify parmanent_address

        $('#btn-verify-prefious').on('click', function () {
            $('#program-details-list').addClass('active');
            $('#program-details-list').removeClass('disabled');
            $('#program-details-tab').addClass('active show');
            $('#verify-details-list').removeClass('active');
            $('#verify-details-tab').removeClass('active show');
        });

        $('#btn-verify-next').on('click', function () {
            var error_ssc_roll = '';
            var error_ssc_reg = '';
            var error_ssc_year = '';
            var error_ssc_board = '';

            var error_hsc_roll = '';
            var error_hsc_reg = '';
            var error_hsc_year = '';
            var error_hsc_board = '';

            if ( $.trim($('#ssc_roll').val()) == '' ) {
                error_program = 'SSC Roll is Required';
                $('#error-program').text(error_program);
            } else {
                if (!numberRegex.test(program) ){
                    error_ssc_roll = 'Program must be a number';
                    $('#error-program').text(error_program);
                }else {
                    error_program = '';
                    $('#error-program').text(error_program);
                }
            }

        });


    });
</script>
@endpush
