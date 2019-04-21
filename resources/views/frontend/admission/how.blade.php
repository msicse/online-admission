@extends('layouts.frontend.app')

@section('title', 'Admission | How to Apply' )
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
                    <h5 class="card-header bg-success text-light">How to Apply </h5>

                    <div class="card-body addmission-form ">
                        <ul>
                            <li>Eligible candidates are required to register only 'ONLINE' through our website before the end date of admission and
	                            no other means/ mode of application will be acceptable</li>
                            <li>
                                Candidates are required to have a valid personal e-mail ID. It should be kept active for the duration of this recruitment project.
		We may send all information through this registered e-mail ID.</strong>
                            </li>
                            <li>
                                In case a candidate does not have a valid personal e-mail ID, he/she should create his/her new e-mail ID before applying online.
                            </li>
                            <li>
                                Carefully fill in the necessary details in the Online Application Form at the appropriate places and submit the same Online.
                            </li>
                            <li>
                                The name of the candidate or his/ her father/ husband etc should be spelt correctly in the application as it appears in the certificates/ mark sheets.
		Any change/ alteration found may disqualify the candidature.
                            </li>
                            <li>
                                 An application once made will not be allowed to be withdrawn.
                            </li>
                            <li>
                                After filling in the details on the application form candidates are required to take a printout of the system generated application form immediately.
		Candidates should keep the printout of the application form for future usage.
                            </li>
                            <li>
                                There is no provision to modify the submitted online application.
		Candidates are requested to make sure to fill in correct the details in the online application, if any.
                            </li>
                            <li>
                                Once you have submitted your application successfully, You will get the intimation through EMAIL and SMS.
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
