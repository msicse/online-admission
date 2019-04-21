{{ auth()->guard('application')->user()->name }}
@extends('layouts.frontend.app')

@section('title', 'Admission | Login' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/themify/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pages/student.css') }}">

@endpush

@section('content')
<!--================Finance Area =================-->

<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">
            @php
            $applicant = Auth::guard('application')->user();
            @endphp
            @include('frontend.application.sidebar')
            <div class="col-md-9">
                <div class="card mt-10">
                    <h5 class="card-header bg-success text-light">Personal information </h5>

                    <div class="card-body">
                        @if(auth()->guard('application')->user()->academics()->count() == 0 )
                        <div class="row">
                            <div class="col bg-light">

                                <div class="progress bg-light" style="height:25px; border:1px solid #eee;">
                                    <div class="progress-bar" role="progressbar" style="width:50%"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <p class="bg-light text-danger">Complete Your Profile </p>
                                <div class=" text-center">
                                    <a href="{{ route('application.academic') }}" class="btn btn-primary btn-sm"> Complete Profile to next step</a>
                                </div>
                            </div>


                        </div>
                        @else

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="3" class="text-center">
                                    <img src="{{ asset('storage/admission/'.auth()->guard('application')->user()->image) }}" alt="user-img" class="img-circle" height="200">
                                </td>
                            </tr>
                            <tr>
                                <th >Name</th>
                                <th >:</th>
                                <td >{{ $applicant->name }}</td>
                            </tr>
                            <tr>
                                <th >Father's Name</th>
                                <th >:</th>
                                <td >{{ $applicant->fname }}</td>
                            </tr>
                            <tr>
                                <th >Mother's Name</th>
                                <th >:</th>
                                <td >{{ $applicant->mname }}</td>
                            </tr>
                            <tr>
                                <th >Date of Birth</th>
                                <th >:</th>
                                <td >{{ $applicant->dob }}</td>
                            </tr>
                            <tr>
                                <th >Gender</th>
                                <th >:</th>
                                <td >
                                    {{ ($applicant->gender == 1 ) ? 'Male' : ''}}
                                    {{ ($applicant->gender == 2 ) ? 'Female' : ''}}
                                    {{ ($applicant->gender == 3 ) ? 'Others' : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th >Guardian Name</th>
                                <th >:</th>
                                <td >{{ $applicant->guardian }}</td>
                            </tr>
                            <tr>
                                <th >Relation with Guardian</th>
                                <th >:</th>
                                <td >{{ $applicant->guardian_relation }}</td>
                            </tr>
                            <tr>
                                <th >Present Address</th>
                                <th >:</th>
                                <td >{{ $applicant->present_address }}</td>
                            </tr>
                            <tr>
                                <th >Parmanent Address</th>
                                <th >:</th>
                                <td >{{ $applicant->parmanent_address }}</td>
                            </tr>
                        </table>
@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->





@endsection
