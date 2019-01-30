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
            @include('admission._sidebar')
            <div class="col-lg-9 col-md-9 col-sm-12 ">
                <div class="card">
                    <h5 class="card-header">Application Form ( Step- 2 )</h5>

                    <div class="card-body addmission-form bg-info">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row text-light">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                                        <div class="col-md-8">
                                            <input id="roll" type="text" class="form-control form-control-sm" name="roll" value="{{ old('roll') }}" required autofocus>

                                            @if ($errors->has('roll'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('roll') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                             </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->

@endsection
