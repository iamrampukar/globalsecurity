@extends('layouts.main_app')
@section('content')
    <section class="">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center"><span class="text-dark">Our</span> <span class="text-danger">Team</span>
                    </h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @if(!empty($model['team']))
                        @foreach($model['team'] as $el )
                            <div class="col">
                                <div class="card d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $el->getFirstMedia('team_image')->getUrl('actual') }}"
                                         class="rounded-circle our-team"
                                         alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">
                                            <span class="small text-muted">{{ $el->designation }}</span><br/>
                                            {{ $el->full_name }}</h5>
                                        <p class="card-text">{{ $el->quote }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                   {{--
                    <div class="col">
                        <div class="card d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('images/out-team/pashupati.jpeg') }}" class="rounded-circle our-team"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <span class="small text-muted">Chairman</span><br/>
                                    Pashupati Upadhyay</h5>
                                <p class="card-text">AIG (Retd) Mr. Upadhyay served with Nepal Police for three decades.
                                    He
                                    has wide experience in the law enforcement / security sector, within the country and
                                    abroad, including with UN and the ICPO-INTERPOL.</p>
                                <p class="card-text">A Mentor@Wedu Global since 2022, he has been advising the company
                                    towards achieving its
                                    objectives since January 2023, serving the nation through safeguarding key
                                    facilities /
                                    installations / premises and their inhabitants all over the country.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('images/out-team/ana_bahadur.jpeg') }}" class=" rounded-circle our-team"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <span class="small text-muted">Managing Director (MD)</span><br/>
                                    Ana Bahadur Pandey</h5>
                                <p class="card-text">Mr A B Pandey served Nepal Police for 30 years, and is one of the
                                    founding members of the GSSPL. He has acquired numerous management and operational
                                    courses whilst with Nepal Police, and has experience of working in challenging
                                    situations of the country in multiple regions. He heads the Human Resource
                                    Department
                                    (HRD) of the company and is involved in selection of the qualified candidates for
                                    the
                                    GSSPL, including providing the selected candidates with pre-deployment orientation,
                                    briefing required for the task.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('images/out-team/bhuwan_singh.jpeg') }}" class="rounded-circle our-team"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <span class="small text-muted">Chief Executive Officer (CEO)</span><br/>
                                    Bhuwan Singh Pandey</h5>
                                <p class="card-text">Mr. B S Pandey has more than two decades of extensive
                                    administrative experience with the Embassy of India in Kathmandu, Nepal, and is one
                                    of the founding members of the GSSPL. He leads the Administrative and Legal
                                    Department (ALD) of the GSSPL and is responsible for working out contracts/
                                    agreements with potential clients/ customers in a proficient manner. He has been
                                    efficiently coordinating and collaborating even with the concerned agencies of the
                                    government, fulfilling all the required procedures and maintaining regular
                                    contacts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('images/out-team/manoj_sapkota.jpeg') }}" class="rounded-circle our-team"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <span class="small text-muted">Finance Manager</span><br/>
                                    Manoj Sapkota</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('images/out-team/madhav_prasad.jpeg') }}" class="rounded-circle our-team"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <span class="small text-muted">Field Officer, Operations In-charge</span><br/>
                                    Madhav Prasad Adhikari</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('images/out-team/bidhya_thapa.jpeg') }}" class="rounded-circle our-team"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <span class="small text-muted">Business Development Officer</span><br/>
                                    Bidhya Thapa</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </section>
@endsection
