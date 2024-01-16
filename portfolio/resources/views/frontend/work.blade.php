@extends('frontend.master')
@section('frontend')
<div class="col-12 col-md-12 col-lg-10">
    <div class="box box-content">
        <div class="pb-2">
            <h1 class="title title--h1 first-title title__separate">Portfolio</h1>
        </div>

        <div class="pb-0">
            <!-- Filter -->
            <div class="select">
                <span class="placeholder">Select category</span>
                {{--  <ul class="filter">
                    <li class="filter__item">Category</li>
                    <li class="filter__item active" data-filter="*"><a class="filter__link active" href="filter">All</a></li>
                    <li class="filter__item" data-filter=".category-concept"><a class="filter__link" href="filter">Concept</a></li>
                    <li class="filter__item" data-filter=".category-design"><a class="filter__link" href="filter">Design</a></li>
                    <li class="filter__item" data-filter=".category-life"><a class="filter__link" href="filter">Life</a></li>
                </ul>  --}}
                <input type="hidden" name="changemetoo"/>
            </div>

            <!-- Gallery -->
            <div class="gallery-grid js-grid-row js-filter-container">
                <div class="gutter-sizer"></div>
                <!-- Item 1 -->
                <figure class="gallery-grid__item category-concept">
                    <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="{{asset('frontend')}}/assets/img/gate.png"  alt="" />
                    </div>
                    <figcaption class="gallery-grid__caption">
                        <h4 class="title title--h6 gallery-grid__title">Gateway Migration</h4>
                        <span class="gallery-grid__category"><a href="https://gatewaymigration.com/">project link</a></span>
                    </figcaption>
                </figure>
                <!-- Item 1 -->
                <figure class="gallery-grid__item category-concept">
                    <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="{{asset('frontend')}}/assets/img/trene.png"  alt="" />
                    </div>
                    <figcaption class="gallery-grid__caption">
                        <h4 class="title title--h6 gallery-grid__title">trene.trcorporationgroupbd</h4>
                        <span class="gallery-grid__category"><a href="https://trene.trcorporationgroupbd.com/">project link</a></span>
                    </figcaption>
                </figure>


            </div><!-- Gallery End -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">© 2024 MominulHaque</footer>
</div>

@endsection
