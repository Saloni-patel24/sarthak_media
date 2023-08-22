﻿@extends('layouts.main')
@push('title')
    <title>Blog - Sarthak Media</title>
@endpush
@section('main-section')
 <!-- Blog area start -->
        <section class="blog__area-6 blog__animation">
        <div class="container g-0 line pt-110 pb-110">
            <span class="line-3"></span>
            <div class="row pb-130">
            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                <h2 class="sec-title-2 animation__char_come">We always <br>think</h2>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                <div class="blog__text">
                <p>Crafting new bright brands, unique visual systems and digital experience focused on a wide range of
                    original collabs. </p>
                </div>
            </div>
            </div>

            <div class="row reset-grid">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                <div class="blog__img-wrapper">
                    <a href="{{url('/blog-details')}}">
                    <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/1.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/1.jpg" alt="BLog Thumbnail">
                    </div>
                    </a>
                </div>
                <h4 class="blog__meta"><a href="category.html">UI Design</a> . 15 March 2019</h4>
                <h5><a href="{{url('/blog-details')}}" class="blog__title">Ways of lying to yourself about your new
                    relationship.</a></h5>
                <a href="{{url('/blog-details')}}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                <div class="blog__img-wrapper">
                    <a href="{{url('/blog-details')}}">
                    <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/2.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/2.jpg" alt="BLog Thumbnail">
                    </div>
                    </a>
                </div>
                <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                <h5><a href="{{url('/blog-details')}}" class="blog__title">How to manage a talented and successful de sign
                    team</a></h5>
                <a href="{{url('/blog-details')}}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                <div class="blog__img-wrapper">
                    <a href="{{url('/blog-details')}}">
                    <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/3.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/3.jpg" alt="BLog Thumbnail">
                    </div>
                    </a>
                </div>
                <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2022</h4>
                <h5><a href="{{url('/blog-details')}}" class="blog__title">How to bring fold to your startup company with
                    Axtra</a></h5>
                <a href="{{url('/blog-details')}}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                <div class="blog__img-wrapper">
                    <a href="{{url('/blog-details')}}">
                    <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/4.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/4.jpg" alt="BLog Thumbnail">
                    </div>
                    </a>
                </div>
                <h4 class="blog__meta"><a href="category.html">UI Design</a> . 22 Dec 2018</h4>
                <h5><a href="{{url('/blog-details')}}" class="blog__title">Ways of lying to yourself about your new
                    relationship.</a></h5>
                <a href="{{url('/blog-details')}}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                <div class="blog__img-wrapper">
                    <a href="{{url('/blog-details')}}">
                    <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/5.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/5.jpg" alt="BLog Thumbnail">
                    </div>
                    </a>
                </div>
                <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                <h5><a href="{{url('/blog-details')}}" class="blog__title">How to manage a talented and successful de sign
                    team</a></h5>
                <a href="{{url('/blog-details')}}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                <div class="blog__img-wrapper">
                    <a href="{{url('/blog-details')}}">
                    <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/6.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/6.jpg" alt="BLog Thumbnail">
                    </div>
                    </a>
                </div>
                <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                <h5><a href="{{url('/blog-details')}}" class="blog__title">How to bring fold to your startup company with
                    Axtra</a></h5>
                <a href="{{url('/blog-details')}}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
            </div>
            </div>
        </div>
        </section>
        <!-- Blog area end -->


        <!-- CTA area start -->
        <section class="cta__area">
        <div class="container line pb-110">
            <div class="line-3"></div>
            <div class="row">
            <div class="col-xxl-12">
                <div class="cta__content">
                <p class="cta__sub-title">Work with us</p>
                <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                <div class="btn_wrapper">
                    <a href="{{url('/contact')}}" class="wc-btn-primary btn-item btn-hover"><span></span>Let’s talk us <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- CTA area end -->

    </main>





@endsection
