@extends('backends._layout')
@section('content')
    <div class="d-flex justify-content-between">
        <h3>CLIENT List</h3>
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
                <th>Contact</th>
                <th>Message</th>
                <th>IMAGE</th>
                <th>URL</th>
                <th>STATUS</th>
                <th style="width: 150px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($model as $indx => $el)
                <tr>
                    <td>{{++$indx}}</td>
                    <td>{{$el->full_name}}</td>
                    <td>{{$el->email}}</td>
                    <td>{{$el->contact}}</td>
                    <td>{{$el->message}}</td>
                    <td>
                        <img src="{{ $el->getFirstMedia('client_image')->getUrl('thumb-sm') }}" alt="" width="50px">
                    </td>
                    <td><a href="{{ $el->getFirstMedia('client_image')->getUrl()  }}" target="_blank"><i
                                class="bi bi-box-arrow-up-right"></i></a></td>
                    <td>{!! $el->status !!}</td>
                    <td>
                        <a href="{{ route('client.show',['id'=>$el->id]) }}" class="btn btn-primary btn-sm"><i
                                class="bi bi-info-lg"></i></a>
                        <a href="{{ route('client.edit',['id'=>$el->id]) }}" class="btn btn-info btn-sm"><i
                                class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('client.destroy',['id'=>$el->id]) }}" class="btn btn-danger btn-sm"><i
                                class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
