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

            <div class="col-md-3">
                <div class="nav flex-column addmission-sidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-login-tab" data-toggle="pill" href="#v-pills-login" role="tab" aria-controls="v-pills-login" aria-selected="false">Login</a>
                    <a class="nav-link" id="v-pills-apply-tab" data-toggle="pill" href="#v-pills-apply" role="tab" aria-controls="v-pills-apply" aria-selected="false">Apply</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade admission-home show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                         <a href="#v-pills-login" class="btn btn-success"> Apply </a>
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
                     <div class="tab-pane fade" id="v-pills-login" role="tabpanel" aria-labelledby="v-pills-login-tab">
                         <div class="card">
                             <h5 class="card-header">Login</h5>

                             <div class="card-body">
                                 <form method="POST" action="{{ route('login') }}">
                                     @csrf

                                     <div class="form-group row">
                                         <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                         <div class="col-md-6">
                                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                             @if ($errors->has('email'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                         <div class="col-md-6">
                                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                             @if ($errors->has('password'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('password') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <div class="col-md-6 offset-md-4">
                                             <div class="form-check">
                                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                 <label class="form-check-label" for="remember">
                                                     {{ __('Remember Me') }}
                                                 </label>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group row mb-0">
                                         <div class="col-md-8 offset-md-4">
                                             <button type="submit" class="btn btn-primary">
                                                 {{ __('Login') }}
                                             </button>

                                             @if (Route::has('password.request'))
                                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                                     {{ __('Forgot Your Password?') }}
                                                 </a>
                                             @endif
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>

                     </div>
                     <div class="tab-pane fade" id="v-pills-apply" role="tabpanel" aria-labelledby="v-pills-apply-tab">
                         <div class="card">
                             <h5 class="card-header">Apply</h5>

                             <div class="card-body">
                                 <form method="POST" action="{{ route('login') }}">
                                     @csrf

                                     <div class="form-group row">
                                         <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                         <div class="col-md-6">
                                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                             @if ($errors->has('email'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                         <div class="col-md-6">
                                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                             @if ($errors->has('password'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('password') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <div class="col-md-6 offset-md-4">
                                             <div class="form-check">
                                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                 <label class="form-check-label" for="remember">
                                                     {{ __('Remember Me') }}
                                                 </label>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group row mb-0">
                                         <div class="col-md-8 offset-md-4">
                                             <button type="submit" class="btn btn-primary">
                                                 {{ __('Login') }}
                                             </button>

                                             @if (Route::has('password.request'))
                                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                                     {{ __('Forgot Your Password?') }}
                                                 </a>
                                             @endif
                                         </div>
                                     </div>
                                 </form>
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
