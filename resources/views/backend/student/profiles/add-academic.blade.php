@extends('layouts.frontend.app')

@section('title', 'Student | Add Academic Info' )
@push('css')

    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/themify/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/student.css') }}">
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
            @include('frontend.application.sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 ">
                <div class="card">
                    <h5 class="card-header bg-success text-light">Academic Information </h5>

                    <div class="card-body addmission-form ">
                        <div id="msg" class="alert alert-danger text-center alert-custom display-n">

                        </div>
                        <!-- <div class="row">
                            <div class="col">
                                <p id="msg" class="alert alert-danger"></p>
                            </div>
                        </div> -->
                        <form method="POST" id="personal-info-form" class="" action="{{ route('application.add.academic.submit') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-header mb-10 bg-info text-light">
                                SSC or Equivalent
                            </div>

                            <div class="row mt-10">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Exam Title') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="title[]" value="" required autofocus >
                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="roll[]" value="" required autofocus >
                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                             </div>

                            <div class="row mt-10">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Registration') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="reg[]" value="" required autofocus >
                                            @if ($errors->has('reg'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('reg') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Institute') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="institute[]" value="" required autofocus >
                                            @if ($errors->has('institute'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('institute') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </div>

                                </div>

                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>

                                        <div class="col-md-8">
                                            <select name="board[]" id="" class="form-control form-control-sm " required autofocus>
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
                                            @if ($errors->has('board'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('board') }}</strong>
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
                                                  <option value="" selected>Select One</option>

                                                  @for( $i = date('Y') - 10; $i <= date('Y'); $i++ )
                                                  <option value="{{ $i }}">{{ $i }}</option>
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
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Group"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="group[]" value="" required autofocus >
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
                                         <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Result') }}</label>
                                         <div class="col-md-8">
                                             <input type="text" class="form-control form-control-sm" name="result[]" value="" required autofocus >
                                             @if ($errors->has('result'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('result') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>
                                 </div>



                              </div>
                              <div class="row">
                                  <div class="col">
                                      <div class="form-group row ">
                                          <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Transcript ') }}</label>

                                          <div class="col-md-8">
                                             <input type="file" name="marksheet[]">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class=" row ">
                                          <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Certificate') }}</label>

                                          <div class="col-md-8">

                                              <input type="file" class="" id="" name="certificate[]" required>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                            <div class="card-header mb-10 bg-info text-light">
                                HSC or Diploma or Equivalent
                            </div>

                            <div class="row mt-10">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Exam Title') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="title[]" value="" required autofocus >
                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="roll[]" value="" required autofocus >
                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                             </div>

                            <div class="row mt-10">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Registration') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="reg[]" value="" required autofocus >
                                            @if ($errors->has('reg'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('reg') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Institute') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="institute[]" value="" required autofocus >
                                            @if ($errors->has('institute'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('institute') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </div>

                                </div>

                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>

                                        <div class="col-md-8">
                                            <select name="board[]" id="" class="form-control form-control-sm " required autofocus>
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
                                            @if ($errors->has('board'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('board') }}</strong>
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
                                                  <option value="" selected>Select One</option>

                                                  @for( $i = date('Y') - 10; $i <= date('Y'); $i++ )
                                                  <option value="{{ $i }}">{{ $i }}</option>
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
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Group"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="group[]" value="" required autofocus >
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
                                         <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Result') }}</label>
                                         <div class="col-md-8">
                                             <input type="text" class="form-control form-control-sm" name="result[]" value="" required autofocus >
                                             @if ($errors->has('result'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('result') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>
                                 </div>



                              </div>
                              <div class="row">
                                  <div class="col">
                                      <div class="form-group row ">
                                          <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Transcript ') }}</label>

                                          <div class="col-md-8">
                                             <input type="file" name="marksheet[]">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class=" row ">
                                          <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Certificate') }}</label>

                                          <div class="col-md-8">

                                              <input type="file" class="" id="" name="certificate[]" required>

                                          </div>
                                      </div>
                                  </div>
                              </div>

                            @if( Auth::guard('application')->user()->level == 2 )

                            <div class="card-header mb-10">
                                Honors or Equivalent
                            </div>
                            <div class="row mt-10">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="roll[]" value="" required autofocus >
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
                                            <input id="" type="text" class="form-control form-control-sm" name="reg[]" value="" required autofocus >
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
                                            <input id="" type="text" class="form-control form-control-sm" name="institute[]" value="" required autofocus >
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
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Concentration/ Major"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="group[]" value="" required autofocus >
                                            @if ($errors->has('group'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('group') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                             </div>

                            <div class="row">

                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="passing_year" class="col-md-4 col-form-label text-md-right">{{ __('Passing Year') }}</label>

                                        <div class="col-md-8">
                                            <select name="passing_year[]" class="form-control form-control-sm " required>
                                                  <option value="" selected>Select One</option>
                                                  @for( $i = date('Y') - 10; $i <= date('Y'); $i++ )
                                                  <option value="{{ $i }}">{{ $i }}</option>
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
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Result') }}</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control-sm" name="result[]" value="" required autofocus >
                                            @if ($errors->has('result'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('result') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">

                                 <div class="col">
                                     <div class="form-group row ">
                                         <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Transcript') }}</label>

                                         <div class="col-md-8">
                                            <input type="file" class="" id="" name="marksheet[]" required>

                                            @if ($errors->has('marksheet'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('marksheet') }}</strong>
                                                </span>
                                            @endif

                                         </div>
                                     </div>
                                 </div>
                                 <div class="col">
                                     <div class="form-group row ">
                                         <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Certificate') }}</label>

                                         <div class="col-md-8">
                                            <input type="file" class="" id="" name="certificate[]" required>

                                            @if ($errors->has('certificate'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('certificate') }}</strong>
                                                </span>
                                            @endif

                                         </div>
                                     </div>
                                 </div>
                              </div>

                            @endif
                            <div class="row mt-10">
                                <div class="col-md-4 offset-md-4 text-center  mt-10">
                                    <a href="{{ route('application.home')}}" class="btn btn-info btn-width" >Cencel</a>
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
