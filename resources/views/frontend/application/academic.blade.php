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
            @include('frontend.application.sidebar')
            <div class="col-md-9">
                <div class="card mt-10">
                    <h5 class="card-header bg-success text-light">Academics</h5>

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
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Exam Title</th>
                                    <th>Roll No. </th>
                                    <th>Reg No. </th>
                                    <th>Institute</th>
                                    <th>Group / Concentration</th>
                                    <th>Result</th>
                                    <th>Passing Year</th>
                                    <th>Board</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( Auth::guard('application')->user()->academics as $key => $data )
                                <tr>
                                    <th>{{ $key + 1 }}</th>
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->





@endsection
