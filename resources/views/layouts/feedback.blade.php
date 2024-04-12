<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Students Feedbacks</h3>
            </div>
        </div>
        <div class="row">
            <div class="student-feedbacks">
                @foreach($model['testimonial'] as $testiEl)
                    <div class="col-md-12 d-flex flex-md-column justify-content-center align-items-center">
                        <img src="{{ $testiEl->getFirstMedia('testimonial_image')->getUrl('thumb') }}" class=""
                             style="width: 150px;height: 150px; border-radius: 50%">
                        <h5 class="text-center">{{ $testiEl->full_name }}</h5>
                        <p class="text-center col-md-8">{{ $testiEl->message }}</p>
                    </div>
                @endforeach
{{--                <div class="col-md-12 d-flex flex-md-column justify-content-center align-items-center">
                    <img src="{{ asset('images/feedbacks/chandra_thapa.jpg') }}" class=""
                         style="width: 150px;height: 150px; border-radius: 50%">
                    <h5 class="text-center">Chandra Thapa</h5>
                    <p class="text-center col-md-8">
                        "The dedication, motivation, and counseling of staff were remarkable. The staff helped me to
                        achieve my Goals ."
                    </p>
                </div>
                <div class="col-md-12 d-flex flex-md-column justify-content-center align-items-center">
                    <img src="{{ asset('images/feedbacks/pratika_parajuli.jpg') }}" class=""
                         style="width: 150px;height: 150px; border-radius: 50%">
                    <h5 class="text-center">Pratika Parajuli</h5>
                    <p class="text-center col-md-8">
                        Best thing that really stood out to me was the clarity of communication from the organization. I
                        always felt informed and up-to-date on important deadlines and events. Additionally, the
                        availability of resources has been impressive, with a wide range of textbooks, study materials,
                        and tutoring services available to students.Thank You.!!!
                    </p>
                </div>
                <div class="col-md-12 d-flex flex-md-column justify-content-center align-items-center">
                    <img src="{{ asset('images/feedbacks/sumitra_tamang.jpg') }}" class=""
                         style="width: 150px;height: 150px; border-radius: 50%">
                    <h5 class="text-center">Sumitra Tamang</h5>
                    <p class="text-center col-md-8">
                        I have heard great things about your organization's Japanese language program and the way it can
                        help students achieve success in their careers and really it is.As someone who is passionate
                        about working in an international setting, I believe that learning Japanese will give me a
                        competitive advantage in the global job market .Thank you so much for your support and help to
                        achieve my goal.Thank you so much
                    </p>
                </div>
                <div class="col-md-12 d-flex flex-md-column justify-content-center align-items-center">
                    <img src="{{ asset('images/feedbacks/sushma_giri.jpg') }}" class=""
                         style="width: 150px;height: 150px; border-radius: 50%">
                    <h5 class="text-center">sushma Giri</h5>
                    <p class="text-center col-md-8">
                        I have heard great things about your organization's Japanese language program and the way it can
                        help students achieve success in their careers and really it is.As someone who is passionate
                        about working in an international setting, I believe that learning Japanese will give me a
                        competitive advantage in the global job market .Thank you so much for your support and help to
                        achieve my goal.Thank you so much
                    </p>
                </div>--}}
            </div>
        </div>
    </div>
</section>
