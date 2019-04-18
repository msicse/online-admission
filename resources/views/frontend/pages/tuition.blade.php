@extends('layouts.frontend.app')

@section('title','EUB | Tuition Fees')

@section('content')

<br>

    <div class="container mt-150">
        <h4 class="row">
            <p class="col-lg-12  col-md-12 col-sm-12">

            <table border="1" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr style="background: #070300">
                    <td rowspan="2" valign="middle">
                        <h5 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>Courses Name</strong></h5>
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
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>Semesters</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>Per Credit</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>Total</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>Total</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>Fees</strong></h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left;"><strong>BBA (4 Years)</strong></h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">136</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">1,900.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,58,400.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,02,000.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">3,60,400.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>MBA (2 Years)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">63</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">6</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="text-align: center; color: #fff;" align="right">1,700.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,07,100.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">56,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,63,100.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>MBA (BBA Graduate)</strong></h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">36</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">3</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">1,950.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">70,200.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">34,000.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">1,04,200.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>E MBA</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">48</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">4</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="text-align: center; color: #fff;" align="right">1,850.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">88,800.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">41,400.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,30,200.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>BSS (Hons. in Economics)</strong></h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">141</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">1,519.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">2,14,179.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">1,02,000.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">3,16,179.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>MSS in Economics (1 year)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">36</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="text-align: center; color: #fff;" align="right">1,600.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">57,600.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">34,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">91,600.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>MSS in Economics (2 year)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">69</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">6</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,311.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">90,459.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">56,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,46,459.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>MGDS (1 year)</strong></h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">39</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">3</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">1,453.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">56,667.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">34,000.00</h6>
                    </td>
                    <td style="text-align: center;" valign="bottom">
                        <h6 style="color: #fff;" align="center">90,667.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc Textile Eng. (Regular)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">165</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,449.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,39,085.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,26,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,65,085.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc Textile Eng.(Diploma Holders)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">140</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">9</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,515.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,12,100.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">88,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,00,100.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc EEE (Regular)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">158</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,549.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,44,742.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,26,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,70,742.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc EEE (Diploma Holders)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">146</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">9</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,450.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,11,700.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">88,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,99,700.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc Civil Eng. (Regular)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">165</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,500.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,47,500.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,26,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,73,500.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc Civil Eng. (Diploma Holders)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">146</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">9</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,507.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,20,022.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">88,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,08,022.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc MIPE (Regular)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">160</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,547.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,47,520.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,26,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,73,520.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc MIPE (Diploma Holders)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">140</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">9</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,572.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,20,080.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">88,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,08,080.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>BA (Hons) in English</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">120</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,167.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,40,040.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">70,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,10,040.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>MA in English (2 Years)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">72</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">6</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">933.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">67,176.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">40,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,07,176.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>MA in English (1 Year)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">36</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">933.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">33,588.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">26,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">59,588.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>LLB (Hons) 4 Years</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">130</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,280.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,66,400.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">64,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,30,400.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>LLB (2 Years)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">56</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">6</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,160.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">64,960.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">37,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,01,960.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>LLM (2 Years)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">72</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">6</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,340.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">96,480.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">37,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,33,480.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>LLM (1 Year)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">36</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,370.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">49,320.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">24,500.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">73,820.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>Tourism &amp; Hospitality Mgt.</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">126</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,250.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,57,500.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">88,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,45,500.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc CSE (Regular)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">160</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">12</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,528.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,44,480.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,26,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,70,480.00</h6>
                    </td>
                </tr>
                <tr style="background: #301704; color: #fff;">
                    <td valign="bottom">
                        <h6 style="text-align: left; margin-left: 10px; color: #fff;" align="left"><strong>B.Sc CSE (Diploma Holders)</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">140</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">9</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">1,515.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">2,12,100.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">88,000.00</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">3,00,100.00</h6>
                    </td>
                </tr>
                <tr style="background: #070300">
                    <td valign="bottom">
                        <h6 style="color: #fff;" data-fontsize="18" data-lineheight="27"><strong>MBA in Engineering Management</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>63</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center">6</h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>1700.00</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>1,07,100.00</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>56,000.00</strong></h6>
                    </td>
                    <td valign="bottom">
                        <h6 style="color: #fff;" align="center"><strong>1,63,100.00</strong></h6>
                    </td>
                </tr>
                </tbody>
            </table>


            </p>
        </h4>
    </div>



    <br>
    <br>


@endsection
