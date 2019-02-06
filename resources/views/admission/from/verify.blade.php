@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Verify' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
@endpush

@section('content')
<!--================Finance Area =================-->
<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">
            @include('admission._sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 ">
                <div class="card">
                    <h5 class="card-header">Application Form (Step-1)</h5>

                    <div class="card-body addmission-form bg-info">
                        <div class="alert alert-danger text-center alert-custom">
                            All fields aren't be empty
                        </div>
                        <form method="POST" action="{{ route('admission.application.verify.submit') }}">
                            @csrf

                            <div class="row bg-info text-light">
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
                                                  @for( $i = date('Y'); $i > 2010 ; $i -- )
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
                                                  <option value="rajshahi">Rajshahi</option>
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
                            <div class="row bg-info text-light">
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
                                                  @for( $i = date('Y'); $i > 2010 ; $i -- )
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
                                                  <option value="rajshahi">Rajshahi</option>
                                                  <option value="sylhet">Sylhet</option>
                                                  <option value="madrasah">Madrasah</option>
                        						  <option value="tec">Technical</option>
                        						  <option value="dibs">DIBS(Dhaka)</option>
                                            </select>
                                        </div>


                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-success mt-10 btn-width">
                                                {{ __('Next') }}
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->

@endsection
