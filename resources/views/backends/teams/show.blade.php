@extends('backends._layout')
@section('content')
    <h3>Success Story Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>Full Name</th>
            <td>{{ $model->full_name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $model->email }}</td>
        </tr>
        <tr>
            <th>Contact</th>
            <td>{{ $model->contact }}</td>
        </tr>
        <tr>
            <th>Quote</th>
            <td>{{ $model->quote }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $model->message }}</td>
        </tr>
        <tr>
            <th>Visible</th>
            <td>{!! $model->status !!}</td>
        </tr>
        <tr>
            <th valign="top">Image</th>
            <td>
                <img src="{{ $model->getFirstMedia('team')->getUrl('thumb') }}" alt="" width="300px">
            </td>
        </tr>
        <tr>
            <td>Url</td>
            <td><a href="{{ $model->getFirstMedia('team')->getUrl() }}" target="_blank"><i
                        class="bi bi-box-arrow-up-right"></i></a></td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="{{ route('team.list') }}" class="btn btn-primary btn-sm"><i
                        class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
