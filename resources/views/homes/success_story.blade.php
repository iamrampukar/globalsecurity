@extends('layouts.main_app')
@section('content')
    <!-- Content Block-->
    <section class="mt-5">
        <div class="page-header  bg-body-secondary">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="p-4">Our Success Story</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($model['success_story'] as $el)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                        <div class="card">
                            <img class="card-img-top" src="{{ $el->getFirstMedia('success_story')->getUrl() }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /Content Block-->
@endsection
