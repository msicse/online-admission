{{ auth()->guard('application')->user()->name }}
@extends('layouts.frontend.app')

@section('title', 'Admission | Login' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
@endpush

@section('content')
<!--================Finance Area =================-->
<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">

            <div class="col ">
                <div class="card">
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

                        <div class="col admission-home mt-10">

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
