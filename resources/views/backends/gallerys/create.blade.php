@extends('backends._layout')
@section('content')
    <h3>GALLERY Story Create</h3>
    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.gallerys._form')
    </form>
@endsection
