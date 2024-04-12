@extends('backends._layout')
@section('content')
    <h3>TEAM Story Create</h3>
    <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.teams._form')
    </form>
@endsection
