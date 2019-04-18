@extends('layouts.frontend.app')

@section('title','EUB | Certification')
@push('css')

@endpush

@section('content')

    <div class="container mt-200">
        <div class="row">
            <div class="col-lg-6  col-md-12 col-sm-12">

                <figure class="figure">
                    <img src="{{asset('/frontend/')}}/img/European-University-Of-Bangladesh.jpg  "
                         class="figure-img img-fluid rounded"
                         alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="figure-caption">European University Of Bangladesh</figcaption>
                </figure>

            </div>

            <div class="col-lg-6  col-md-12 col-sm-12">
                <figure class="figure">
                    <h1><span class="badge badge-secondary">Certification of the University</span></h1>
                    <h5 style="font-style:normal;color: #0D0A0A; font-size:17px">European University of Bangladesh is approved<br> by
                        University Grants Commission (UGC)
                        and<br>
                            Govt. of the People’s Republic of Bangladesh.</h5>
                </figure>
            </div>


        </div>

    </div>









@endsection
