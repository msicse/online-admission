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
            <div class="col">

                    @if(auth()->guard('application')->user()->academics()->count() == 0 && auth()->guard('application')->user()->programs()->count() == 0 )
                    <div class="progress bg-light" style="height:25px; border:1px solid #eee;">
                        <div class="progress-bar" role="progressbar" style="width:50%"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <p class="bg-light text-danger">Complete Your Application Process </p>
                    <div class="col text-center">
                        <a href="{{ route('application.academic') }}" class="btn btn-primary"> Complete Application </a>
                    </div>
                    @elseif(auth()->guard('application')->user()->programs()->count() == 0)
                    <div class="progress bg-light" style="height:25px; border:1px solid #eee;">
                        <div class="progress-bar" role="progressbar" style="width:75%"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <p class="bg-light text-danger">Complete Your Application Process </p>
                    <div class="col text-center">
                        <a href="{{ route('application.choice') }}" class="btn btn-primary"> Complete Application </a>
                    </div>
                    @elseif(auth()->guard('application')->user()->academics()->count() == 0)
                    <div class="progress bg-light" style="height:25px; border:1px solid #eee;">
                        <div class="progress-bar" role="progressbar" style="width:75%"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <p class="bg-light text-danger">Complete Your Application Process </p>
                    <div class="col text-center">
                        <a href="{{ route('application.academic') }}" class="btn btn-primary"> Complete Application </a>
                    </div>
                    @else
                    <p></p>
                    @endif

                <div class="card mt-10">
                    <h5 class="card-header">Welcome {{ auth()->guard('application')->user()->name }}</h5>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <strong>Application Status :</strong> <span class="text-success">{{ (auth()->guard('application')->user()->approved == true) ? 'Approved' : 'Pending' }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <strong> Result :</strong> {{ (auth()->guard('application')->user()->approved == true) ? 'Approved' : 'Pending' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-10">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <a href="{{ route('application.info') }}" class="btn btn-info"> Application Information </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <a href="{{ route('admission.home') }}" class="btn btn-secondary"> Result </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <a href="{{ route('admission.home') }}" class="btn btn-warning"> Change Password </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <a href="{{ route('admission.home') }}" class="btn btn-primary"> Logout </a>
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
