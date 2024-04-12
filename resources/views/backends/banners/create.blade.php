@extends('backends._layout')
@section('content')
    <h3>Banner Create</h3>
    <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.banners._form')
    </form>
@endsection
