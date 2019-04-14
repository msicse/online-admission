@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')

    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
        .input-group-append button { height: 32px;}
        input[type='file'] {

          height: 35px;

        }
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
                        <form method="POST" id="personal-info-form" class="was-validated" action="{{ route('admission.academic.edit.submit', $application->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @foreach( $application->academics as $data)
                            <input type="hidden" name="title[]" value="ssc">
                            <div class="card-header mb-10">
                                {{ $data->title }}
                            </div>
                            <div class="row mt-10">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="roll[]" value="{{ $data->roll }}" required autofocus >
                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Registration') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="reg[]" value="{{ $data->reg }}" required autofocus >
                                            @if ($errors->has('reg'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('reg') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row mt-10">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Institute') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="institute[]" value="{{ $data->institute }}" required autofocus >
                                            @if ($errors->has('institute'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('institute') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>

                                        <div class="col-md-8">
                                            <select name="board[]" id="" class="form-control form-control-sm " required autofocus>
                                                <option value="" selected>Select One</option>
                                                <option value="barisal" {{ ( $data->board ==  'barisal' ) ? 'selected' : '' }}>Barisal</option>
                                                <option value="chittagong" {{ ( $data->board ==  'chittagong' ) ? 'selected' : '' }}>Chittagong</option>
                                                <option value="comilla" {{ ( $data->board ==  'comilla' ) ? 'selected' : '' }}>Comilla</option>
                                                <option value="dhaka" {{ ( $data->board ==  'dhaka' ) ? 'selected' : '' }}>Dhaka</option>
                                                <option value="dinajpur" {{ ( $data->board ==  'dinajpur' ) ? 'selected' : '' }}>Dinajpur</option>
                                                <option value="jessore" {{ ( $data->board ==  'jessore' ) ? 'selected' : '' }}>Jessore</option>
                                                <option value="rajshahi" {{ ( $data->board ==  'rajshahi' ) ? 'selected' : '' }}>Rajshahi</option>
                                                <option value="sylhet" {{ ( $data->board ==  'sylhet' ) ? 'selected' : '' }}>Sylhet</option>
                                                <option value="madrasah" {{ ( $data->board ==  'madrasah' ) ? 'selected' : '' }}>Madrasah</option>
                                                <option value="technical" {{ ( $data->board ==  'technical' ) ? 'selected' : '' }}>Technical</option>
                                                <option value="dibs" {{ ( $data->board ==  'dibs' ) ? 'selected' : '' }}>DIBS(Dhaka)</option>
                                            </select>
                                            @if ($errors->has('board'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('board') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Group"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="group[]" value="{{ $data->group }}" required autofocus >
                                            @if ($errors->has('group'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('group') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="passing_year" class="col-md-4 col-form-label text-md-right">{{ __('Passing Year') }}</label>

                                        <div class="col-md-8">
                                            <select name="passing_year[]" class="form-control form-control-sm " required>
                                                <option value="" >Select One</option>
                                                @for( $i = date('Y') - 10; $i <= date('Y'); $i++ )
                                                <option value="{{ $i }}" {{ ( $data->passing_year ==  $i ) ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @if ($errors->has('passing_year'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('passing_year') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                             </div>

                            <div class="row">

                                 <div class="col">
                                     <div class="form-group row ">
                                         <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Result') }}</label>
                                         <div class="col-md-8">
                                             <input type="text" class="form-control form-control-sm" name="result[]" value="{{ $data->result }}" required autofocus >
                                             @if ($errors->has('result'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('result') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col">
                                     <div class=" row ">
                                         <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Transcript') }}</label>

                                         <div class="col-md-8">
                                             <img src="{{ Storage::disk('public')->url('admission/academic/'.$data->marksheet) }}"  class="img-thumbnail profile" alt="">
                                             <input type="file" class="" id="" name="marksheet[]" >

                                         </div>
                                     </div>
                                 </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="col">
                                          <div class=" row ">
                                              <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Certificate') }}</label>

                                              <div class="col-md-8">
                                                  <img src="{{ Storage::disk('public')->url('admission/academic/certificate/'.$data->certificate) }}"  class="img-thumbnail profile" alt="">
                                                  <input type="file" class="" id="" name="certificate[]" >

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              @endforeach

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

<script>

</script>
@endpush
