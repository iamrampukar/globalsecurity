@extends('backends._layout')
@section('content')
    <h3>Page Group Edit</h3>
    <form action="{{ route('page_group.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.page_groups._form')
    </form>
@endsection
