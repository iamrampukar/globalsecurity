@extends('layouts.main_app')
@section('content')
    <!-- Content Block-->
    <section class="mt-5">
        <div class="page-header  bg-body-secondary">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="p-4">Apply Online</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex flex-column justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <small>If you are as a student seeking our services you can fill in the form below. Basic
                                information
                                like your academic background and what courses you are seeking will be useful to answer
                                your
                                question precisely:</small>
                            <h5 class="card-title">Interested in studying abroad ?</h5>
                            <p class="text-muted">Fill in your details and we’ll call you back !</p>
                            @include('homes._form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Content Block-->
@endsection
