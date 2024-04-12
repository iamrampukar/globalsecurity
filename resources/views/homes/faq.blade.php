@extends('layouts.main_app')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center"><span class="text-dark">FREQUENTLY ASKED QUESTIONS</span></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        @if(!empty($model['faq']))
                            @foreach($model['faq'] as $key => $el)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$key}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{$key}}" aria-expanded="true"
                                                aria-controls="collapse{{$key}}">{{ $el->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$key}}" class="accordion-collapse collapse show"
                                         aria-labelledby="heading{{$key}}"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">{{ $el->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="accordion-item">
                             <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     Why should Global Security consider hiring a security service in Nepal?
                                 </button>
                             </h2>
                             <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                  data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                     Hiring a security service in Nepal can help protect your company's assets,
                                     employees,
                                     and reputation. It can deter crime, manage access control, prevent unauthorized
                                     entry,
                                     handle emergencies, and provide a sense of security for your staff and clients.
                                 </div>
                             </div>
                         </div>

                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapseThree" aria-expanded="false"
                                         aria-controls="collapseThree">
                                     How long has your company been operating in the security industry in Nepal?
                                 </button>
                             </h2>
                             <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                  data-bs-parent="#accordionExample">
                                 <div class="accordion-body">We have been operating in the security industry in Nepal for
                                     6
                                     years. Our extensive experience has allowed us to develop expertise in providing
                                     effective security solutions to a wide range of clients.
                                 </div>
                             </div>
                         </div>

                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingFour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapseFour" aria-expanded="false"
                                         aria-controls="headingFour">
                                     Are your security personnel trained and licensed?
                                 </button>
                             </h2>
                             <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                  data-bs-parent="#accordionExample">
                                 <div class="accordion-body">Yes, all our security personnel undergo rigorous training
                                     programs and hold valid licenses issued by the Ministry of Home Affairs in Nepal.
                                     They
                                     are trained in security protocols, emergency response, conflict management, and
                                     customer
                                     service.
                                 </div>
                             </div>
                         </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
