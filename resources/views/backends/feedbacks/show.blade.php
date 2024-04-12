@extends('backends._layout')
@section('content')
    <h3>Feedback Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>First Name</th>
            <td>{{ $model->full_name }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $model->message }}</td>
        </tr>
        <tr>
            <th valign="top">Image</th>
            <td>
                <img src="{{ $model->getFirstMedia('feedback_image')->getUrl('thumb') }}" alt="" width="300px">
            </td>
        </tr>
        <tr>
            <td>Url</td>
            <td>
                <a href="{{ $model->getFirstMedia('feedback_image')->getUrl() }}" target="_blank"><i
                        class="bi bi-box-arrow-up-right"></i></a>
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="{{ route('feedback.list') }}" class="btn btn-primary btn-sm"><i
                        class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
