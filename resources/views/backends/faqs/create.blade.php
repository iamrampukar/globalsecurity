@extends('backends._layout')
@section('content')
    <h3>FAQ Create</h3>
    <form action="{{ route('faq.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.faqs._form')
    </form>
@endsection
