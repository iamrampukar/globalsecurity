@extends('backends._layout')
@section('content')
    <h3>CLIENT Create</h3>
    <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.clients._form')
    </form>
@endsection
