@extends('layouts.frontend.app')

@section('title','EUB | Home')

@push('css')
    <style>
        .testi_item { border: 0 solid #000 !important; }
    </style>
@endpush

@section('content')
    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                 data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">


                    <h3>We Ensure better education <br/>for a better world</h3>
                    <p>WE SHAPE YOUR DREAM </p>
                    <a class="main_btn" href="{{ route('admission.register') }}">Get Started</a>
                </div>
            </div>
        </div>
    </section>




    <section class="team_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Meet Our Faculty</h2>

            </div>
            <hr>
            <section class="finance_area">
                <div class="container">
                    <div class="finance_inner row">
                        <div class="col-lg-4 col-sm-8">
                            <div class="finance_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <i class="lnr lnr-rocket"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>Business &<br/>Endustrial Mgt </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-8">
                            <div class="finance_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <i class="lnr lnr-earth"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>Faculty of Arts & <br/>Social science </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-8">
                            <div class="finance_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <i class="lnr lnr-smile"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5>Faculty of Science & <br/>Engineering</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

        </div>

<br>
<br>
        <!--================End Team Area =================-->

        <!--================Testimonials Area =================-->

            <div class="container">
                <div class="testi_slider owl-carousel ">
                    <div class="item">


                        <div class="main_title">

                            <h2> Our Departments</h2>
                            <br>


                            <hr>
                        </div>

                        <div class="row team_inner testi_item">


                            <div class="col-lg-3 col-sm-12">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/civil.png" alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Civil Engineering</h4>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/Electronics-and-Telecommunication-Engineering.png"
                                             alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Electrical & Electronic Engineering</h4>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img ">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/textile.png" alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Textile Engineering</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/Computer-Science-and-Engineering.png"
                                             alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Computer Science & Engineering</h4>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <br>
                        <br>
                        <br>
                        <br>


                        <div class="row team_inner testi_item">
                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/Business-Studies.png" alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Business</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/English-Studies.png" alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">English</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/Law.png" alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Law</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/Tourism-Hospitality-Management.png"
                                             alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Tourism & Hospitality Management</h4>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="row team_inner testi_item">

                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/Economics.png" alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">Economics</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="rounded-circle col-lg-6"
                                             src="{{asset('/frontend/')}}/img/departmant/ME-IPE.png" alt="">

                                    </div>
                                    <div class="team_name">
                                        <h4 class="col-lg-12">MIPE</h4>

                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>


            </div>
        <br>
        <br>
        <br>

  <hr>

            <div class="container">
                <div class="row packages_inner">
                    <div class="col-lg-12">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="lnr lnr-graduation-hat"></i>
                                <h3>Our Programs</h3>

                            </div>
                            <br>
                            <div class="pack_body">

                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <th scope="col-lg-12">Undergraduate Programs</th>
                                        <th scope="col">  Graduate Programs</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>Civil Engineering</td>
                                        <td>MBA</td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>Electrical & Electronic Engineering</td>
                                        <td>E MBA</td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>Textile Engineering</td>
                                        <td>MA in English</td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>Computer Science Engineering</td>
                                        <td>LL.M</td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>Business Administration ( BBA )</td>
                                        <td>Masters in Engineering Management(MEM)</td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>Law (LLB-Hons)</td>
                                        <td></td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>B.A (Honours) in English</td>
                                        <td></td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>Tourism and Hospitality Management</td>
                                        <td></td>

                                    </tr>
                                    <tr style="font-style:normal;color: #0D0A0A; font-size:15px">

                                        <td>BSS (Hons. in Economics)</td>
                                        <td></td>

                                    </tr><tr>

                                        <td style="font-style:normal;color: #0D0A0A; font-size:15px">Mechanical and Industrial Production Engineering</td>
                                        <td></td>

                                    </tr>
                                    </tbody>
                                </table>




                            </div>




                        </div>
                    </div>

                </div>
            </div>


        <section class="impress_area p_120">
            <div class="container">
                <div class="impress_inner text-center">

                    <h2>WE SHAPE YPUR DREAMS</h2>

                </div>
            </div>
        </section>





@endsection
