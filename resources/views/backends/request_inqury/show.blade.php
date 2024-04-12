@extends('backends._layout')
@section('content')
    <h3>Request Inquiry Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>First Name</th>
            <td>{{ $model->first_name }}</td>
        </tr> <tr>
            <th>Last Name</th>
            <td>{{ $model->last_name }}</td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td>{{ $model->mobile }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $model->email }}</td>
        </tr>
        <tr>
            <th valign="top">Education</th>
            <td>
               {{ $model->education }}
            </td>
        </tr><tr>
            <th valign="top">Course</th>
            <td>
               {{ $model->course }}
            </td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $model->message }}</td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="{{ route('request_inquiry.list') }}" class="btn btn-primary btn-sm"><i
                        class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
