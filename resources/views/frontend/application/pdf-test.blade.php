
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Download Information</title>
	<style>
        *{ margin: 0; padding: 0;}
		.con{ margin: 20 auto; padding: 50px; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .float-left { float:left; }
        .float-right { float:right; }
        .clear-both { clear: both;}
        .overflow { overflow: hidden;}
        h4 { padding: 10px 0;}
        .border { border-bottom: 2px #eee solid; margin-bottom: 15px;}

        .header-info { height: 160px; font-size: 18px;}
        .header-info h3 { font-size: 26px;}
        .header-info div { font-size: 18px;}
        .info { width: 80%;}
        .img-info img { height: 150px; width:140px; border: 1px solid #dee2e6;}
        .personal-info { height: 25%; padding: 10px; margin: 15px 0;}
        .personal-left { width: 50%;}
        .personal-right {  width: 50%;}
        .personal-details { display: block;  height: 20px; clear: left}
        .personal-title { width: 120px;}
        .personal-value { width: 240px;}

		.table{
            width: 100%;
        }
        .pd-0 { padding: 0 !important;}
        .th-wid { width: 160px;}
		.table td, .table th {
            padding: .5rem;
        }
        .table th { font-size: 14px;}
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        table {
            border-collapse: collapse;
        }
        .table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
            background-color: #eee;
        }
	</style>
</head>
<body>
	<div class="con">
		<div class="header-info ">
			<div class="info float-left text-center">
                <h3> <strong>{{ $applicant->name }}</strong> </h3>
                <div><strong>Contact No : </strong> {{ $applicant->phone }}</div>
                <div><strong>Email : </strong> {{ $applicant->email }}</div>
                <div>
                    <strong>Semester : </strong>
                    {{ ($applicant->semester == 1 ) ? 'Spring' : ''}}
                    {{ ($applicant->semester == 2 ) ? 'Summer' : ''}}
                    {{ ($applicant->semester == 3 ) ? 'Fall' : ''}}
                    </div>
                <div><strong>Year : </strong> {{ $applicant->year }}</div>
                <div><strong>Shift : </strong> {{ ( $applicant->shift == 1 ) ? 'Day' : 'Evening'  }}</div>

            </div>
			<div class="img-info float-right">
                <img src="{{asset('storage/admission/'.auth()->guard('application')->user()->image) }}" alt="">
            </div>
        </div>
        <h4 class="border">Personal Information</h4>
		<div class="personal-info  clear-both ">
            <table class="table">
                <tr>
                    <th class="th-wid">Father's Name</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">{{ $applicant->fname }}</td>
                </tr>
                <tr>
                    <th class="th-wid">Mother's Name</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">{{ $applicant->mname }}</td>
                </tr>
                <tr>
                    <th class="th-wid">Date of Birth</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">{{ $applicant->dob }}</td>
                </tr>
                <tr>
                    <th class="th-wid">Gender</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">
                        {{ ($applicant->gender == 1 ) ? 'Male' : ''}}
                        {{ ($applicant->gender == 2 ) ? 'Female' : ''}}
                        {{ ($applicant->gender == 3 ) ? 'Others' : ''}}
                    </td>
                </tr>
                <tr>
                    <th class="th-wid">Guardian Name</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">{{ $applicant->guardian }}</td>
                </tr>
                <tr>
                    <th class="th-wid">Relation with Guardian</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">{{ $applicant->guardian_relation }}</td>
                </tr>
                <tr>
                    <th class="th-wid">Present Address</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">{{ $applicant->present_address }}</td>
                </tr>
                <tr>
                    <th class="th-wid">Parmanent Address</th>
                    <th class="pd-0">:</th>
                    <td colspan="25">{{ $applicant->parmanent_address }}</td>
                </tr>
            </table>
        </div>

        <h4 class="border clear-both">Academic Information</h4>

        <div class="purchase-item border clear-both">


            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Exam Title</th>
                        <th>Roll No. </th>
                        <th>Reg No. </th>
                        <th>Institute</th>
                        <th>Group / Concentration</th>
                        <th>Result</th>
                        <th>Passing Year</th>
                        <th>Board</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $applicant->academics as $key => $data )
                    <tr>
                        <th>{{ $key + 1 }}</th>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->roll }}</td>
                        <td>{{ $data->reg }}</td>
                        <td>{{ $data->institute }}</td>
                        <td>{{ $data->group }}</td>
                        <td>{{ $data->result }}</td>
                        <td>{{ $data->passing_year }}</td>
                        <td>{{ $data->board }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <h4 class="border">Choice List</h4>

        <div class="purchase-item border clear-both">


            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.L</th>
                        <th>Programe Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $applicant->programs as $key => $data )
                    <tr>
                        <th>{{ $key + 1 }}</th>
                        <td>{{ $data->name }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>


    </div>
</body>
</html>
