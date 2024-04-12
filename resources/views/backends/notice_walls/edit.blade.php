@extends('backends._layout')
@section('content')
    <h3>Notice Edit</h3>
    <form action="{{ route('notice_wall.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.notice_walls._form')
    </form>
@endsection
