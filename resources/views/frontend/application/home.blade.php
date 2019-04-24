{{ auth()->guard('application')->user()->name }}
@extends('layouts.frontend.app')

@section('title', 'EUB | Student | Home' )
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
            <div class="col">



                <div class="card mt-10">
                    <h5 class="card-header bg-success text-light">Welcome {{ auth()->guard('application')->user()->name }}</h5>

                    <div class="card-body">
                        @if(auth()->guard('application')->user()->fname == null)
                        <div class="row">
                            <div class="col bg-light">

                                <div class="progress bg-light" style="height:25px; border:1px solid #eee;">
                                    <div class="progress-bar" role="progressbar" style=""aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                                <p class="bg-light text-danger">Complete Your Profile to Access </p>
                                <div class=" text-center">
                                    <a href="{{ route('application.add.personal') }}" class="btn btn-primary btn-sm"> Add Personal Info </a>
                                </div>
                            </div>


                        </div>
                        @elseif(auth()->guard('application')->user()->academics()->count() == 0 )
                        <div class="row">
                            <div class="col bg-light">

                                <div class="progress bg-light" style="height:25px; border:1px solid #eee;">
                                    <div class="progress-bar" role="progressbar" style="width:50%"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <p class="bg-light text-danger">Complete Your Profile to Access </p>
                                <div class=" text-center">
                                    <a href="{{ route('application.add.academic') }}" class="btn btn-primary btn-sm"> Complete Profile </a>
                                </div>
                            </div>


                        </div>
                        @endif
                        <div class="row mt-10">
                            <div class="col">
                                <div class="card bg-info text-light">
                                    <div class="card-body text-center">
                                        <strong>Application Status :</strong> <span class="text-danger">{{ (auth()->guard('application')->user()->approved == true) ? 'Approved' : 'Pending' }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card bg-primary text-light">
                                    <div class="card-body text-center">
                                        <strong> Result :</strong> {{ (auth()->guard('application')->user()->approved == true) ? 'Approved' : 'Pending' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row " style="margin-top: 40px;">
                            <div class="col">
                                <table class="table table-borderd table-striped">
                                    <tr>
                                        <th>C.L</th>
                                        <th>Program Name</th>
                                        <th>Short Name</th>
                                    </tr>
                                    @foreach( auth()->guard('application')->user()->programs as $key => $program )
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{ $program->name }}</td>
                                        <td>{{ $program->short_name }}</td>
                                    </tr>
                                    @endforeach
                                </table>
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
