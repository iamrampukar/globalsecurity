@extends('backends._layout')
@section('content')
    <h3>Success Story Edit</h3>
    <form action="{{ route('success_story.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.success_story._form')
    </form>
@endsection
