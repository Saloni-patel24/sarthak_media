@extends('layouts.main')
@push('title')
    <title>Portfolio Details - Sarthak Media</title>
@endpush
@section('main-section')
    <!-- Portfolio area start -->
    <section class="portfolio__detail">
        <div class="portfolio__detail-top">
            <div class="container g-0 line pt-110 pb-130">
                <span class="line-3"></span>

                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-7 col-md-7">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-title animation__char_come">Lionpro-Agency</h2>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="portfolio__detail-thumb">
            <img src="assets/imgs/portfolio/detail/1.jpg" alt="Portfolio Thumbnail" data-speed="auto">
        </div>

        <div class="portfolio__detail-content">
            <div class="container g-0 line pt-140">
                <span class="line-3"></span>

                <div class="block-content">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <h2 class="portfolio__detail-title title-anim">Build, streamline and
                                evolve together with
                                solution</h2>
                        </div>

                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="portfolio__detail-text">
                                <p>Always ready to push the boundaries, especially when it comes to our own
                                    platform, Our
                                    analytical
                                    eye
                                    to create a site that was visually engaging and also optimised for
                                    maximum performance. It
                                    also
                                    perfectly reflects the journey to help it tell a story to increase its
                                    understanding and drive
                                    action.
                                    To create a site that was visually engaging for maximum performance.</p>

                                <ul>
                                    <li>+ Brand Development</li>
                                    <li>+ UX/UI Design</li>
                                    <li>+ Front-end Development</li>
                                    <li>+ Copywriting</li>
                                    <li>+ Shopify Development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/imgs/slider/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/imgs/slider/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/imgs/slider/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



                <div class="block-content  pt-140">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <h2 class="portfolio__detail-title title-anim">Visual and typograpy
                                hierarchy</h2>
                        </div>

                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="portfolio__detail-text">
                                <p>Visual hierarchy is the principle of arranging elements to show
                                    their order of importance.
                                    Designers
                                    structure visual characteristics—e.g., menu icons—so users can
                                    understand information easily.
                                    By
                                    laying out elements logically and strategically, designers influence
                                    users’ perceptions and
                                    guide
                                    them
                                    to desired actions. Users notice larger elements more easily can
                                    convert.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="block-gallery">
                    <img src="assets/imgs/portfolio/detail/3.jpg" alt="Portfolio Image">
                    <img src="assets/imgs/portfolio/detail/4.jpg" alt="Portfolio Image">
                </div>

                <div class="block-thumb">
                    <img src="assets/imgs/portfolio/detail/5.jpg" alt="Portfolio Image" data-speed="0.5">
                </div>

                <div class="block-gallery">
                    <img src="assets/imgs/portfolio/detail/3.jpg" alt="Portfolio Image">
                    <img src="assets/imgs/portfolio/detail/4.jpg" alt="Portfolio Image">
                </div>

                <div class="block-thumb">
                    <img src="assets/imgs/portfolio/detail/5.jpg" alt="Portfolio Image" data-speed="0.5">
                </div>


                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="portfolio__detail-btns pt-140 pb-140">
                            <a href="{{url('/work-details')}}" class="wc-btn-primary btn-hover"><span></span>
                                Prev Work</a>
                            <a href="{{url('/work-details')}}" class="wc-btn-primary btn-hover"><span></span>
                                Next Work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Portfolio area end -->

    </main>

@endsection
