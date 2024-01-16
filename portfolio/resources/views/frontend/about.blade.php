@extends('frontend.master')
@section('frontend')
<div class="col-12 col-md-12 col-lg-10">
    <div class="box box-content">
        <!-- About -->
        @foreach ($aboutme_data as $about)
        <div class="pb-0 pb-sm-2">
            <h1 class="title title--h1 first-title title__separate">{{ $about->title }}</h1>
            <p>{{ $about->desc }}</p>

        </div>

        @endforeach


        <!-- What -->
        <div class="mt-1">
            <h2 class="title title--h3">What I'm Doing</h2>
            <div class="row">
                <!-- Case Item -->
                @foreach ($whatdo as $do)
                <div class="col-12 col-lg-6">
                    <div class="case-item">
                        <img class="case-item__icon" src="https://art-template.ru/vcard3/assets/icons/dark/icon-design.svg" alt="" />
                        <div>
                            <h3 class="title title--h4">{{ $do->sub_title }}</h3>
                            <p class="case-item__caption">{{ $do->paragraph }}.</p>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
        </div>

        <!-- Testimonials -->
        <div class="mt-2">
            <h2 class="title title--h3">Testimonials</h2>
            <div class="swiper-container js-carousel-review">
                <div class="swiper-wrapper">
                    <!-- Item review -->
                    @foreach ($testomonials as $testomonial)
                    <div class="swiper-slide review-item">
                        <svg class="avatar avatar--80" viewBox="0 0 84 84">
                            <g class="avatar__hexagon">
                                <image xlink:href="{{ asset('upload/testomonial/') }}/{{ $testomonial->image }}" height="100%" width="100%" />
                            </g>
                        </svg>
                        <div class="review-item__textbox">
                            <h4 class="title title--h5">{{ $testomonial->title }}</h4>
                            <p class="review-item__caption">{{ $testomonial->paragraph }}.</p>
                        </div>
                    </div>


                    @endforeach


                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Clients -->
        <div class="mt-4">
            <h2 class="title title--h3">Clients</h2>

            <div class="swiper-container js-carousel-clients">
                <div class="swiper-wrapper">
                    <!-- Item client -->
                    <div class="swiper-slide">
                        <a href="#"><img src="https://art-template.ru/vcard3/assets/img/logo-1-dark.svg" alt="Logo" /></a>
                    </div>

                    <!-- Item client -->
                    <div class="swiper-slide">
                        <a href="#"><img src="https://art-template.ru/vcard3/assets/img/logo-2-dark.svg" alt="Logo" /></a>
                    </div>

                    <!-- Item client -->
                    <div class="swiper-slide">
                        <a href="#"><img src="https://art-template.ru/vcard3/assets/img/logo-3-dark.svg" alt="Logo" /></a>
                    </div>

                    <!-- Item client -->
                    <div class="swiper-slide">
                        <a href="#"><img src="https://art-template.ru/vcard3/assets/img/logo-4-dark.svg" alt="Logo" /></a>
                    </div>

                    <!-- Item client -->
                    <div class="swiper-slide">
                        <a href="#"><img src="https://art-template.ru/vcard3/assets/img/logo-1-dark.svg" alt="Logo" /></a>
                    </div>

                    <!-- Item client -->
                    <div class="swiper-slide">
                        <a href="#"><img src="https://art-template.ru/vcard3/assets/img/logo-2-dark.svg" alt="Logo" /></a>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">© 2024 MominulHaque</footer>
</div>

@endsection
