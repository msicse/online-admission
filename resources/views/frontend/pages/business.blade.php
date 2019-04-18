@extends('layouts.frontend.app')

@section('title','EUB | Business and Industrial Mgt.')

@section('content')

    <div class="container">
        <h4 class="row">
            <p class="col-lg-12  col-md-12 col-sm-12">


                <br>
                <img style="width: 100%; height: 300px" src="{{asset('/frontend/')}}/img/business.jpg" alt="">
                <br>
                <br>
            <h4 style="font-style: normal;color: #000000;"> Bachelor of Business Administration (BBA) / MBA / E MBA</h4>
            <hr>

            <table border="1" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr style="background: #000000; color: #fff;">
                    <td rowspan="2" valign="middle">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>Courses
                                Name</strong></h5>
                        <div align="left"></div>
                    </td>
                    <td rowspan="2" valign="middle">
                        <h5 style="color: #fff;" align="center"><strong>Credit</strong></h5>
                        <div align="center"></div>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Duration</strong></h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Tuition Fee</strong></h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Tuition Fees</strong></h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Others</strong></h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Total</strong></h5>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Semesters</strong></h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Per Credit</strong></h5>
                    </td>
                    <td style="color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Total</strong></h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Total</strong></h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center"><strong>Fees</strong></h5>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td valign="bottom">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left;"><strong>BBA (4
                                Years)</strong></h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center;">136</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">12</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,900.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">2,58,400.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">1,02,000.00</h5>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h5 style="color: #fff;" align="center">3,60,400.00</h5>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td valign="bottom">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left;"><strong>MBA (2
                                Years)</strong></h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center;">63</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">6</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,700.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">1,07,100.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">56,000.00</h5>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,63,100.00</h5>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td valign="bottom">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left;"><strong>MBA (BBA
                                Graduate)</strong></h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center;">36</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">3</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,950.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">70,200.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">34,000.00</h5>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,04,200.00</h5>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td valign="bottom">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left;"><strong>E
                                MBA</strong></h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center;">48</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">4</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,850.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">88,800.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">41,400.00</h5>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,30,200.00</h5>
                    </td>
                </tr>
                </tbody>
            </table>

            <br>
            <br>





            <h4 style="font-style: normal;color: #000000;"> Bachelor of Tourism & Hospitality Management (BTHM)</h4>
            <hr>

            <table border="1" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr style="background: #000000; color: #fff;">
                    <td rowspan="2" valign="middle">
                        <p style="text-align: left; margin-left: 10px;" align="left"><strong>Courses Name</strong></p>
                        <div align="left"></div>
                    </td>
                    <td rowspan="2" valign="middle">
                        <p align="center"><strong>Credit</strong></p>
                        <div align="center"></div>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Duration</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Tuition Fee</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Tuition Fees</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Others</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Total</strong></p>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td valign="bottom">
                        <p align="center"><strong>Semesters</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Per Credit</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Total</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Total</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Fees</strong></p>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td valign="bottom">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left;"><strong>Tourism
                                &amp; Hospitality Mgt.</strong></h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center;">126</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">12</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,250.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">1,57,500.00</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">88,000.00</h5>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h5 style="color: #fff;" align="center">2,45,500.00</h5>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <br>

            <h4 style="font-style: normal;color: #000000;"> MBA in Engineering Management(MEM)</h4>
            <hr>

            <table border="1" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr style="background: #000000; color: #fff;">
                    <td rowspan="2" valign="middle">
                        <p style="text-align: left; margin-left: 10px;" align="left"><strong>Courses Name</strong></p>
                        <div align="left"></div>
                    </td>
                    <td rowspan="2" valign="middle">
                        <p align="center"><strong>Credit</strong></p>
                        <div align="center"></div>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Duration</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Tuition Fee</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Tuition Fees</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Others</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Total</strong></p>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td valign="bottom">
                        <p align="center"><strong>Semesters</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Per Credit</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Total</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Total</strong></p>
                    </td>
                    <td valign="bottom">
                        <p align="center"><strong>Fees</strong></p>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td valign="bottom">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left;"><strong>MEM</strong>
                        </h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center;">63</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">6</h5>
                    </td>
                    <td style="text-align: center; color: #fff;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1700/-</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">1,07,100/-</h5>
                    </td>
                    <td valign="bottom">
                        <h5 style="color: #fff;" align="center">56,000/-</h5>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h5 style="color: #fff;" align="center">1,63,100/-</h5>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <br>
            <h4 style="font-style: normal;color: #000000;">  Master of Business Administration(Regular)</h4>
            <hr>
            <h4 style="font-style: normal;color: #000000;">Duration of the Program: 2 years</h4>
            <h4 style="font-style: normal;color: #000000;">Course Structure:</h4>
            <br>

            <table style="height: 190px;" border="1" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr style="background: #000000; color: #fff;">
                    <td valign="top" width="175">
                        <div style="text-align: left; padding-left: 10px;" align="center"><strong>Course Category</strong></div>
                    </td>
                    <td valign="top" width="144">
                        <div align="center"><strong>No. of Courses</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>Credit per Course</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>Total Credits</strong></div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td style="text-align: left; padding-left: 10px;" valign="top" width="175">General Education (GE)</td>
                    <td valign="top" width="144">
                        <div align="center">6</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">18</div>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td style="text-align: left; padding-left: 10px;" valign="top" width="175">Core</td>
                    <td valign="top" width="144">
                        <div align="center">10</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">30</div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td style="text-align: left; padding-left: 10px;" valign="top" width="175">Major</td>
                    <td valign="top" width="144">
                        <div align="center">4</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">12</div>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td style="text-align: left; padding-left: 10px;" valign="top" width="175">Project</td>
                    <td valign="top" width="144">
                        <div align="center">1</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td valign="top" width="175">
                        <div style="text-align: left; padding-left: 10px;" align="center"><strong>Total</strong></div>
                    </td>
                    <td valign="top" width="144">
                        <div align="center"><strong>21</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>3</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>63</strong></div>
                    </td>
                </tr>
                </tbody>
            </table>




            <br>
            <br>


            <h4 style="font-style: normal;color: #000000;">  Master of Business Administration(Executive)</h4>
            <hr>
            <h4 style="font-style: normal;color: #000000;">   Duration of the Program: 1 year 4 months</h4>
            <h4 style="font-style: normal;color: #000000;">   Course Structure:</h4>
            <br>
            <table style="height: 186px;" border="1" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr style="background: #000000; color: #fff;">
                    <td valign="top" width="175">
                        <div style="text-align: left; padding-left: 10px;" align="center"><strong>Course Category</strong></div>
                    </td>
                    <td valign="top" width="144">
                        <div align="center"><strong>No. of Courses</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>Credit per Course</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>Total Credits</strong></div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td style="padding-left: 10px;" valign="top" width="175">General</td>
                    <td valign="top" width="144">
                        <div align="center">5</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">15</div>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td style="padding-left: 10px;" valign="top" width="175">Core</td>
                    <td valign="top" width="144">
                        <div align="center">5</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">15</div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td style="padding-left: 10px;" valign="top" width="175">Major</td>
                    <td valign="top" width="144">
                        <div align="center">5</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">15</div>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td style="padding-left: 10px;" valign="top" width="175">Project</td>
                    <td valign="top" width="144">
                        <div align="center">1</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td valign="top" width="175">
                        <div style="text-align: left; padding-left: 10px;" align="center"><strong>Total</strong></div>
                    </td>
                    <td valign="top" width="144">
                        <div align="center"><strong>16</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>3</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>48</strong></div>
                    </td>
                </tr>
                </tbody>
            </table>

            <br>
            <br>
            <h4 style="font-style: normal;color: #000000;">  Master of Business Administration(1 Year Program)</h4>
            <hr>
            <h4 style="font-style: normal;color: #000000;">   Duration of the Program: 1 year</h4>
            <h4 style="font-style: normal;color: #000000;">   Course Structure:</h4>
            <br>


            <table style="height: 168px;" border="1" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr style="background: #000000; color: #fff;">
                    <td valign="top" width="175">
                        <div style="text-align: left; padding-left: 10px;" align="center"><strong>Course Category</strong></div>
                    </td>
                    <td valign="top" width="144">
                        <div align="center"><strong>No. of Courses</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>Credit per Course</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>Total Credits</strong></div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td style="padding-left: 10px;" valign="top" width="175">Core</td>
                    <td valign="top" width="144">
                        <div align="center">6</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">18</div>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td style="padding-left: 10px;" valign="top" width="175">Major</td>
                    <td valign="top" width="144">
                        <div align="center">5</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">15</div>
                    </td>
                </tr>
                <tr style="background: #302121; color: #fff;">
                    <td style="padding-left: 10px;" valign="top" width="175">Project</td>
                    <td valign="top" width="144">
                        <div align="center">1</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center">3</div>
                    </td>
                </tr>
                <tr style="background: #000000; color: #fff;">
                    <td valign="top" width="175">
                        <div style="text-align: left; padding-left: 10px;" align="center"><strong>Total</strong></div>
                    </td>
                    <td valign="top" width="144">
                        <div align="center"><strong>12</strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>             </strong></div>
                    </td>
                    <td valign="top" width="160">
                        <div align="center"><strong>36</strong></div>
                    </td>
                </tr>
                </tbody>
            </table>




            <br>


















            </p>
        </h4>
    </div>





@endsection
