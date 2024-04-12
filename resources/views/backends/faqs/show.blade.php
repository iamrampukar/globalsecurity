@extends('backends._layout')
@section('content')
    <h3>FAQ Show</h3>
    <table class="table table-sm table-bordered">
        <tr>
            <th>Question</th>
            <td>{{ $model->question }}</td>
        </tr>
        <tr>
            <th>Answer</th>
            <td>{{ $model->answer }}</td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="{{ route('faq.list') }}" class="btn btn-primary btn-sm"><i class="bi bi-arrow-left"></i>
                    BACK</a>
            </th>
        </tr>
    </table>
@endsection
