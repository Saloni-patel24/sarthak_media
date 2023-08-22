<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Axtra HTML5 Template">

    @stack('title')

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{url('assets/imgs/logo/favicon.png')}}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/progressbar.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/master.css')}}">
    <link rel="stylesheet" href="{{url('style.css')}}">
</head>

<body class="dark">
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>


    <!-- Preloader -->
    <div class="preloader">
        <div class="loading">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>


    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>


    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


    <!-- Header area start -->
    <header class="header__area-7">
        <div class="header__inner-2" style="background-color: black; padding: 10px;">
            <div class="header__logo-2">
                <a href="{{url('/')}}" class="logo-dark"><img src="{{url('assets/images/logo.png')}}" style="width: 250px;" alt="Site Logo"></a>
                <a href="{{url('/')}}" class="logo-light"><img src="{{url('assets/images/logo.png')}}" style="width: 250px;"
                        alt="Site Logo"></a>
            </div>
            <div class="header__nav-icon-7">
                <button class="menu-icon-2" id="open_offcanvas">
                    <img src="{{url('assets/images/menu.png')}}"alt="Menubar Icon" style=" width: 55px;">
                </button>
            </div>
        </div>
    </header>
    <!-- Header area end -->


    <!-- F -->
    <div class="offcanvas__area">
        <div class="offcanvas__body">
            <div class="offcanvas__left">
                <div class="offcanvas__logo">
                    <a href="{{url('/')}}"><img src="{{url('assets/images/logo.png')}}" style="width: 200px;" alt="Offcanvas Logo"></a>
                </div>
                <div class="offcanvas__social">
                    <h3 class="social-title">Follow Us</h3>
                    <ul>
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Behance</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas__mid">
                <div class="offcanvas__menu-wrapper">
                    <nav class="offcanvas__menu">
                        <ul class="menu-anim">
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About Us</a></li>
                            <li>
                                <a>Service</a>
                                <ul>
                                    <li><a href="{{url('/services')}}">Graphic Design</a></li>
                                    <li><a href="{{url('/services')}}">Social Media Marketing</a></li>
                                    <li><a href="{{url('/services')}}">Digital Marketing</a></li>
                                    <li><a href="{{url('/services')}}">Website Development</a></li>
                                    <li><a href="{{url('/services')}}">Application Development</a></li>
                                    <li><a href="{{url('/services')}}">Graphic Design</a></li>

                                </ul>
                            </li>
                            <li><a href="{{url('/about')}}">Creative Work</a></li>
                            <li><a href="{{url('/about')}}">Client</a></li>
                            <li><a href="{{url('/contact')}}">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="offcanvas__right">
                <div class="offcanvas__search">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search keyword">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="offcanvas__contact">
                    <h3>Get in touch</h3>
                    <ul>
                        <li><a href="tel:02094980547">+(02) - 094 980 547</a></li>
                        <li><a href="mailto:info@extradesign.com">info@extradesign.com</a></li>
                        <li>230 Norman Street New York, QC (USA) H8R 1A1</li>
                    </ul>
                </div>
                <img src="{{url('assets/imgs/shape/11.png')}}" alt="shape" class="shape-1">
                <img src="{{url('assets/imgs/shape/12.png')}}" alt="shape" class="shape-2">
            </div>
            <div class="offcanvas__close">
                <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
    </div>
    <!-- Offcanvas area end -->


    <div id="smooth-wrapper">
        <div id="smooth-content">
        <main>
