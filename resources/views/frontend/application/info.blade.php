
@extends('layouts.frontend.app')

@section('title', 'Application | Chaange Password' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
@endpush

@section('content')
<!--================Finance Area =================-->
<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">
            @include('frontend.admission._sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 ">
                <div class="card">
                    <h5 class="card-header">Change Password</h5>

                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center mt-10 mb-10">
                                <img src="{{ asset('storage/admission/'. $application->image ) }}" class="" height="150" alt="">
                                <div class="mt-10"><strong>Appling For : </strong> {{ ($application->level == 1 ) ? 'Under Graduate' : 'Post Graduate'  }}</div>
                                <div><strong>Semester : </strong>
                                    {{ ($application->semester == 1) ? 'Spring' : '' }}
                                    {{ ($application->semester == 2) ? 'Summer' : '' }}
                                    {{ ($application->semester == 3) ? 'Fall' : '' }}
                                </div>
                                <div><strong>Year : </strong> {{ $application->year }}</div>
                                <div class="mb-10"><strong>Shift : </strong>
                                    {{ ($application->shift == 1) ? 'Day' : 'Evening'}}

                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Name</th>
                                <td>{{ $application->name }}</td>
                                <th>Father's Name</th>
                                <td>{{ $application->fname }}</td>
                                <th>Mother's Name</th>
                                <td>{{ $application->mname }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $application->dob }}</td>
                                <th>Gender</th>
                                <td>
                                    {{ ($application->gender == 1 ) ? 'Male' : ''}}
                                    {{ ($application->gender == 2 ) ? 'Female' : ''}}
                                    {{ ($application->gender == 3 ) ? 'Others' : ''}}
                                </td>
                                <th>Phone</th>
                                <td>{{ $application->phone }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $application->email }}</td>
                                <th>Guardian Name</th>
                                <td>{{ $application->guardian }}</td>
                                <th>Relation</th>
                                <td>{{ $application->guardian_relation }}</td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td>{{ $application->nationality }}</td>
                                <th>Present Address</th>
                                <td>{{ $application->present_address }}</td>
                                <th>Parmanent Address</th>
                                <td>{{ $application->parmanent_address }}</td>
                            </tr>
                        </table>
                        <div class="header">
                            <h5> Programs Information</h5>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Program Name</th>
                                    <th>Short Name</th>
                                    <th>Faculty</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $application->programs as $key => $data )
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->short_name }}</td>
                                    <td>{{ $data->department->name }}</td>
                                    <td>{{ ($data->level == 1 ) ? 'Under Graduate' : 'Post Graduate'  }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="card-header">
                            <h5>Academic Information</h5>
                        </div>

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
                            @foreach( $application->academics as $key => $data )
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
                            <tr>
                                <td colspan="9" class="text-center marksheet">
                                    <img src="{{ asset('storage/admission/academic/'.$data->marksheet) }}" alt="">
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

                        <div class="col text-center">
                            <a href="{{ route('admin.applications.index') }}" class="btn btn-primary">Appling for change</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->

@endsection
@push('js')
<script>

    function functionName() {

    }
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }
</script>
@endpush
