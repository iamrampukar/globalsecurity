@extends('layouts.main_app')
@section('content')
    <!-- Content Block-->
    <section class="mt-5">
        <div class="page-header  bg-body-secondary">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="p-4">Feedback Form</h3>
                </div>
            </div>
        </div>
        <section class="mt-5" style="margin-bottom: 200px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 d-flex flex-column justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">We were happy to hear from you</h5>
                                @include('homes._feedback_form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Content Block-->
@endsection
