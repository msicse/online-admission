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
                            <div class="card-header mb-10">
                                SSC or Equevalent
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="school" value="" required autofocus >
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Board Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="board" value="" required autofocus >

                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Division"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="division" value="" required autofocus >
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>
                                        <div class="col-md-8">
                                            <input id="datepicker" type="text" class="form-control form-control-sm" name="duration" value="" required autofocus >
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">

                                 <div class="col">
                                     <div class="form-group row ">
                                         <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Passing Year') }}</label>

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
                                         <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Result') }}</label>

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

                            <div class="row mt-10">
                                <div class="col-md-4 offset-md-4 text-center  mt-10">
                                    <button type="button" class="btn btn-info btn-width" name="btn-personal-prev" id="btn-personal-prev" >Previous</button>
                                    <button type="button" class="btn btn-success btn-width" id="form-submit"> Submit </button>
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

</script>
@endpush
