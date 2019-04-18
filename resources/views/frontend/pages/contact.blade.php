@extends('layouts.frontend.app')

@section('title','EUB | Contact')

@section('content')


    <br>
    <br>
    <div class="container mt-150">
        <div class="col-lg-12">
            <h1 class="text-center text-success">European University of Bangladesh</h1>
            <hr/>
            <br>

            <div class="row">

                <div class="col-sm-6">


                    <p style="font-style:normal;color: #0D0A0A; font-size:15px; text-align: justify">The European
                        University of Bangladesh (Bengali: ইউরোপিয়ান বিশ্ববিদ্যালয়) or (EUB) is a private
                        university located at Dhaka, Bangladesh. The university was established in 2012 under the
                        Private
                        University Act, 1992.[1] European University of Bangladesh (EUB) is a third generation private
                        university aiming at providing modern education of European standard in Bangladesh. It has been
                        accredited by the Government of the People’s Republic of Bangladesh, curricula and academic
                        while
                        its programs have been approved by the University Grants Commission (UGC). It was established
                        under
                        the Private University Act 2010 with the approval of the Government of Bangladesh on 14 March
                        2012
                        for awarding degrees in various fields. The President of the People’s Republic of Bangladesh is
                        the
                        Chancellor of European University of Bangladesh. The University applies student- centred
                        teaching
                        and learning methods, pursues applied research and encourages creative activities with the
                        objective
                        of producing world-class professionals to meet national and international standard, as well as,
                        the
                        requirement of its graduates for their career development and employment. We are constantly
                        investing in our campus and facilities to ensure all students have a world-class teaching and
                        learning environment, state-of-the-art facilities and enhancing the vibrancy of the campus
                        experience to make students time in EUB truly one to cherish. The University is located at the
                        heart
                        of the Dhaka City at prestigious institutional zone of Shyamoli (opposite to Sohrawardi Medical
                        College) with well-connected communication system. It has two campuses. The main campus situated
                        at
                        Rupayan Shelford, Plot # 23/6, Block # B, Mirpur Road, Shyamoli, Dhaka, Bangladesh. Other campus
                        is
                        located at Janata Housing, Plot # 211 & 212, Shah Ali-Bag, Mirpur-2, Dhaka-1216, Bangladesh.</p>


                    <h4 style="font-style: normal;color: #4a148c">Campus Location</h4>
                    <p style="font-style:normal;color: #0D0A0A; font-size:15px">Address: 2/4 Gabtoli Mirpur Dhaka
                        1216<br>
                        Phone: 01968774927, 01968774933, 01968774928, 01968774930-32<br>
                        Number of students: 16,000<br>
                        Founded: 2012<br>
                        Motto: We Shape your Dream<br>
                        Admission Office<br>
                        Address: 2/4 Gabtoli, Dhaka Bangladesh<br>
                        Phone:01968774927, 01968774933, 01968774928, 01968774930-32<br>
                        Motto: We Shape your Dream<br></p>


                </div>


                <div class="col-sm-6">


                    <form class="form-horizontal" action="index.html" method="GET">


                        <div class="form-group" style="font-style:normal;color: #0D0A0A; font-size:15px; text-align: justify">

                            <label for="full_name" class="col-sm-3">Full Name</label>
                            <div class="col-sm-12">


                                <input id="full_name" required maxlength="10"
                                       type="text" name="first_name" class="form-control">

                            </div>


                        </div>


                        <div class="form-group" style="font-style:normal;color: #0D0A0A; font-size:14px; text-align: justify">

                            <label for="email" class="col-sm-3">Email Address</label>
                            <div class="col-sm-12">


                                <input id="email" type="email" required name="email_address" class="form-control">

                            </div>


                        </div>


                        <div class="form-group" style="font-style:normal;color: #0D0A0A; font-size:14px; text-align: justify">

                            <label for="phone_number" class="col-sm-3">Phone Nuumber</label>
                            <div class="col-sm-12">


                                <input id="phone_number"  required type="number" name="phone_number"  class="form-control">

                            </div>


                        </div>



                        <div class="form-group" style="font-style:normal;color: #0D0A0A; font-size:14px; text-align: justify">

                            <label class="col-sm-12">Gender</label>
                            <div class="col-sm-9 radio">


                                <label> <input type="radio" value="Male" name="gender">Male</label>
                                <label> <input type="radio" value="Female" name="gender">Female</label>

                            </div>


                        </div>
                        <div class="form-group" style="font-style:normal;color: #0D0A0A; font-size:14px; text-align: justify">

                            <label  for="message" class="col-sm-3">Message</label>
                            <div class="col-sm-12 ">


                                <textarea id="message" required  class="form-control" name="message"  rows="10" style="resize:none;"></textarea>


                            </div>


                        </div>



                        <div class="form-group" style="font-style:normal;color: #0D0A0A; font-size:14px; text-align: justify">

                            <label class="col-sm-12">District Name</label>
                            <div class="col-sm-3">


                                <select class="form-control" name="district_name" >
                                    <option>--Select a District--</option>
                                    <option>Dhaka</option>
                                    <option>Rajshahi</option>
                                    <option>Bogra</option>
                                    <option>Rangpur</option>
                                    <option>Notore</option>
                                    <option>Foridpur</option>
                                    <option>Jamalpur</option>
                                    <option>Pabna</option>


                                </select>


                            </div>


                        </div>

                        <div class="form-group" style="font-style:normal;color: #0D0A0A; text-align: justify">

                            <label class="col-sm-3"><input required type="checkbox" name="agree">I Agree ............</label>
                            <div class="col-sm-9">




                            </div>


                        </div>



                        <div class="form-group">


                            <div class="col-sm-9 col-sm-offset-3">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Submit">

                            </div>
                        </div>


                    </form>


                </div>
            </div>


        </div>

    </div>







@endsection
