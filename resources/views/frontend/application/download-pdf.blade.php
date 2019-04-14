<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">







        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/custom.css') }}">

        <style>
            .display-n { display: none;}
            .display-blk { display: block;}
            .input-group-append button { height: 32px;}
            input[type='file'] {
              color: transparent;
              height: 35px;

            }
            .padding-inner { padding: .75rem 1.5rem;}
            .padding-inner div { font-size: 14px; padding: 5px 0;}
            .card-header { font-size: 20px ; font-weight: bold; padding: .75rem;}
            .profile { height: 150px;}
            .table td, .table th { padding: .5rem; }

        </style>
    </head>
    <body>
        <!--================Admission form Area =================-->
        <section class="admission-area padding-tb-50">
            <div class="container">
                <div class="row">

                    <div class="col ">
                        <div class="card">
                            <h5 class="card-header">Application Form </h5>

                            <div class="card-body addmission-form ">
                                <div id="msg" class="alert alert-danger text-center alert-custom display-n">

                                </div>


                                    <div class="row text-center">
                                        <div class="col-md-8">
                                            <h3>{{ $applicant->name }} </h3>
                                            <div><strong>Contact No : </strong> {{ $applicant->phone }}</div>
                                            <div><strong>Email : </strong> {{ $applicant->email }}</div>
                                            <div>
                                                <strong>Semester : </strong>
                                                {{ ($applicant->semester == 1 ) ? 'Spring' : ''}}
                                                {{ ($applicant->semester == 2 ) ? 'Summer' : ''}}
                                                {{ ($applicant->semester == 3 ) ? 'Fall' : ''}}
                                             </div>
                                            <div><strong>Year : </strong> {{ $applicant->year }}</div>
                                            <div><strong>Shift : </strong> {{ ( $applicant->shift == 1 ) ? 'Day' : 'Evening'  }}</div>

                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/admission/'.$applicant->image) }}"  class="img-thumbnail profile" alt="">
                                        </div>
                                    </div>
                                    <div class="card-header mt-10">Personal Information</div>
                                    <div class="row mt-10">

                                        <div class="col padding-inner">


                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Father's Name :</strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    : {{ $applicant->fname }}
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Date of Birth </strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    : {{ $applicant->dob }}
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Guardian Name </strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    : {{ $applicant->guardian }}
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Present Address </strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    : {{ $applicant->present_address }}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col padding-inner">

                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Mother's Name</strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    : {{ $applicant->mname }}
                                                </div>
                                            </div>

                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Gender </strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    :
                                                    {{ ($applicant->gender == 1 ) ? 'Male' : ''}}
                                                    {{ ($applicant->gender == 2 ) ? 'Female' : ''}}
                                                    {{ ($applicant->gender == 3 ) ? 'Others' : ''}}
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Relation </strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    : {{ $applicant->guardian_relation }}
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-start col-4">
                                                    <strong>Present Address </strong>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                    : {{ $applicant->present_address }}
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="card-header">Academic Information</div>
                                    <div class="row">
                                        <div class="col padding-inner">
                                            <table class="table table-striped table-bordered">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Exam Title</th>
                                                  <th scope="col">Roll No. </th>
                                                  <th scope="col">Registration No. </th>
                                                  <th scope="col">Institute</th>
                                                  <th scope="col">Group / Concentration</th>
                                                  <th scope="col">Result</th>
                                                  <th scope="col">Passing Year</th>
                                                  <th scope="col">Board</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                                @foreach( $applicant->academics as $key => $data )
                                                <tr>
                                                  <th scope="row">{{ $key + 1 }}</th>
                                                  <td>{{ $data->title }}</td>
                                                  <td>{{ $data->roll }}</td>
                                                  <td>{{ $data->reg }}</td>
                                                  <td>{{ $data->institute }}</td>
                                                  <td>{{ $data->group }}</td>
                                                  <td>{{ $data->result }}</td>
                                                  <td>{{ $data->passing_year }}</td>
                                                  <td>{{ $data->board }}</td>

                                                </tr>
                                                @endforeach
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card-header"> Choice List</div>
                                    <div class="row">
                                        <div class="col padding-inner">
                                            <table class="table table-striped table-bordered">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Choice S.L</th>
                                                  <th scope="col">Programs</th>

                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach( $applicant->programs as $key => $data )
                                                <tr>
                                                  <th scope="row">{{ $key + 1 }}</th>
                                                  <td>{{ $data->name}}</td>

                                                </tr>

                                                @endforeach


                                              </tbody>
                                            </table>
                                        </div>
                                    </div>

                           </div> <!-- End card-body -->
                       </div><!--  End Card -->
                   </div> <!-- End col-lg-9 -->
               </div> <!--End Row-->
            </div> <!--End Container-->
        </section>
        <!--================End Content Area =================-->

    </body>
</html>
