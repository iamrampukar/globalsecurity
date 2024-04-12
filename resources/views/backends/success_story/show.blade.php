@extends('backends._layout')
@section('content')
    <h3>Success Story Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>Full Name</th>
            <td>{{ $model->full_name }}</td>
        </tr>
        <tr>
            <th>Couse</th>
            <td>{{ $model->course }}</td>
        </tr>
        <tr>
            <th>University</th>
            <td>{{ $model->university }}</td>
        </tr>
        <tr>
            <th>Location</th>
            <td>{{ $model->location }}</td>
        </tr>
        <tr>
            <th>Year</th>
            <td>{{ $model->year }}</td>
        </tr>
        <tr>
            <th>Visible</th>
            <td>{!! $model->status !!}</td>
        </tr>
        <tr>
            <th valign="top">Image</th>
            <td>
                <img src="{{ $model->getFirstMedia('success_story')->getUrl('thumb') }}" alt="" width="300px">
            </td>
        </tr>
        <tr>
            <td>Url</td>
            <td><a href="{{ $model->getFirstMedia('success_story')->getUrl() }}" target="_blank"><i
                        class="bi bi-box-arrow-up-right"></i></a></td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="{{ route('success_story.list') }}" class="btn btn-primary btn-sm"><i
                        class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
