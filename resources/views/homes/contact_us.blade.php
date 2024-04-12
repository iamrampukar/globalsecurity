@extends('layouts.main_app')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center"><span class="text-dark">Contact Us</span></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="lh-base mt-3">Let's get in touch</h5>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <p class="card-text lh-lg">
                                <strong>Global Security Service Pvt. Ltd.</strong><br>
                                <i class="ri-map-pin-line"></i> Address: Putalisadak, Kathmandu, Nepal<br>
                                <i class="ri-phone-fill"></i> 01-5327614<br>
                                <i class="ri-smartphone-line"></i> Mobile: 9841684330 | 9851293512<br>
                                <i class="ri-mail-line"></i> Email : global2074@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-muted">Got a technical issue? Want to send feedback about a beta feature?
                                    Need details about our Business plan? Let us know.</p>
                                <form method="post" action="{{ route('app.send') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="yourName" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" name="your_name" id="yourName"
                                               placeholder="Your Name">
                                        @error('your_name')
                                        <div class="invalid">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="userEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="userEmail"
                                               placeholder="Email...">
                                        @error('email')
                                        <div class="invalid">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                               placeholder="Subject...">
                                        @error('subject')
                                        <div class="invalid">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" name="message" id="message"
                                                  placeholder="Message..."
                                                  rows="3"></textarea>
                                        @error('message')
                                        <div class="invalid">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <input type="submit" value="Send" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.map')
@endsection
