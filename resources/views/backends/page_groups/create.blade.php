@extends('backends._layout')
@section('content')
    <h3>Page Group Create</h3>
    <form action="{{ route('page_group.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.page_groups._form')
    </form>
@endsection
