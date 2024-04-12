@extends('backends._layout')
@section('content')
    <h3>Testimonial Create</h3>
    <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.testimonials._form')
    </form>
@endsection
