@extends('backends._layout')
@section('content')
    <h3>Testimonial Edit</h3>
    <form action="{{ route('testimonial.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.testimonials._form')
    </form>
@endsection
