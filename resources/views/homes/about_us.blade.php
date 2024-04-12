@extends('layouts.main_app')
@section('content')
    <!-- Content Block-->
    <section class="mt-5">
        <div class="page-header  bg-body-secondary">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="p-4">About Us</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h4>Welcome to our Consultancy</h4>
                <p class="lh-base mt-3">Good Vibes Education Consultancy is a well-recognized and genuine educational
                    consultancy
                    which is
                    established to encourage ambitious students to fulfill their educational and career objectives in
                    Japan.
                    The facts that set us apart from the rest are: More than 10 years of experience in Japan.
                    Professional
                    N3 passed language teacher for Japanese language classes. The teaching method, office environment,
                    and
                    administration are entirely in the Japanese system. Universities are chosen by directly visiting and
                    observing in Japan. Guidance and support for you also in Japan until you become successful. We are
                    committed to providing honest and accurate information. We will be pleased to share our experience
                    with
                    you.</p>
            </div>
        </div>
    </section>
    <!-- /Content Block-->
    @include('layouts.our_choose')
    @include('layouts.team')
@endsection

