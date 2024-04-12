@extends('backends._layout')
@section('content')
    <h3>Page Group Create</h3>
    <form action="{{ route('page_group.single_update') }}" method="post" enctype="multipart/form-data">
        @include('backends.single_details._form')
    </form>
@endsection
