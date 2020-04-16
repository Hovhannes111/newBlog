@extends('layouts.app')
@section('content')
    <main>
        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!-- Seciton Tittle  -->
                        <div class="font-back-tittle mb-50">
                            <div class="archivment-front">
                                <h3>Gallery</h3>
                            </div>
                            <h3 class="archivment-back">GALLERY</h3>
                        </div>
                    </div>
                </div>
                <div class="row gallery-item mb-60">
                    <div class="col-md-4">
                        <a href="{{asset('/img/elements/g1.jpg')}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('/img/elements/g1.jpg')}});"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('/img/elements/g2.jpg') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('/img/elements/g2.jpg') }});"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('/img/elements/g3.jpg') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('/img/elements/g3.jpg') }});"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ asset('/img/elements/g4.jpg') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('/img/elements/g4.jpg') }});"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ asset('/img/elements/g5.jpg') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('/img/elements/g5.jpg') }});"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('/img/elements/g6.jpg') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('/img/elements/g6.jpg') }});"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('/img/elements/g7.jpg') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('/img/elements/g7.jpg') }});"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('/img/elements/g8.jpg') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('/img/elements/g8.jpg') }});"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- partners img Start-->
        <div class="partners-area fix">

            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners-active owl-carousel">
                            <div class="partners-img">
                                <a href="#"><img src="{{ asset('/img/our_blog/pmi.png') }}" alt=""></a>
                            </div>
                            <div class="partners-img">
                                <a href="#"><img src="{{ asset('/img/our_blog/GTC.png') }}" alt=""></a>
                            </div>
                            <div class="partners-img">
                                <a href="#"><img src="{{ asset('/img/our_blog/unnamed.png') }}" alt=""></a>
                            </div>
                            <div class="partners-img">
                                <a href="#"><img src="{{ asset('/img/our_blog/unnamed.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- partners img End-->
    </main>
@endsection
