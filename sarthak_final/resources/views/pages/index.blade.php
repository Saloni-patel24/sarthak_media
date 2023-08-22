@extends('layouts.main')
@push('title')
    <title>Home - Sarthak Media</title>
@endpush
@section('main-section')
            <!-- Hero area start -->
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
            <!-- Hero area end -->



            <!-- About area start -->
            <section class="about__area-3">
                <div class="container pt-140 pb-110">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="about__img-3">
                                <img src="assets/imgs/about/3/1.jpg" alt="About Thumbnail" data-speed="auto">
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Who We Are</h2>
                                <h3 class="sec-title title-anim">We are leading digital marketing agency.</h3>
                            </div>
                            <div class="sec-text-wrapper">
                                <div class="sec-text text-anim">
                                    <p>We’re a team of strategic mdigital marketing working globally with largest brands, We believe
                                        that
                                        progress only happens when you refused to play things safe. We combine ideas and behaviors,
                                        and
                                        insights with design, technological data to produce brand experiences that customers love
                                        our
                                        services.</p>
                                    <div class="btn_wrapper">
                                        <a class="wc-btn-light btn-hover btn-item" href="{{url('/about')}}"><span></span> Explore Us <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About area end -->


            <!-- Service area start -->
            <section class="service__area-7 pt-130">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="service__items-7 animation_service_7">
                                <div class="service__item-7"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                    <a href="{{url('/service-details')}}">
                                        <h3 class="service__title-7">Branding <span>design</span></h3>
                                    </a>
                                    <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                                    </p>
                                    <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul>
                                </div>
                                <div class="service__item-7"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                    <a href="{{url('/service-details')}}">
                                        <h3 class="service__title-7">Interactive <span>Design</span> </h3>
                                    </a>
                                    <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                                    </p>
                                    <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul>
                                </div>
                                <div class="service__item-7"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                    <a href="{{url('/service-details')}}">
                                        <h3 class="service__title-7">Web &amp; Mobile <span>Development</span> </h3>
                                    </a>
                                    <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                                    </p>
                                    <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul>
                                </div>
                                <div class="service__item-7"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                    <a href="{{url('/service-details')}}">
                                        <h3 class="service__title-7">Digital <span> Marketing</span> </h3>
                                    </a>
                                    <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                                    </p>
                                    <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul>
                                </div>
                                <div class="service__item-7"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                    <a href="{{url('/service-details')}}">
                                        <h3 class="service__title-7">Business <span>Strategy</span></h3>
                                    </a>
                                    <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                                    </p>
                                    <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul>
                                </div>
                                <div class="service__item-7"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                    <a href="{{url('/service-details')}}">
                                        <h3 class="service__title-7">Illustration <span>Modelling</span> </h3>
                                    </a>
                                    <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                                    </p>
                                    <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service area end -->


            <!-- Award area start -->
            <section class="workflow__area-3">
                <div class="workflow__wrapper-3">
                    <div class="choose-wrapper wf_panel">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="choose-title-wrapper">
                                        <h2 class="choose-title title-anim">why <br> choose us</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="research__area wf_panel pt-150">
                        <div class="container inner_content">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="sec-title-wrapper">
                                        <h2 class="sec-sub-title">why <br>choose us</h2>
                                        <h3 class="sec-title">Keword,Research Strategy, Survey, & Analytics</h3>
                                        <p>Attention, we take out our round glasses and our sweater with elbow patches to go back to
                                            the
                                            origins of the user experience: the first mention of the user and its importance was
                                            born in the
                                        </p>
                                    </div>
                                    <ul class="research__tools">
                                        <li><a href="#">Google</a></li>
                                        <li><a href="#">pinterest</a></li>
                                        <li><a href="#">Instagram</a></li>
                                    </ul>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="research__list">
                                        <div class="research__item">
                                            <div class="research__number">
                                                <span>60%</span>
                                            </div>
                                            <div class="research__info">
                                                <h4 class="research__title">Strategy</h4>
                                                <p>Your marketing strategy optimizing performances doesn’t have to be a guessing
                                                    game.</p>
                                            </div>
                                        </div>

                                        <div class="research__item">
                                            <div class="research__number">
                                                <span>95%</span>
                                            </div>
                                            <div class="research__info">
                                                <h4 class="research__title">Audience</h4>
                                                <p>Your marketing strategy optimizing performances doesn’t have to be a guessing
                                                    game.</p>
                                            </div>
                                        </div>

                                        <div class="research__item">
                                            <div class="research__number">
                                                <span>70%</span>
                                            </div>
                                            <div class="research__info">
                                                <h4 class="research__title">Keyword</h4>
                                                <p>Your marketing strategy optimizing performances doesn’t have to be a guessing
                                                    game.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="counter__area-3 wf_panel">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="sec-title-wrapper">
                                        <h2 class="sec-sub-title">Why <br>Choose Us</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                    <div class="counter__wrapper-3">
                                        <div class="counter__item-3">
                                            <h2 class="counter__number">25k</h2>
                                            <p>Project <br>completed</p>
                                        </div>
                                        <div class="counter__item-3">
                                            <h2 class="counter__number">8k</h2>
                                            <p>Happy <br>customers</p>
                                        </div>
                                        <div class="counter__item-3">
                                            <h2 class="counter__number">15</h2>
                                            <p>Years <br>experiences</p>
                                        </div>
                                        <div class="counter__item-3">
                                            <h2 class="counter__number">98</h2>
                                            <p>Awards <br>achievement</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                    <div class="counter__img-3">
                                        <img src="{{url('assets/imgs/thumb/counter-3.png')}}" alt="Counter Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA area start -->
                    <div class="cta__area-3 wf_panel">
                        <div class="container pt-150 pb-150">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="cta__content-3">
                                        <p class="cta__sub-title-2">Have you project in mind?</p>
                                        <h2 class="cta__title-2">Let’s make something great together!</h2>
                                        <div class="btn_wrapper">
                                            <a href="{{url('/contact')}}" class="wc-btn-black btn-hover btn-item"><span></span>Contact
                                                <br>with
                                                us <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CTA area end -->

                </div>
            </section>
            <!-- Award area end -->


            <!-- Portfolio area start -->
            <section class="portfolio__area pb-140">
                <div class="container">
                    <div class="row top_row">

                        <h2 class="portfolio__text">work</h2>
                        <div class="portfolio__list-1">
                            <div class="portfolio__item">
                                <a href="{{url('/work-details')}}"><img class="mover" src="{{url('assets/imgs/portfolio/1/1.jpg')}}"
                                        alt="Portfolio Image"></a>
                                <div class="portfolio__info">
                                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <a href="{{url('/work-details')}}"><img src="{{url('assets/imgs/portfolio/1/2.jpg')}}" alt="Portfolio Image"></a>
                                <div class="portfolio__info">
                                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <a href="{{url('/work-details')}}"><img src="{{url('assets/imgs/portfolio/1/3.jpg')}}" alt="Portfolio Image"></a>
                                <div class="portfolio__info">
                                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <a href="{{url('/work-details')}}"><img src="{{url('assets/imgs/portfolio/1/4.jpg')}}" alt="Portfolio Image"></a>
                                <div class="portfolio__info">
                                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <a href="{{url('/work-details')}}"><img src="{{url('assets/imgs/portfolio/1/1.jpg')}}" alt="Portfolio Image"></a>
                                <div class="portfolio__info">
                                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <a href="{{url('/work-details')}}"><img src="{{url('assets/imgs/portfolio/1/2.jpg')}}" alt="Portfolio Image"></a>
                                <div class="portfolio__info">
                                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row row_bottom">
                        <div class="col-xxl-12">
                            <div class="portfolio__btn btn_wrapper" data-speed="1" data-lag="0.2">
                                <a class="wc-btn-secondary btn-hover btn-item" href="{{url('/work')}}"><span></span>View <br>all
                                    projects <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio area end -->


            <!-- Brand area start -->
            <section class="brand__area">
                <div class="container g-0 line pt-140 pb-140">
                    <span class="line-3"></span>
                    <div class="row g-0">
                        <div class="col-xxl-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Internation Brands</h2>
                                <h3 class="sec-title title-anim">We are happy to work with global <br>
                                    largest brands</h3>
                            </div>

                        </div>

                        <div class="brand__list">
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/1.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/2.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/3.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/4.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/5.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/6.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/3.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/4.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/5.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/6.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/1.png" alt="Brand Logo">
                            </div>
                            <div class="brand__item fade_bottom">
                                <img src="assets/imgs/brand/2.png" alt="Brand Logo">
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- Brand area end -->

        <!-- Testimonial area start -->
        <section class="testimonial__area-4 ">
            <div class="container g-0 line_4">
                <div class="line-col-4">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="testimonial__sec-title text-anim">
                            <h2 class="sec-subtile-6">Testimonials</h2>
                            <h3 class="sec-title-6 title-anim">Clients feedback</h3>
                            <p>We are Trusted by 10,000+ global customers teams like have projects with this template</p>
                        </div>
                    </div>
                    <div class="swiper testimonial__slider-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonial__slide-4">
                                <img class="testimonial__img-4" src="assets/imgs/testimonial/4/1.jpg" alt="Testimonial Image">
                                <div class="testimonial__info-4">
                                    <h4 class="testimonial__feedback-4">Design Quality</h4>
                                    <p>Our philosophy is built on people who are addicted on creating, learning, and growing
                                        together, which allows us to discover better others miss.</p>
                                    <h5 class="testimonial__name-4">Jessica Sherlock</h5>
                                    <h6 class="testimonial__role-4">Manager, Oitaka </h6>
                                </div>
                            </div>
                            <div class="swiper-slide testimonial__slide-4">
                                <img class="testimonial__img-4" src="assets/imgs/testimonial/4/2.jpg" alt="Testimonial Image">
                                <div class="testimonial__info-4">
                                    <h4 class="testimonial__feedback-4">Clean Code</h4>
                                    <p>I am very glod happy with this theme, the website loads much faster than any other theme
                                        I
                                        have used so far clean code and responsive layout.</p>
                                    <h5 class="testimonial__name-4">Sharoon Kavin</h5>
                                    <h6 class="testimonial__role-4">CEO, Sharoon</h6>
                                </div>
                            </div>
                            <div class="swiper-slide testimonial__slide-4">
                                <img class="testimonial__img-4" src="assets/imgs/testimonial/4/3.jpg" alt="Testimonial Image">
                                <div class="testimonial__info-4">
                                    <h4 class="testimonial__feedback-4">Instant Support</h4>
                                    <p>In the next time I hire Axtra as they helping innovators and brands through cultural
                                        insight,
                                        strategiccal vision, and innovation and look too beyond.</p>
                                    <h5 class="testimonial__name-4">Sharly Mehroon</h5>
                                    <h6 class="testimonial__role-4">Manager, Kavitan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__btn-4">
                            <div class="next-button swipper-btn"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="prev-button swipper-btn"><i class="fa-solid fa-arrow-right"></i></div>
                            <div class="pagination testimonial__pagination-4">
                                <div class="pag"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end -->



    </main>

    <!-- Blog area start -->
    <section class="blog__area-2 blog__animation">
        <div class="container g-0 pt-150 pb-110">
            <div class="row ">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title title-anim">work Journal</h2>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4">
                    <div class="sec-text text-anim">
                        <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-4">
                    <div class="sec-btn btn_wrapper">
                        <a href="{{url('/blog')}}" class="wc-btn-pink btn-hover btn-item"><span></span> Read <br>all journal <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <article class="blog__item-2">
                        <div class="blog__img-wrapper">
                            <a href="{{url('/blog-details')}}">
                                <div class="img-box">
                                    <img class="image-box__item" src="assets/imgs/blog/1/1.jpg" alt="Blog Thumbnail">
                                    <img class="image-box__item" src="assets/imgs/blog/1/1.jpg" alt="BLog Thumbnail">
                                </div>
                            </a>
                        </div>
                        <h4 class="blog__meta-2"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                        <h5><a href="{{url('/blog-details')}}" class="blog__title-2">Ways of lying to yourself about your
                                new relationship.</a></h5>
                    </article>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <article class="blog__item-2">
                        <div class="blog__img-wrapper">
                            <a href="{{url('/blog-details')}}">
                                <div class="img-box">
                                    <img class="image-box__item" src="assets/imgs/blog/1/2.jpg" alt="Blog Thumbnail">
                                    <img class="image-box__item" src="assets/imgs/blog/1/2.jpg" alt="BLog Thumbnail">
                                </div>
                            </a>
                        </div>
                        <h4 class="blog__meta-2"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                        <h5><a href="{{url('/blog-details')}}" class="blog__title-2">How to manage a talented and
                                successful de sign team</a></h5>
                    </article>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <article class="blog__item-2">
                        <div class="blog__img-wrapper">
                            <a href="{{url('/blog-details')}}">
                                <div class="img-box">
                                    <img class="image-box__item" src="assets/imgs/blog/1/3.jpg" alt="Blog Thumbnail">
                                    <img class="image-box__item" src="assets/imgs/blog/1/3.jpg" alt="BLog Thumbnail">
                                </div>
                            </a>
                        </div>
                        <h4 class="blog__meta-2"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                        <h5><a href="{{url('/blog-details')}}" class="blog__title-2">How to bring fold to your startup
                                company with Axtra</a></h5>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog area end -->


@endsection

