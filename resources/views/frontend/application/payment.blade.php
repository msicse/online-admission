{{ auth()->guard('application')->user()->name }}
@extends('layouts.frontend.app')

@section('title', 'Admission | Payment' )
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
                    <h5 class="card-header bg-success text-light">Payment</h5>

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

                        <p class="text-info text-center">
                            You selected for the program . You Must pay 10000/= BDT as Admission.<br>
                            @php
                            $data = Auth::guard('application')->user();
                            @endphp
                            <form class="" action="{{ route('pay') }}" method="get" target="_blank">
                                @csrf
                                <input type="hidden" name="name" value="{{ $data->name }}">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="hidden" name="email" value="{{ $data->email }}">
                                <input type="hidden" name="address" value="{{ $data->present_address }}">
                                <input type="hidden" name="phone" value="{{ $data->phone }}">
                                <button type="submit" class="btn btn-success mt-10">Proced Pyment</button>

                            </form>


                        </p>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->





@endsection
