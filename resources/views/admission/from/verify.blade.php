@extends('layouts.frontend.app')

@section('title', 'Admission | Login' )
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
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row bg-info text-light">
                                <div class="col-md-3 offset-md-2 text-center v-align-middle">
                                    <strong>SSC / Equivalent Degree</strong>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Reg. No.') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Passing Year') }}</label>

                                        <div class="col-md-8">
                                            <select class="custom-select custom-select-sm" size="5">
                                                  <option selected>Select One</option>
                                                  @for( $i = date('Y'); $i > 2010 ; $i -- )
                                                  <option value="{{ $i }}">{{ $i }}</option>
                                                  @endfor

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>

                                        <div class="col-md-8">
                                            <select class="custom-select custom-select-sm">
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
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Reg. No.') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('passing Year') }}</label>

                                        <div class="col-md-8">
                                            <select class="custom-select custom-select-sm" size="5">
                                                  <option selected>Select One</option>
                                                  @for( $i = date('Y'); $i > 2010 ; $i -- )
                                                  <option value="{{ $i }}">{{ $i }}</option>
                                                  @endfor

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>
                                        <div class="col-md-8">
                                            <select class="custom-select custom-select-sm">
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
