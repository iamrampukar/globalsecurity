@extends('backends._layout')
@section('content')
    <h3>FAQ Edit</h3>
    <form action="{{ route('faq.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.faqs._form')
    </form>
@endsection
