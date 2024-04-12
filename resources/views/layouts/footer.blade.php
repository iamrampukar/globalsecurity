<section class="footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('app.home') }}" class="nav-link p-0 text-muted">Home</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('app.about_us') }}" class="nav-link p-0 text-muted">About
                            Us</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('app.faq') }}" class="nav-link p-0 text-muted">FAQs</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('app.visitor_feedback') }}"
                                                 class="nav-link p-0 text-muted">Feedback</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('app.blog') }}"
                                                 class="nav-link p-0 text-muted">Blogs</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('app.country') }}" class="nav-link p-0 text-muted">Country</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('app.services') }}" class="nav-link p-0 text-muted">Services</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('app.apply_now') }}" class="nav-link p-0 text-muted">Apply
                            Now</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                GoodVibes Edu. Consultancy<br/>
                +977-01-5916120, 9869060120<br/>
                info.goodvives@gmail.com<br/>
                Chuchepati Chowk, Chabahil, 2nd attached House to Sanima Bank<br/>
                FOLLOW US<br/>
                <a href="https://www.facebook.com/people/Good-Vibes-Education-Consultancy/100083652095301/"><i
                            class="ri-facebook-box-fill"></i></a>
            </div>
        </div>
        <div class="row">
            <p class="text-center">© 2023 GoodVibes Education Consultancy Pvt.Ltd.All right reserved</p>
            <p class="text-center">Designed & Developed By <a href="https://unitechhostnepal.com/" target="_blank">Unitech
                    It Solution</a></p>
        </div>
    </div>
</section>

<div class="modal fade fade-scale" id="newsModal" aria-hidden="true" aria-labelledby="newsModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h1 class="modal-title fs-5" id="newsModalLabel">Modal 1</h1> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(!empty($model['notice_wall']))
                    <img src="{{ @$model['notice_wall']->getFirstMedia('notice_wall_image')->getUrl() }}" alt=""
                         style="width:100%"
                         class="rounded">
                @endif
            </div>
        </div>
    </div>
</div>
