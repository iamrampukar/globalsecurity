@extends('backends._layout')
@section('content')
    <h3>CLIENT Edit</h3>
    <form action="{{ route('client.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.clients._form')
    </form>
@endsection
