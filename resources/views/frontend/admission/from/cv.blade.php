@extends('layouts.frontend.app')

@section('title', 'Admission | Application | Form' )
@push('css')

    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <style>
        .display-n { display: none;}
        .display-blk { display: block;}
        .input-group-append button { height: 32px;}
        input[type='file'] {
          color: transparent;
          height: 35px;

        }
        .multiselectable { width:500px; display:block; overflow: hidden; width: 100%; }
        .multiselectable select, .multiselectable div { width: 200px; float:left; }
        .multiselectable div * { display: block; margin: 0 auto; }
        .multiselectable div { display: inline; }
        .multiselectable .m-selectable-controls { margin-top: 3em; width: 50px; }
        .multiselectable .m-selectable-controls button { margin-top: 1em; }
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
                        <form method="POST" id="personal-info-form" class="was-validated" action="{{ route('admission.choice.submit') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row text-center">
                                <div class="col-md-8">
                                    <h3>Md.Sumon Islam</h3>
                                    <div><strong>Contact No: </strong> +88017378877676</div>
                                    <div><strong>Email: </strong> abcd@gmail.com</div>

                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('frontend/img/team/team-1.jpg') }}" height="150" class="img-thumbnail" alt="">
                                </div>
                            </div>
                            <div class="card-header">Personal Information</div>
                            <div class="row mt-10">

                                <div class="col">
                                    <div class=""><strong>Father Name:</strong> Father  Name</div>
                                    <div class=""><strong>Date of Birth:</strong> Father  Name</div>
                                    <div class=""><strong>Guardian Name:</strong> Father  Name</div>
                                    <div class=""><strong>Present Address:</strong> Father  Name</div>
                                    <div class=""><strong>Father Name:</strong> Father  Name</div>
                                </div>

                                <div class="col">
                                    <div class=""><strong>Mother Name:</strong> Mother  Name</div>
                                    <div class=""><strong>Gender:</strong> Father  Name</div>
                                    <div class=""><strong>Relation with Guardian:</strong> Father  Name</div>
                                    <div class=""><strong>Parmanent Address:</strong> Father  Name</div>
                                    <div class=""><strong>Father Name:</strong> Father  Name</div>
                                </div>

                            </div>
                            <div class="card-header">Academic Information</div>
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Group / Concentration</th>
                                          <th scope="col">Result</th>
                                          <th scope="col">Passing Year</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Jacob</td>
                                          <td>Thornton</td>
                                          <td>@fat</td>
                                          <td>@fat</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Larry</td>
                                          <td>the Bird</td>
                                          <td>@twitter</td>
                                          <td>@twitter</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card-header"></div>


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
<!-- <script src="{{ asset('frontend/pages/multiselectable.js')}}"></script> -->
<script src="{{ asset('frontend/pages/multiselect.js')}}"></script>
<script>

    $('#btn-t').on('click', function () {
        var l = $('#undo_redo_to option').length;
        if( l > 3 ) {
            $('#undo_redo_rightAll').addClass('disabled');
        }
        alert(l);
    });

    $(function() {
        $('#undo_redo').multiselect();
    });
</script>
@endpush
