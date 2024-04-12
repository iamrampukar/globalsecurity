@extends('backends._layout')
@section('content')
    <div class="d-flex justify-content-between">
        <h3>FAQ List</h3>
        <div class="button-block">
            <a href="{{ route('faq.create') }}" class="btn btn-primary btn-sm">Create</a>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Question</th>
                <th>Answer</th>
                <th>STATUS</th>
                <th style="width: 150px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($model as $indx => $el)
                <tr>
                    <td>{{++$indx}}</td>
                    <td>{{$el->question}}</td>
                    <td>{{ $el->answer }}</td>
                    <td>{!! $el->status !!}</td>
                    <td>
                        <a href="{{ route('faq.show',['id'=>$el->id]) }}" class="btn btn-primary btn-sm"><i
                                class="bi bi-info-lg"></i></a>
                        <a href="{{ route('faq.edit',['id'=>$el->id]) }}" class="btn btn-info btn-sm"><i
                                class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('faq.destroy',['id'=>$el->id]) }}" class="btn btn-danger btn-sm"><i
                                class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
