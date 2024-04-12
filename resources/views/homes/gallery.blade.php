@extends('layouts.main_app')
@section('content')
    <section class="">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center"><span class="text-dark">Gallery</h3>
                </div>
                @if(!empty($model['gallery']))
                    @foreach($model['gallery'] as $el )
                        <div class="col-md-4">
                            <img src="{{ $el->getFirstMedia('gallery_image')->getUrl('actual') }}" class="card-img-top gallery-w" alt="...">
                        </div>
                    @endforeach
                @endif
{{--                --}}
{{--                <div class="col-md-4">--}}
{{--                    <img src="{{ asset('images/gallery/gs1.webp') }}" class="card-img-top gallery-w" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <img src="{{ asset('images/gallery/gs2.webp') }}" class="card-img-top gallery-w" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <img src="{{ asset('images/gallery/gs3.webp') }}" class="card-img-top gallery-w" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <img src="{{ asset('images/gallery/gs4.webp') }}" class="card-img-top gallery-w" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <img src="{{ asset('images/gallery/gs5.webp') }}" class="card-img-top gallery-w" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <img src="{{ asset('images/gallery/gs6.webp') }}" class="card-img-top gallery-w" alt="...">--}}
{{--                </div>--}}
{{--                --}}
            </div>
        </div>
    </section>
@endsection
