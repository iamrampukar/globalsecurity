@extends('backends._layout')
@section('content')
    <h3>Testimonial Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>Full Name</th>
            <td>{{ $model->full_name }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $model->message }}</td>
        </tr>
        <tr>
            <th>Visible</th>
            <td>{!! $model->status !!}
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="{{ route('testimonial.list') }}" class="btn btn-primary btn-sm"><i
                        class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
