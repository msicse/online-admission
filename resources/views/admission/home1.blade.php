@extends('layouts.frontend.app')

@section('title', 'Admission | Home' )
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/pages/admission.css') }}">
@endpush

@section('content')
<!--================Finance Area =================-->
<section class="admission-area padding-tb-50">
    <div class="container">
        <div class="row">
            @include('admission._sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 admission-home">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-capitalize">Before appling online read the Guidelines carefully </h3>
                        <a href="#" class="btn btn-info mr-20"> Guidelines </a>
                        <a href="#" class="btn btn-primary"> How To Apply </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <a href="{{ route('admission.apply') }}" class="btn btn-success"> Apply </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <a href="{{ route('admission.login') }}" class="btn btn-secondary"> Login </a>
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
