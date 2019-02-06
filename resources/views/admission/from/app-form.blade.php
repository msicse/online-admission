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
            @include('admission._sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 ">
                <div class="card">
                    <h5 class="card-header">Application Form ( Step- 2 )</h5>

                    <div class="card-body addmission-form bg-info">
                        <div class="alert alert-danger text-center alert-custom">
                            All fields aren't be empty
                        </div>
                        <form method="POST" action="{{ route('admission.application.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="" value="{{ __('Name') }}" required autofocus readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Fathers Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="" value="{{ __('Fname') }}" required autofocus readonly>

                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Mother's Name"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="" value="{{ __('Name') }}" required autofocus readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="" value="{{ __('Fname') }}" required autofocus readonly>
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="" value="{{ __('Name') }}" required autofocus readonly>

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
                                        <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Applying Year') }}</label>

                                        <div class="col-md-8">
                                            <select name="year" class="custom-select custom-select-sm" size="5">
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
                                        <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                                        <div class="col-md-8">
                                            <select name="program" class="custom-select custom-select-sm" size="5">
                                                  <option selected>Select One</option>
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
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                    <div class="form-group row text-light">
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
                                <div class="col-md-4 offset-md-4 text-center text-light mt-10">
                                    <input type="submit" class="btn btn-success btn-width" name="" value="Submit">
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
