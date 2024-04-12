@extends('backends._layout')
@section('content')
    <h3>TEAM Story Edit</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('team.update',['id' => $model->id]) }}" method="post" enctype="multipart/form-data">
        @include('backends.teams._form')
    </form>
@endsection
