@extends('backends._layout')
@section('content')
    <h3>Success Story Create</h3>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
    <form action="{{ route('success_story.store') }}" method="post" enctype="multipart/form-data">
        @include('backends.success_story._form')
    </form>
@endsection
