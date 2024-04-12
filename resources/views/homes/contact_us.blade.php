@extends('layouts.main_app')
@section('content')
    <!-- Content Block-->
    <section class="mt-5">
        <div class="page-header  bg-body-secondary">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="p-4">Contact Us</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="lh-base mt-3">Walk in to our office for free study abroad counselling, application
                        submissions, visa assistance, pre-departure sessions and much more.</p>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <p class="card-text lh-lg">
                                <i class="ri-phone-fill"></i> Phone : +977-01-5916120, 9869060120<br/>
                                <i class="ri-time-line"></i> Timing : Sunday - Friday-8:00 am -6:30 pm<br/>
                                <i class="ri-mail-line"></i> Email : info.goodvives@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Interested in studying abroad ?</h5>
                                <p class="text-muted">Fill in your details and we’ll call you back !</p>
                                @include('homes._form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Content Block-->
@endsection
