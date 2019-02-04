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
                    <h5 class="card-header">Application Form ( Step- 2 )</h5>

                    <div class="card-body addmission-form bg-info">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ __('Name') }}" required autofocus readonly>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Fathers Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ __('Fname') }}" required autofocus readonly>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __("Mother's Name"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ __('Name') }}" required autofocus readonly>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ __('Fname') }}" required autofocus readonly>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ __('Name') }}" required autofocus readonly>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                                        <div class="col-md-8">
                                            <select class="custom-select custom-select-sm" size="5">
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
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Applying Year') }}</label>

                                        <div class="col-md-8">
                                            <select class="custom-select custom-select-sm" size="5">
                                                  <option selected>Select One</option>

                                                  <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                                  <option value="{{ date('Y') + 1 }}">{{ date('Y') + 1 }}</option>
                                                  <option value="{{ date('Y') + 2 }}">{{ date('Y') + 2 }}</option>


                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                                        <div class="col-md-8">
                                            <select class="custom-select custom-select-sm" size="5">
                                                  <option selected>Select One</option>

                                                  <option value="">{{ date('Y') }}</option>
                                                  <option value="{{ date('Y') + 1 }}">{{ date('Y') + 1 }}</option>
                                                  <option value="{{ date('Y') + 2 }}">{{ date('Y') + 2 }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Guardian Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Relation') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Present Address') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                        <div class="col-md-4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                             </div>
                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
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
