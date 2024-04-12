@extends('backends._layout')
@section('content')
    <h3>Banner Edit</h3>
    <form action="{{ route('banner.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.banners._form')
    </form>
@endsection
