@extends('layouts.frontend.app')

@section('title','EUB | Message')

@section('content')


    <!--================About Area =================-->
    <section class="about_area p_120">
        <div class="container">

            <div class="row about_inner">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Message From Chairman
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body ">


                                    <div class="video_area col-lg-4 " id="video">

                                    <!-- <img src="{{asset('/front/')}}/images/my_photo.png" alt="image">--}} -->

                                        <img class="img-fluid" src="{{asset('/frontend/')}}/img/MP.jpg" alt="">

                                    </div>
                                    <div class="col-lg-12">
                                        <p style="font-style:normal;color: #0D0A0A; font-size:15px">The European
                                            University of Bangladesh has started its journey towards achieving
                                            excellence in higher education in this country. In its consideration, the
                                            fount of progress in Europe has been higher education centering around
                                            science and technology. In search of excellence, the European University of
                                            Bangladesh will, go at length, to emulate the ways traversed by universities
                                            and institutions of higher education and learning in Europe. It will have
                                            unbridled faith in academic freedom, for it believes that in the absence of
                                            freedom to question, criticize, modify and amend, newer ideas cannot be
                                            generated and progress accounted for over time.
                                            In its search of excellence based on the firmest belief in academic freedom,
                                            the European University of Bangladesh will endeavor to attract the best
                                            faculty, line up the efficient administration and pursue an aftercare of
                                            formal education trough a system of fostering and sustaining close contacts
                                            with alumni and continuous education.
                                            In its Board of Trustees, it has already assembled resourceful persons with
                                            passions for excellence in higher education and research. With indefatigable
                                            diligence and a never failing allegiance to the motherland, the Board is
                                            determined to make a difference in these fields and I am confident this will
                                            show up in our programs and works in months and years to come.
                                            We are determined to work harder, assemble the best researchists, setup and
                                            organize well-equipped laboratories and libraries, create the most congenial
                                            environment for learning and give our very best in every relevant field and
                                            area to help and support our students to become the most knowledgeable and
                                            skilled citizens of our country. Ur vision comprises a digital society, a
                                            country aspiring to apply science and technology to attain, sustain and
                                            cherish prosperity in freedom for all citizens.</p>
                                    </div>

                                </div>


                            </div>


                        </div>


                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Message From Vice Chancellor (Prof. Dr. Mokbul Ahmed Khan)
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                    <div class="video_area col-lg-4 " id="video">

                                    <!-- <img src="{{asset('/front/')}}/images/my_photo.png" alt="image">--}} -->

                                        <img class="img-fluid" src="{{asset('/frontend/')}}/img/vice_chairman.jpg"
                                             alt="">

                                    </div>

                                    <p style="font-style:normal;color: #0D0A0A; font-size:15px">It is my great pleasure
                                        to offer a message of goodwill to potential students, guardians, educationists
                                        and other members of the society on behalf of the European University of
                                        Bangladesh (EUB). We shall be more than happy to welcome you at our campus to
                                        exchange and share your views.
                                        The determinants of development have been changing from manufacturing to
                                        services and from capital resources to knowledge resources. Individuals who
                                        develop and maintain high level skills achieve success in economic and social
                                        sector. Every country endeavours to ensure that its citizens are equipped with
                                        knowledge, skills and qualifications they will need in this Millennium. The EUB
                                        is committed to develop not only high quality human resources in the country but
                                        also to earn competitive edge to meet the challenges of globalisation.
                                        Selection of academic programmes and designing of curricula of this university
                                        have been modelled on the knowledge and skills that are essential to participate
                                        in the competitive global industry and trade. We aim at replicating the modern
                                        strategies, systems and procedures of higher educational institutions of the
                                        West through harmonious blending with the eastern social and cultural values.
                                        The EUB is pledge-bound to implement its academic programmes for the youths in
                                        their preferred disciplines giving equal emphasis on proficiency in
                                        communication both in English and computer language.
                                        As CEO I shall ensure the provision of adequate resources, facilities and
                                        expertise for students to achieve academic, personal and career goals in a
                                        stimulating and supportive environment. Our faculty will include a good number
                                        of reputed expatriate professionals to ensure regular interaction and
                                        consultation outside class room to familiarize them with the global scenarios
                                        and widening the horizon of their knowledge.

                                        Having long experiences in teaching at overseas universities and national
                                        management development institute and working with the World Bank, I am committed
                                        to undertake collaborative activities with other public and private universities
                                        at home and abroad for mutual interests.
                                        In conclusion, I would like to reiterate here that all our endeavours and
                                        initiatives will only be successful if all the stakeholders come forward in
                                        extending their whole-hearted and generous cooperation.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>


        </div>
    </section>
    <!--================End About Area =================-->


@endsection