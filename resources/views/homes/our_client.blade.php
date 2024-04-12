@extends('layouts.main_app')
@section('content')
    <section class="">
        <div class="container mt-5">
            <h2 class="text-center">Our Clients</h2>
            <div class="row mt-3 ">
                <div class="our-client-wrap">
                    @if(!empty($model['client']))
                        @foreach($model['client'] as $el )
                            <div class="col-md-1">
                                <img src="{{ $el->getFirstMedia('client_image')->getUrl('thumb') }}"
                                     class=" card-img-top client-img"
                                     alt="...">
                            </div>
                        @endforeach
                    @endif
                    {{--
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/catalyst.jpeg') }}" class=" card-img-top client-img"
                                 alt="...">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/client1.jpeg') }}" class=" card-img-top client-img"
                                 alt="...">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/hankook.jpeg') }}" class=" card-img-top client-img"
                                 alt="...">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/nimb.webp') }}" class="card-img-top client-img" alt="...">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/saurya.jpeg') }}" class="card-img-top client-img"
                                 alt="...">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/taxes.jpeg') }}" class=" card-img-top client-img"
                                 alt="...">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/unionlife.png') }}" class="card-img-top client-img"
                                 alt="...">
                        </div>
                        <div class="col-md-1">
                            <img src="{{ asset('images/our-client/valley.png') }}" class="card-img-top client-img"
                                 alt="...">
                        </div>
                    --}}
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container mt-5">
            <h2 class="text-center">Clients Testimonial</h2>
            <div class="card">
                <div class="card-body client-testimonial mt-3">
                    @if(!empty($model['testimonial']))
                        @foreach($model['testimonial'] as $el)
                            <blockquote class="blockquote mb-0">
                                <p class="text-center">{{ $el->message }}</p>
                                <footer class="blockquote-footer text-center">{{ $el->full_name }}</footer>
                            </blockquote>
                        @endforeach
                    @endif
                    {{--
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">We appreciate the level of support and service provided by Global
                            Security Service.</p>
                        <footer class="blockquote-footer text-center">Union Life Insurance Company Ltd</footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">Global Security Service is providing us security service since the last
                            four years. We appreciate the level of support rendered.</p>
                        <footer class="blockquote-footer text-center">Hankook Sarang Korean Restaurant Pvt. Ltd.
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">Global Security Service is providing us well trained security guards and
                            services. We find their service to the best of our requirements and we are satisfied with
                            them.</p>
                        <footer class="blockquote-footer text-center">Valley Cold Store Pvt. Ltd.</footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">Global Security Services(GSS) has been providing security services to the
                            Rose Village Community located in Surya Binayak Municipality, Nepal since March 2020. Since
                            the beginning of it's services, the GSS has demonstrated its best performances, and has
                            fulfilled the expectation of the community.</p>
                        <footer class="blockquote-footer text-center">Rose Village Saving & Credit Co-operative Ltd.
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">M/S Global Security Service has been providing good service in
                            contractual terms. We look forward to receive similar service from this company in future
                            too.</p>
                        <footer class="blockquote-footer text-center">Brihat Developers and Builders Pvt Ltd</footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">Global Security has been providing good service in professional manner in
                            compliance with contractual terms. We look forward to receive similar service from this
                            company in future too.</p>
                        <footer class="blockquote-footer text-center">Texas International Secondary School</footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">The services provided by the company and performance of the security
                            guards is satisfactory. We appreciate the level of support provided by Global Security
                            Service.</p>
                        <footer class="blockquote-footer text-center">Shirneth Enterprises Pvt. Ltd.</footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">Global Security Service has been providing good service in professional
                            manner. We look forward to receive similar service from this company in future too.</p>
                        <footer class="blockquote-footer text-center">Langtang Bhotekoshi Hydro Power Company Pvt.
                            Ltd.
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">Global Security Service has been providing the security guard services in
                            Hulas Metal Craft Ltd under Glochha Organization, since the last four years. We appreciate
                            the level of support and services provided by this company.</p>
                        <footer class="blockquote-footer text-center">Hulas Metal Crafts Ltd
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">The services provided by the company and performance of the security
                            guards is satisfactory. We appreciate the level of support provided by Global Security
                            Service</p>
                        <footer class="blockquote-footer text-center">Catalyst Management Service Nepal Pvt Ltd (CMS)
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">The services provided by the company and performance of the security
                            guards is satisfactory. We appreciate the level of support provided by Global Security
                            Service</p>
                        <footer class="blockquote-footer text-center">Bhaktapur Multiple Campus</footer>
                    </blockquote>
                    <blockquote class="blockquote mb-0">
                        <p class="text-center">Global Security Service has been providing good service in professional
                            manner in concession with contractual terms. We look forward to receive similar service from
                            this company in future too. Thank you</p>
                        <footer class="blockquote-footer text-center">Shaurya Cement Industries Limited</footer>
                    </blockquote>
                    --}}
                </div>
            </div>
        </div>
    </section>
@endsection
