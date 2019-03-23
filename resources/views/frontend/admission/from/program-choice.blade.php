@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')
<link href="{{ asset('frontend/datepicker/datepicker.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
        .input-group-append button { height: 32px;}
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
                        <form method="POST" id="academic-info-form" class="was-validated" action="{{ route('admission.academic.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-3 text-center v-align-middle">
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

                                <div class="col-md-1 text-center v-align-middle">
                                    <strong>Marksheet</strong>
                                </div>
                                <div class="col-md-3 text-center v-align-middle">

                                    <input type="file" class="form-control form-control-sm" name="ssc_marksheet" required>

                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-md-3 text-center v-align-middle">
                                    <strong> {{ $applicant->shift == 1 ? 'HSC' : 'Diploma' }}</strong>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="hsc_roll" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="hsc_roll" type="text" class="form-control form-control-sm" name="hsc_roll" value="{{ old('hsc_roll') }}" required autofocus>
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

                                </div>
                                <div class="col-md-1 text-center v-align-middle">
                                    <strong>Marksheet</strong>
                                </div>
                                <div class="col-md-3 text-center v-align-middle">

                                    <input type="file" class="form-control form-control-sm" name="hsc_marksheet" required>

                                </div>
                                <br>


                              </div>
                              <div class="dropdown-divider"></div>
                              <div class="col text-center">
                                  <button type="button" name="btn-verify-prefious" id="btn-verify-prefious"  class="btn btn-info btn-width">Previous</button>
                                  <button type="submit" name="btn-verify-next" id="btn-verify-next"  class="btn btn-success  btn-width">Next</button>

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


</script>
@endpush
