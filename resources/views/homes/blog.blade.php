@extends('layouts.main_app')
@section('content')
    <!-- Content Block-->
    <section class="mt-5">
        <div class="page-header  bg-body-secondary">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="p-4">BLOGS</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($model['blog'] as $el)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                        <div class="card">
                            <img class="card-img-top" src="{{ $el->getFirstMedia('blog_image')->getUrl() }}">
                            <div class="card-body">
                                <div class="card-title h5">{{ $el->title }}</div>
                                <p class="card-text">{{ $el->short_description }}</p>
                                <a role="button" tabindex="0" class="btn btn-primary"
                                   href="{{ route('app.blog_slug',['slug' => $el->slug]) }}"> Read More</a></div>
                        </div>
                    </div>
                @endforeach

                {{--  <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset('images/blog/blog1.jpg') }}">
                          <div class="card-body">
                              <div class="card-title h5">Why japan ?</div>
                              <p class="card-text">In Japan, you will see timeless beauty side by side with dynamic
                                  breakthroughs in technology, culture and quality of life. Meticulous attention to detail
                                  combines with exquisite craft tradition to create cutting-edge solutions. This unique
                                  fusion
                                  will spark inspiration and ideas among your participants.</p>
                              <a role="button" tabindex="0" class="btn btn-primary"
                                 href=""> Read More</a></div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset('images/blog/blog1.jpg') }}">
                          <div class="card-body">
                              <div class="card-title h5">Wroking in Japan ?</div>
                              <p class="card-text">At the very top, the most prestigious companies would recruit and
                                  retain
                                  the best workers by offering better benefits and truly lifetime job security. By the
                                  1960s,
                                  employment at a large prestigious company had become the goal of children of the new
                                  middle
                                  class, the pursuit of which required mobilization of family resources and
                                  <!--                            great individual-->
                                  <!--                            perseverance in order to achieve success in the fiercely competitive education system-->
                              </p>
                              <a role="button" tabindex="0" class="btn btn-primary"
                                 href=""> Read More</a></div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset('images/blog/blog1.jpg') }}">
                          <div class="card-body">
                              <div class="card-title h5">Study In Japan</div>
                              <p class="card-text">*Qualifications in General *The applicant must be at least 18-30 years
                                  old
                                  . * Senior high school or college graduate. They must also be willing to study Japanese
                                  language and culture. Finally, they must be financially stable or have someone else
                                  support
                                  their application. Step 1 of the admissions process is evaluation.
                                  <!--                            After reviewing their-->
                                  <!--                            academic records, interested candidates will receive a free evaluation from our program-->
                                  <!--                            consultants. This will establish whether or not the candidate is acceptable for the program.-->
                                  <!--                            Step Two: Contract Execution The program consultant will set up a contract reading with the-->
                                  <!--                            applicant if they are qualified and want to continue with the program. Before signing, the-->
                                  <!--                            applicant must carefully read -->
                              </p>
                              <a role="button" tabindex="0" class="btn btn-primary"
                                 href=""> Read More</a></div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset('images/blog/blog1.jpg') }}">
                          <div class="card-body">
                              <div class="card-title h5">LANGUAGE COURSES</div>
                              <p class="card-text">To pursue education in Japan Japanese language classes are crucial
                                  whether
                                  you are pursuing a bachelor's or master's degree, whether for your studies or daily
                                  living
                                  in Japan. Even the Japanese Academic Exchange Service advises students to soak up as
                                  much
                                  knowledge as they can while still in their own countries.
                                  <!--    because it will make it simple for
                                      them to hunt for work in Japan.-->
                              </p>
                              <a role="button" tabindex="0" class="btn btn-primary"
                                 href=""> Read More</a></div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset('images/blog/blog1.jpg') }}">
                          <div class="card-body">
                              <div class="card-title h5">Schedule for Japanes Language College</div>
                              <p class="card-text">April: April's new student admission ceremony May: Study Japanese
                                  history
                                  and culture. June: The first exam for students and the excursion The Star Festival
                                  occurs in
                                  July. August: Summer Job September: The factory visit for the speech contest marks the
                                  end
                                  <!--
                                  of the preliminary studies. 1st of October The ceremony for admitting new students took
                                  place in October. November: Second student test, excursion Japanese language proficiency
                                  test and new year's celebration in December January: The new year
                                  -->
                              </p>
                              <a role="button" tabindex="0" class="btn btn-primary"
                                 href=""> Read More</a></div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset('images/blog/blog1.jpg') }}">
                          <div class="card-body">
                              <div class="card-title h5">Japan Study</div>
                              <p class="card-text">Japan is the best place for Average students</p>
                              <a role="button" tabindex="0" class="btn btn-primary"
                                 href=""> Read More</a></div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                      <div class="card">
                          <img class="card-img-top" src="{{ asset('images/blog/blog1.jpg') }}">
                          <div class="card-body">
                              <div class="card-title h5">Good Vibes Education Consultancy</div>
                              <p class="card-text">2023 April Students</p>
                              <a role="button" tabindex="0" class="btn btn-primary"
                                 href=""> Read More</a></div>
                      </div>
                  </div>--}}
            </div>
        </div>
    </section>
    <!-- /Content Block-->
@endsection

