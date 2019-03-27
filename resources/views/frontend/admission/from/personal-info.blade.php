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
                        <form method="POST" id="personal-info-form" class="was-validated" action="{{ route('admission.personal.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="name" value="" required autofocus >
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Fathers Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="fname" value="" required autofocus >

                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Mother's Name"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="mname" value="" required autofocus >
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
                                        <div class="col-md-8">
                                            <input id="datepicker" type="text" class="form-control form-control-sm" name="dob" value="" required autofocus >
                                        </div>
                                    </div>
                                </div>
                             </div>

                             <div class="row">

                                 <div class="col">
                                     <div class="form-group row ">
                                         <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                         <div class="col-md-8">
                                             <select name="gender" class="form-control form-control-sm" required>
                                                   <option value="" selected>Select One</option>
                                                   <option value="1">Male</option>
                                                   <option value="2">Female</option>
                                                   <option value="3">Others</option>
                                             </select>
                                             @if ($errors->has('gender'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('gender') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>
                                 </div>

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
                              </div>

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
                                    <div class="form-group row mt-10">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>

                                        <div class="col-md-4">
                                            <!-- <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image" aria-describedby="image">
                                                <label class="custom-file-label" for="image">Choose Image</label>
                                             </div>
                                             <span id="error_image" class="invalid-feedback" role="alert"></span> -->
                                             <div class="custom-file">
                                                  <input type="file" class="custom-file-input" id="image" name="image" required>
                                                  <label class="custom-file-label" for="image">Upload Photo</label>
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
                                    <button type="submit" class="btn btn-success btn-width" id="form-submit"> Submit </button>
                                </div>
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
<script src="{{ asset('frontend/datepicker/datepicker.min.js') }}"></script>


<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });

</script>
@endpush
