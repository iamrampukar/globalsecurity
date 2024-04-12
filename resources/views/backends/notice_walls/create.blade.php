@extends('backends._layout')
@section('content')
    <h3>Notice Create</h3>
    <form action="{{ route('notice_wall.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.notice_walls._form')
    </form>
@endsection
