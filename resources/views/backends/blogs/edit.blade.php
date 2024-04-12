@extends('backends._layout')
@section('content')
    <h3>Blog Edit</h3>
    <form action="{{ route('blog.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.blogs._form')
    </form>
@endsection
