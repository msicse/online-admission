
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Purchases Invoice</title>
	<style>
        *{ margin: 0; padding: 0;}
		.con{ margin: 20 auto; padding-right: 20px ; width: 720px; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .float-left { float:left; }
        .float-right { float:right; }
        .clear-both { clear: both;}
        .overflow { overflow: hidden;}
        h4 { padding: 10px 0;}
        .border { border-bottom: 2px #eee solid; margin-bottom: 5px;}

        .header-info { height: 220px;}
        .info { width: 70%;}
        .img-info img { height: 200px; width:200px; border: 1px solid #eee;}
        .personal-info { height: 15%; padding: 10px; }
        .personal-left { width: 50%;}
        .personal-right {  width: 50%;}
        .personal-details { display: block;  height: 30px;}
        .personal-title { width: 120px;}
        .personal-value { width: 240px;}

		.table{
            width: 100%;
        }
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
            background-color: #eee; // Choose your own color here
        }
	</style>
</head>
<body>
	<div class="con">
		<div class="header-info ">
			<div class="info float-left text-center">
                <h3>{{ $applicant->name }} </h3>
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


            <div class="personal-left float-left ">
                <div class="personal-details">
                    <div class="personal-title float-left">
                        <strong>Father's Name</strong>
                    </div>
                    <div class="personal-value float-right">
                        <strong>:</strong> {{ $applicant->name }}
                    </div>
                </div>
                <div class="personal-details">
                    <div class="personal-title float-left">
                        <strong>Date of Birth</strong>
                    </div>
                    <div class="personal-value float-right">
                        <strong>:</strong> {{ $applicant->dob }}
                    </div>
                </div>
                <div class="personal-details ">
                    <div class="personal-title float-left">
                        <strong>Guardian Name</strong>
                    </div>
                    <div class="personal-value float-right">
                        <strong>:</strong> {{ $applicant->guardian }}
                    </div>
                </div>
                <div class="personal-details ">
                    <div class="personal-title float-left">
                        <strong>Present Address</strong>
                    </div>
                    <div class="personal-value float-right">
                        <strong>:</strong> {{ $applicant->present_address }}
                    </div>
                </div>

            </div>
            <div class="personal-right float-left ">
                <div class="personal-details ">
                    <div class="personal-title float-left">
                        <strong>Mother's Name</strong>
                    </div>
                    <div class="personal-value float-right">
                        <strong>:</strong> {{ $applicant->mname }}
                    </div>
                </div>

                <div class="personal-details ">
                    <div class="personal-title float-left">
                        <strong>Gender</strong>
                    </div>
                    <div class="personal-value float-right ">
                        <strong>:</strong>
                        {{ ($applicant->gender == 1 ) ? 'Male' : ''}}
                        {{ ($applicant->gender == 2 ) ? 'Female' : ''}}
                        {{ ($applicant->gender == 3 ) ? 'Others' : ''}}
                    </div>
                </div>
                <div class="personal-details ">
                    <div class="personal-title float-left">
                        <strong>Relation</strong>
                    </div>
                    <div class="personal-value float-right ">
                        <strong>:</strong> {{ $applicant->guardian_relation }}
                    </div>
                </div>
                <div class="personal-details ">
                    <div class="personal-title float-left">
                        <strong>Permanent Address</strong>
                    </div>
                    <div class="personal-value float-right ">
                        <strong>:</strong> {{ $applicant->parmanent_address }} ywgydvid hwb ygbvfyBEDBAJVBC gwqeygfcyvd geq7gfvgrdgfsy
                    </div>
                </div>
            </div>

        </div>

        <h4 class="border">Academic Information</h4>

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
                            <td style="text-transform: uppercase;">{{ strToUpper($data->title) }}</td>
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

            <h4 class="border">Academic Information</h4>

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


    </div>
</body>
</html>
