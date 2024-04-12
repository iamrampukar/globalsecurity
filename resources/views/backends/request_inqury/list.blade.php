@extends('backends._layout')
@section('content')
    <div class="d-flex justify-content-between">
        <h3>Request Inquiry List</h3>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Education</th>
                <th>Course</th>
                <th style="width: 150px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($model as $indx => $el)
                <tr>
                    <td>{{++$indx}}</td>
                    <td>{{$el->first_name}}</td>
                    <td>{{$el->last_name}}</td>
                    <td>{{$el->mobile}}</td>
                    <td>{{$el->email}}</td>
                    <td>{{$el->education}}</td>
                    <td>{{$el->course}}</td>

                    <td>
                        <a href="{{ route('request_inquiry.show',['id'=>$el->id]) }}" class="btn btn-primary btn-sm"><i
                                class="bi bi-info-lg"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
