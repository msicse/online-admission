@extends('layouts.frontend.app')

@section('title', 'Admission | Guidelines' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
        .form-control { width: 250px;}
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
                    <h5 class="card-header bg-success text-light">Guidelines </h5>

                    <div class="card-body addmission-form ">
                        <ul>
                            <li>
                                Before applying online a candidate will be required to have a scanned (digital) image of his/her photograph ,
		marksheet and certificate scanned image of the Draft as per the specifications given below.
                            </li>
                            <li>
                                Photograph must be a recent passport style colour picture.
                            </li>
                            <li>
                                Make sure that the picture is in colour, taken against a light-coloured, preferably white, background.
                            </li>
                            <li>
                                Ensure that the size of the scanned image is not more than 25KB, marksheet and certificate not more than 2MB. If the size of the file is more than 25KB,
		then adjust the settings of the scanner such as the DPI resolution, no. of colours etc., during the process of scanning.
                            </li>
                            <li>
                                While filling in the Online Application Form the candidate must be uploaded
		his photograph , marksheet, and certificate.
                            </li>

                            <li>
                                Browse and Select the location where the Scanned Photograph / marksheet / certificate file has been saved.
                            </li>
                            <li><strong>Note:</strong></li>
                            <li>
                                In case the face in the photograph or marksheet and certificate is unclear the candidate's application may be rejected.
                            </li>
                            <li>
                                After registering online candidates are advised to take a printout of their system generated online application forms and need not be sent to us.
                            </li>
                        </ul>
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

window.scrollTo(0,document.querySelector(".container").scrollHeight);

$('document').ready(function () {
    yearChange();
});

function yearChange() {

    var d = new Date();
    var month = d.getMonth();
    var year = d.getFullYear();

    if ( $('#year').val() !=  '') {
        $('#semester').removeAttr('disabled');
    } else {
        $('#semester').attr('disabled', 'disabled');
    }

    if ( $('#year').val() == year ) {

        if( month >= 0 && month <= 3 ) {
            //alert(month);
            $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
            $('#semester').find('option[value="'+2+'"]').removeAttr('disabled');
            $('#semester').find('option[value="'+3+'"]').removeAttr('disabled');

        } else if ( month >= 4 && month <= 7 ) {
            $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
            $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
            $('#semester').find('option[value="'+3+'"]').removeAttr('disabled');
        } else {
            $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
            $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
            $('#semester').find('option[value="'+3+'"]').attr('disabled', 'disabled');
        }
    } else if( $('#year').val() == year + 1 ) {

        $('#semester').find('option[value="'+1+'"]').removeAttr('disabled');
        $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
        $('#semester').find('option[value="'+3+'"]').attr('disabled', 'disabled');
    }

}
</script>
@endpush
