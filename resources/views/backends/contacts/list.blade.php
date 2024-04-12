@extends('backends._layout')
@section('content')
    <div class="d-flex justify-content-between">
        <h3>CONTACT List</h3>
        <div class="button-block">
            <a href="{{ route('client.create') }}" class="btn btn-primary btn-sm">Create</a>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th style="width: 150px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($model as $indx => $el)
                <tr>
                    <td>{{++$indx}}</td>
                    <td>{{$el->your_name}}</td>
                    <td>{{$el->email}}</td>
                    <td>{{$el->subject}}</td>
                    <td>
                        <a href="{{ route('contact.show',['id'=>$el->id]) }}" class="btn btn-primary btn-sm"><i
                                class="bi bi-info-lg"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
