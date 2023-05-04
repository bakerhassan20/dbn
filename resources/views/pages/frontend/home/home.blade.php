@extends('layouts.frontend.app')
@section('content')

        <!-- one-page-slider start -->
        <section id="up"
            class="pos-rel section-bg-dark-1 after-preloader-anim js-freemode-slider one-page-slider ">
            <!-- swiper-wrapper start -->
            <div class="swiper-wrapper">
     

                @include('pages.frontend.home.partials.about-section')



                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <div class="swiper-parallax-bg-box" data-swiper-parallax-y="50%">
                        <div class="bg-img-cover height-100perc"
                            style="background-image: url(assets/images/projects/furniture/goashape-RvyJGaoaWrs-unsplash.jpg);">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div>
                    <div class="pos-rel d-flex flex-center-center height-100perc" data-swiper-parallax-y="25%">
                        <h2 class="container text-center  small">
                            <a href="project.php"
                                class="headline-xxxxl js-pointer-large js-animsition-link">Furniture</a>
                        </h2>
                    </div>
                </div><!-- swiper-slide end -->

                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <div class="swiper-parallax-bg-box" data-swiper-parallax-y="50%">
                        <div class="bg-img-cover height-100perc"
                            style="background-image: url(assets/images/projects/drone/quadcopter-on-wooden-surface-1601217.jpg);">
                        </div>
                        <div class="bg-overlay-black"></div>
                    </div>
                    <div class="pos-rel d-flex flex-center-center height-100perc" data-swiper-parallax-y="25%">
                        <h2 class="container text-center small">
                            <a href="project.php" class="headline-xxxxl js-pointer-large js-animsition-link">Drone</a>
                        </h2>
                    </div>
                </div><!-- swiper-slide end -->



                <!-- cliens -->
               @include('pages.frontend.home.partials.client-section')
                <!-- contact -->
                @include('pages.frontend.home.partials.contact-section')
                <!-- contact -->
            </div><!-- swiper-wrapper end -->

            <!-- swiper-button-prev start -->
            <div class="swiper-button-prev-box">
                <div class="anim-fade">
                    <div class="swiper-button-prev"></div>
                </div>
            </div><!-- swiper-button-prev end -->
            <!-- swiper-button-next start -->
            <div class="swiper-button-next-box">
                <div class="anim-fade tr-delay-03">
                    <div class="swiper-button-next"></div>
                </div>
            </div><!-- swiper-button-next end -->

            <!-- swiper-pagination start -->
            <div class="pagination-box">
                <div class="anim-fade tr-delay-06">
                    <div class="swiper-pagination counter-pagination"></div>
                </div>
            </div><!-- swiper-pagination end -->
        </section><!-- one-page-slider end -->



@endsection