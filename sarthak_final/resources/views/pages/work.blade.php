@extends('layouts.main')
@push('title')
    <title>Portfolio - Sarthak Media</title>
@endpush
@section('main-section')
    <div class="home-wrapper-5">
        <!-- Hero area start -->
        <section class="hero__area-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="hero__content-5">
                            <h1 class="hero__title-5 animation__word_come">We work with top brands <br> and
                                industry &
                                We share <br> our best works.</h1>
                            <div class="hero__text-5 text-anim">
                                <p>Leading creative agency with over years driving growth, brining
                                    digital arts and engaging growing brands through bold something with us
                                    that matters the how to
                                    best works.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{url('assets/imgs/hero/5/hero-bg-5.png')}}" alt="Shape Image">
        </section>
        <!-- Hero area end -->

        <!-- Portfolio area start -->
        <section class="portfolio__area-5">
            <div id="items__border"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="portfolio__inner-5">
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/1.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/2.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/3.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/4.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/5.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/6.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/1.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work')}}">
                                <img src="{{url('assets/imgs/portfolio/5/2.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work')}}">
                                <img src="{{url('assets/imgs/portfolio/5/3.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work')}}">
                                <img src="{{url('assets/imgs/portfolio/5/4.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/5.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                        <div class="portfolio__item-5">
                            <a href="{{url('/work-details')}}">
                                <img src="{{url('assets/imgs/portfolio/5/6.jpg')}}" alt="Portfolio Image">
                                <div class="portfolio__content-5">
                                    <h2 class="portfolio__name-5">Design, Illustration</h2>
                                    <h3 class="portfolio__title-5">Backov Human</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio area end -->

        <!-- CTA area start -->
        <section class="cta__area-5 pt-130 pb-140">
            <div class="container-fluid">
                <div class="cta__inner-5">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-7">
                            <div class="cta__content-5">
                                <h2 class="cta__title-5 title-anim">what we do for your <br> brands</h2>
                                <div class="cta__list-wrapper">
                                    <div class="cta__item-5">
                                        <h3>Services</h3>
                                        <ul class="cta__list-left">
                                            <li>User experience</li>
                                            <li>User interface</li>
                                            <li>CMS-System</li>
                                            <li>Webshop-System</li>
                                            <li>Native-Apps</li>
                                        </ul>
                                    </div>
                                    <div class="cta__item-5">
                                        <h3>Awards</h3>
                                        <ul class="cta__list-right">
                                            <li> Awwwards - 2019</li>
                                            <li>Dribbble Winner - 2020</li>
                                            <li>Behance - 2021</li>
                                            <li>Ziber award - 2012</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5">
                            <div class="cta__btn-5">
                                <a class="btn-together" href="{{url('/contact')}}">Let’s work together <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA area end -->


    </div>
</main>

@endsection
