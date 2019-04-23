@extends('layouts.frontend.app')

@section('title', 'Admission | Registration' )
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
                    <h5 class="card-header bg-success text-light">Registration Form </h5>

                    <div class="card-body addmission-form ">
                        <div id="msg" class="alert alert-danger text-center alert-custom display-n">

                        </div>
                        <!-- <div class="row">
                            <div class="col">
                                <p id="msg" class="alert alert-danger"></p>
                            </div>
                        </div> -->
                        <form method="POST" id="personal-info-form" class="was-validated" action="{{ route('admission.register.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-group row ">
                                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control form-control-sm" name="name" value="{{ old('name') }}"  autofocus >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                        <div class="col-md-8">
                                            <input id="phone" type="phone" class="form-control form-control-sm" name="phone" value="{{ old('phone') }}"  autofocus>
                                            <span id="error_email" class="invalid-feedback" role="alert"></span>
                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                        <div class="col-md-8">
                                            <input id="email" type="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}"  autofocus>
                                            <span id="error_email" class="invalid-feedback" role="alert"></span>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row mt-10">
                                        <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                                        <div class="col-md-8">
                                            <button type="submit" onclick="imgUpload()" class="btn btn-success btn-width" id="form-submit"> Register </button>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="row mt-10">
                                <div class="col-md-4 offset-md-4 text-center  mt-10">

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

    $(function()
    {
      $('#address-checked').change(function()
      {
        if ($(this).is(':checked')) {
           var present = $('#present').val();
           $('#permanent').val($('#present').val());
       } else {
           $('#permanent').val('')
       }
      });
    });

    // Imsge uploadFile

    $(document).on("click", "i.del" , function() {
        $("input[name = 'image']").val(null);
    	$('.imgUp').find('#imagePreview').css("background-image", "url(../../frontend/frame.jpg)");
        $('#btn-cls').html('');
    	//$(this).parent().remove();
        //uploadFile.closest(".imgUp").find('#imagePreview').css("background-image", "url("+this.result+")");

    });


    function imgUpload() {
        if ($('.uploadFile').val() == '') {
            $('#imgIn').html('Image is required');
        }else {
            $('#imgIn').html('');
        }
    }
    $(function() {

        $(document).on("change",".uploadFile", function()
        {
        	var uploadFile = $(this);
            //alert(uploadFile);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader){
                alert('no-file ss');
            } // no file selected, or no FileReader support

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
