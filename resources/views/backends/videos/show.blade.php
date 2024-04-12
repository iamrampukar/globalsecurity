@extends('backends._layout')
@section('content')
    <h3>Video Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>Title</th>
            <td>{{ $model->title }}</td>
        </tr>
        <tr>
            <th>Video Link</th>
            <td><a href="{{ $model->video_link }}" target="_blank">{{ $model->video_link }}</a></td>
        </tr>
        <tr>
            <th>Video</th>
            <td>{!! $model->video_code !!} </td>
        </tr>
        <tr>
            <th>Visible</th>
            <td>{!! $model->status !!}
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="{{ route('video.list') }}" class="btn btn-primary btn-sm"><i
                        class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
