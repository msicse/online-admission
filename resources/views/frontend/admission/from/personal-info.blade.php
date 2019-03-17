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
                                    <div class="form-group row ">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                                        <div class="col-md-4">
                                            <!-- <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image" aria-describedby="image">
                                                <label class="custom-file-label" for="image">Choose Image</label>
                                             </div>
                                             <span id="error_image" class="invalid-feedback" role="alert"></span> -->
                                             <div class="custom-file">
                                                  <input type="file" class="custom-file-input" id="image" name="image" required>
                                                  <label class="custom-file-label" for="image">Choose file...</label>
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
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });

window.scrollTo(0,document.querySelector(".container").scrollHeight);

    $(document).ready(function () {

        // alert($('#year option').find('[value="'+1+'"]'));
        // n = s.closest(".nice-select");
        //     n.find("data-id").removeClass("selected"), s.addClass("selected");


        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
        var alphaRegex = /^[a-zA-Z ]*$/;
        var phoneNumber = /[0-9-()+]{3,20}/;
        //var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/;
        //var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/;
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        var strings = /^[0-9a-zA-Z,. @_-]+$/;
        var address = /^[0-9a-zA-Z,-. #@_-]+$/;
        var password = /^[a-zA-Z0-9_-]{6,15}$/;
        var token = $("input[name='_token']").val();
        var uEmail = '';

        //Personal email checkEmail
        $('#email').keyup(function () {

              var eUrl = location.origin + '/admission/check-email';
              var eMail = $('#email').val();

              $.ajax({
                type: "post",
                data: "email=" + eMail+"&_token="+token,
                url: eUrl,
                success:function(data){

                    if ( data == 'found') {
                        uEmail = 'The email already exists';
                        $('#error_email').text(uEmail);
                        $('#email').addClass('is-invalid');
                        $('.was-validated #email .form-control:valid:focus').css("box-shadow","none");
                        $('#email.form-control:valid').css("border-color","#f00");

                    } else {
                        uEmail = '';
                        $('#error_email').text(uEmail);
                        $('#email').removeClass('is-invalid');
                        $('#email.form-control:valid').css("border-color","#28a745");
                        $('#email.form-control:valid:focus').css("box-shadow","0 0 0 0.2rem rgba(40, 167, 69, .25)");
                    }

                }
            });
        });
        //personal submit
        $('#form-submit').click( function () {

            var token = $("input[name='_token']").val();
            var error_phone = '';
            var error_gname = '';
            var error_grelation = '';
            var error_present = '';
            var error_permanent = '';
            var error_nationality = '';
            var error_pass = '';
            var error_imsge = '';

            var phone = $.trim($('#phone').val());
            var email = $.trim($('#email').val());
            var gname = $.trim($('#gname').val());
            var grelation = $.trim($('#grelation').val());
            var present = $.trim($('#present').val());
            var permanent = $.trim($('#permanent').val());
            var nationality = $.trim($('#nationality').val());
            var pass = $.trim($('#password').val());
            var image = $('#image').val();

            if ( phone == '' ) {
                error_phone = 'Phone is Required';
                $('#error_phone').text(error_phone);
                $('#phone').addClass('is-invalid');
            }else {
                if (!phoneNumber.test( phone )) {
                    error_phone = 'Phone not valid';
                    $('#error_phone').text(error_phone);
                    $('#phone').removeClass('is-valid');
                    //form.classList.add('was-validated');
                }else {

                    error_phone = '';
                    $('#error_phone').text(error_phone);
                    $('#phone').removeClass('is-invalid');
                }
            }

            if ( email == '' ) {
                error_email = 'Email is Required';
                $('#error_email').text(error_email);
                $('#email').addClass('is-invalid');
            }else {
                if (!emailRegex.test( email )) {
                    error_email = 'Email not valid !';
                    $('#error_email').text(error_email);
                    $('#email').addClass('is-invalid');
                }else {


                    if (uEmail != '') {
                        error_email = 'Email already exists';
                        $('#error_email').text(error_email);
                        $('#email').addClass('is-invalid');
                    }else {
                        error_email = '';
                        $('#error_email').text(error_email);
                        $('#email').removeClass('is-invalid');
                    }
                }
            }
            if ( gname == '' ) {
                error_gname = 'Guardian Name is Required';
                $('#error_gname').text(error_gname);
                $('#gname').addClass('is-invalid');
            }else {
                if (!strings.test( gname )) {
                    error_gname = 'Only strings is allowed';
                    $('#error_gname').text(error_gname);
                    $('#gname').addClass('is-invalid');
                }else {
                    error_gname = '';
                    $('#error_gname').text(error_gname);
                    $('#gname').removeClass('is-invalid');
                }
            }
            if ( grelation == '' ) {
                error_grelation = 'Relation with Guardian is Required';
                $('#error_grelation').text(error_grelation);
                $('#grelation').addClass('is-invalid');
            }else {
                if (!strings.test( grelation )) {
                    error_grelation = 'Only strings is allowed';
                    $('#error_grelation').text(error_grelation);
                    $('#grelation').addClass('is-invalid');
                }else {
                    error_grelation = '';
                    $('#error_grelation').text(error_grelation);
                    $('#grelation').removeClass('is-invalid');
                }
            }
            if ( present == '' ) {
                error_present = 'Present Address is Required';
                $('#error_present').text(error_present);
                $('#present').addClass('is-invalid');
            }else {
                if (!address.test( present )) {
                    error_present = 'Only strings is allowed';
                    $('#error_present').text(error_present);
                    $('#present').addClass('is-invalid');
                }else {
                    error_present = '';
                    $('#error_present').text(error_present);
                    $('#present').removeClass('is-invalid');
                }
            }

            if ( permanent == '' ) {
                error_permanent = 'Permanent Address is Required';
                $('#error_permanent').text(error_permanent);
                $('#permanent').addClass('is-invalid');
            }else {
                if (!address.test( permanent )) {
                    error_permanent = 'Only strings is allowed';
                    $('#error_permanent').text(error_permanent);
                    $('#permanent').addClass('is-invalid');
                }else {
                    error_permanent = '';
                    $('#error_permanent').text(error_permanent);
                    $('#permanent').removeClass('is-invalid');
                }
            }
            if ( nationality == '' ) {
                error_nationality = 'Nationality is Required';
                $('#error_nationality').text(error_nationality);
                $('#nationality').addClass('is-invalid');
            }else {
                if (!alphaRegex.test( nationality )) {
                    error_nationality = 'Only Alphabet is allowed';
                    $('#error_nationality').text(error_nationality);
                    $('#nationality').addClass('is-invalid');
                }else {
                    error_nationality = '';
                    $('#error_nationality').text(error_nationality);
                    $('#nationality').removeClass('is-invalid');
                }
            }

            if ( image == '' ) {
                error_image = 'Image is Required';
                $('#error_image').text(error_image);
                $('#image').addClass('is-invalid');
            }else {
                if (!image.match(/(?:gif|jpg|png|bmp)$/)) {
                    error_image = 'Image must be jpg,gif,png,bmp and jpeg';
                    $('#error_image').text(error_pass);
                    $('#image').addClass('is-invalid');
                }else {
                    error_image = '';
                    $('#error_image').text(error_image);
                    $('#image').removeClass('is-invalid');
                }
            }


            if( error_phone != '' || error_email != '' || error_gname != '' || error_grelation != '' || error_present != '' ||
                error_permanent != '' || error_nationality != '' || error_pass != '' || error_image != '' || uEmail != '' ) {
                    return false;
            } else {
                console.log('ok');
                 //preventDefault();
                 $('#personal-info-form').submit();
                // var r = confirm("Are You Sure to Submit!");
                //  if (r == true) {
                //    $('#apply-form').submit();
                //  }

            }


        });




    });
</script>
@endpush
