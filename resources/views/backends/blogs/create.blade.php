@extends('backends._layout')
@section('content')
    <h3>Blog Create</h3>
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.blogs._form')
    </form>
@endsection
