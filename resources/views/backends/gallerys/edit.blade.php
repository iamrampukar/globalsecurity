@extends('backends._layout')
@section('content')
    <h3>GALLERY Story Edit</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gallery.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.gallerys._form')
    </form>
@endsection
