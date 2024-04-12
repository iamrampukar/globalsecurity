@extends('layouts.main_app')
@section('content')
    <!-- Our Choose -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="country-cover-image"></div>
            </div>
        </div>
    </section>

    <!-- Content Block-->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <h4>{{ $blogModel->title }}</h4>
                <p class="lh-base mt-3">
                    {{ $blogModel->full_description }}
                </p>
            </div>
        </div>
    </section>
    <!-- /Content Block-->
@endsection

