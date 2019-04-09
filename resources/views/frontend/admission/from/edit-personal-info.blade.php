@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')
<link href="{{ asset('frontend/datepicker/datepicker.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
        .input-group-append button { height: 32px;}
        #imagePreview {
            width: 100%;
            height: 180PX;
            background-position: center center;
            background:url('../../frontend/frame.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);

        }
        .btn-primary
        {
          display:block;
          border-radius:0px;
          box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
          margin-top:-5px;
        }
        .imgUp
        {
          margin-bottom:15px;
        }
        .del
        {
          position:absolute;
          top:0px;
          right:15px;
          width:30px;
          height:30px;
          text-align:center;
          line-height:30px;
          background-color:rgba(255,255,255,0.6);
          cursor:pointer;
        }
        .imgAdd
        {
          width:30px;
          height:30px;
          border-radius:50%;
          background-color:#4bd7ef;
          color:#fff;
          box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
          text-align:center;
          line-height:30px;
          margin-top:0px;
          cursor:pointer;
          font-size:15px;
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
                        <form method="POST" id="personal-info-form" class="was-validated" action="{{ route('admission.personal.edit.submit', $application->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="name" value="{{ $application->name }}" required autofocus >
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Fathers Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="fname" value="{{ $application->fname }}" required autofocus >

                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __("Mother's Name"  ) }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="mname" value="{{ $application->mname }}" required autofocus >
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
                                        <div class="col-md-8">
                                            <input id="datepicker" type="text" class="form-control form-control-sm" name="dob" value="{{ $application->dob }}" required autofocus >
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

                                                   <option value="1" {{ ($application->gender == 1) ? 'selected' : ''}}>Male</option>
                                                   <option value="1" {{ ($application->gender == 2) ? 'selected' : ''}}>Female</option>
                                                   <option value="1" {{ ($application->gender == 3) ? 'selected' : ''}}>Others</option>

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
                                             <input id="nationality" type="text" class="form-control form-control-sm" name="nationality" value="{{ $application->nationality }}" required autofocus>
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
                                            <input id="phone" type="text" class="form-control form-control-sm" name="phone" value="{{ $application->phone }}" required autofocus>
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
                                            <input id="email" type="email" class="form-control form-control-sm" name="email" value="{{ $application->email }}" required autofocus>
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
                                            <input id="gname" type="text" class="form-control form-control-sm" name="guardian" value="{{ $application->guardian }}" required autofocus>
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
                                            <input id="grelation" type="text" class="form-control form-control-sm" name="relation" value="{{ $application->guardian_relation }}" required autofocus>
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
                                            <textarea name="present_address"class="form-control" id="present" rows="3">{{ $application->present_address }}</textarea>
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
                                            <textarea name="parmanent_address" class="form-control" id="permanent" rows="3">{{ $application->parmanent_address }}</textarea>
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

                                        <div class="col-md-4 offset-md-4 imgUp">

                                            <div id="imagePreview"></div>
                                            <label class="btn btn-primary">Upload Photo
                                                <input type="file" class="uploadFile img" name="image" value="" style="width: 0px;height: 0px;overflow: hidden;" required>
				                            </label>
                                            <span id="btn-cls"></span>




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
                                <div class="col-md-4 offset-md-4 text-center  ">
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

$(document).on("click", "i.del" , function() {
    $("input[name = 'image']").val(null);
	$('.imgUp').find('#imagePreview').css("background-image", "url(../../frontend/frame.jpg)");
    $('#btn-cls').html('');
	//$(this).parent().remove();
    //uploadFile.closest(".imgUp").find('#imagePreview').css("background-image", "url("+this.result+")");

});

$(function() {
    $(document).on("change",".uploadFile", function()
    {
    	var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                uploadFile.closest(".imgUp").find('#imagePreview').css("background-image", "url("+this.result+")");
                $('#btn-cls').append('<i class="fa fa-times del"></i>');
            }
        }

    });
});

</script>
@endpush
