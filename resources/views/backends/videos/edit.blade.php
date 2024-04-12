@extends('backends._layout')
@section('content')
    <h3>Video Edit</h3>
    <form action="{{ route('video.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.videos._form')
    </form>
@endsection
