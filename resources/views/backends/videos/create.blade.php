@extends('backends._layout')
@section('content')
    <h3>Video Post</h3>
    <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.videos._form')
    </form>
@endsection
