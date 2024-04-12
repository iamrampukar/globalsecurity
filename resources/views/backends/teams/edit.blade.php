@extends('backends._layout')
@section('content')
    <h3>TEAM Story Edit</h3>
    <form action="{{ route('team.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.teams._form')
    </form>
@endsection
