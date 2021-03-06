@extends('layouts.frontend.app')

@section('title', 'Admission | Support' )
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
                    <h5 class="card-header bg-success text-light">Drop a Message for Support</h5>

                    <div class="card-body">
                        <form method="POST" action="{{ route('submit.contact') }}" class="validate">
                            @csrf
                            <input type="hidden" name="type" value="2" required>
                            <div class="row">
                                 <div class="col">
                                     <div class="form-group">
                                         <input type="text" name="name" class="form-control" placeholder="Your Name *" value="{{ old('name') }}" required/>
                                     </div>
                                     <div class="form-group">
                                         <input type="email" name="email" class="form-control" placeholder="Your Email *" value="{{ old('email') }}" required />
                                     </div>
                                     <div class="form-group">
                                         <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="{{ old('phone') }}"required />
                                     </div>

                                 </div>
                                 <div class="col">
                                     <div class="form-group">
                                         <input type="text" name="subject" class="form-control" placeholder="Subject *" value="{{ old('subject') }}"  required/>
                                     </div>

                                     <div class="form-group">
                                         <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"required>{{ old('message') }}</textarea>
                                     </div>
                                 </div>

                             </div>
                             <div class="form-group row mb-0">
                                 <div class="col-md-8 offset-md-4">
                                     <button type="submit" class="btn btn-primary">
                                         {{ __('Send Message') }}
                                     </button>


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
