@extends('layouts.backend.app')

@section('title','Admin | Applications')

@push('css')
<style>
    .pd-0 { padding: 0;}
    .mt-10 { margin-top: 10px;}
    .mb-10 { margin-bottom: 10px;}
    .marksheet img {
    	height: 444px;
    	width: 100%;
    }
</style>

@endpush
@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
            <div class="card">
                <div class="header">
                    <h2>Information of {{ $application->name }}</h2>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-md-9 text-center mt-10 mb-10">
                            <h3> {{ $application->name}}</h3>

                            <div class="mt-10"><strong>Appling For : </strong> {{ ($application->level == 1 ) ? 'Under Graduate' : 'Post Graduate'  }}</div>
                            <div><strong>Semester : </strong>
                                {{ ($application->semester == 1) ? 'Spring' : '' }}
                                {{ ($application->semester == 2) ? 'Summer' : '' }}
                                {{ ($application->semester == 3) ? 'Fall' : '' }}
                            </div>
                            <div><strong>Year : </strong> {{ $application->year }}</div>
                            <div class="mb-10"><strong>Shift : </strong>
                                {{ ($application->shift == 1) ? 'Day' : 'Evening'}}

                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('storage/admission/'. $application->image ) }}" class="" height="150" alt="">
                        </div>
                    </div>
                    <table class="table table-striped table-bordered">
                        <tr>

                            <th>Father's Name</th>
                            <td>{{ $application->fname }}</td>
                            <th>Mother's Name</th>
                            <td>{{ $application->mname }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $application->dob }}</td>
                            <th>Gender</th>
                            <td>
                                {{ ($application->gender == 1 ) ? 'Male' : ''}}
                                {{ ($application->gender == 2 ) ? 'Female' : ''}}
                                {{ ($application->gender == 3 ) ? 'Others' : ''}}
                            </td>

                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $application->phone }}</td>
                            <th>Email</th>
                            <td>{{ $application->email }}</td>
                        </tr>
                        <tr>
                            <th>Guardian Name</th>
                            <td>{{ $application->guardian }}</td>
                            <th>Relation</th>
                            <td>{{ $application->guardian_relation }}</td>
                        </tr>
                        <tr>

                            <th>Present Address</th>
                            <td>{{ $application->present_address }}</td>
                            <th>Parmanent Address</th>
                            <td>{{ $application->parmanent_address }}</td>
                        </tr>
                        <tr>
                            <th>Nationality</th>
                            <td>{{ $application->nationality }}</td>
                        </tr>
                    </table>
                    <div class="header">
                        <h5> Programs Information</h5>
                    </div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Program Name</th>
                                <th>Short Name</th>
                                <th>Faculty</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $application->programs as $key => $data )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->short_name }}</td>
                                <td>{{ $data->department->name }}</td>
                                <td>{{ ($data->level == 1 ) ? 'Under Graduate' : 'Post Graduate'  }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-header">
                        <h5>Academic Information</h5>
                    </div>

                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Exam Title</th>
                          <th scope="col">Roll No. </th>
                          <th scope="col">Registration No. </th>
                          <th scope="col">Institute</th>
                          <th scope="col">Group / Concentration</th>
                          <th scope="col">Result</th>
                          <th scope="col">Passing Year</th>
                          <th scope="col">Board</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach( $application->academics as $key => $data )
                        <tr>
                          <th scope="row">{{ $key + 1 }}</th>
                          <td>{{ $data->title }}</td>
                          <td>{{ $data->roll }}</td>
                          <td>{{ $data->reg }}</td>
                          <td>{{ $data->institute }}</td>
                          <td>{{ $data->group }}</td>
                          <td>{{ $data->result }}</td>
                          <td>{{ $data->passing_year }}</td>
                          <td>{{ $data->board }}</td>

                        </tr>
                        <tr>
                            <td colspan="9" class="text-center marksheet">
                                <img src="{{ asset('storage/admission/academic/'.$data->marksheet) }}" alt="" height="400">
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    <div class="col text-center">


                        @if( $application->approved == 1 )
                        <button type="button" class="btn btn-success btn-lg" disabled>Approved</button>
                        @else
                        <a href="{{ route('admin.applications.approved', $application->id) }}" class="btn btn-lg btn-success ">Approve</a>

                        @endif
                        <button type="button" class="btn btn-danger btn-lg" onclick="if(confirm('Are You sure want To Delete?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $application->id }}').submit();
                        } else {
                        event.preventDefault();
                        }">Delete</button>

                        <form id="delete-form-{{ $application->id }}" style="display: none;" action="{{   route('admin.applications.delete', $application->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
