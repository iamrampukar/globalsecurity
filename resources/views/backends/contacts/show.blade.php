@extends('backends._layout')
@section('content')
    <h3>CONTACT Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>Full Name</th>
            <td>{{ $model->your_name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $model->email }}</td>
        </tr>
        <tr>
            <th>Contact</th>
            <td>{{ $model->subject }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $model->message }}</td>
        </tr>

        <tr>
            <th colspan="2">
                <a href="{{ route('contact.list') }}" class="btn btn-primary btn-sm"><i
                        class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
