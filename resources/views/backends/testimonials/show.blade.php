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
            <th valign="top">Image</th>
            <td>
                <img src="{{ $model->getFirstMedia('testimonial_image')->getUrl('thumb') }}" alt="">
            </td>
        </tr>
        <tr>
            <th>Url</th>
            <td><a href="{{ $model->getFirstMedia('testimonial_image')->getUrl() }}" target="_blank"><i
                        class="bi bi-box-arrow-up-right"></i></a></td>
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
