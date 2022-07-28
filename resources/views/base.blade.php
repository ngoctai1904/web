<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    @yield('title')
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('asset/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<style>
    footer {
        margin-top: 50px
    }
</style>
<!-- body -->

<body class="main-layout home_page">
    {{-- Slideshow --}}

    {{-- end Slideshow --}}


    <!-- loader  -->
    {{-- <div class="loader_bg">
        <div class="loader"><img src="{{asset("assets/images/loading.gif")}}" alt="#" /></div>
    </div> --}}
    <!-- end loader -->

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="/"><img src="{{ asset('assets/images/logo.png') }}"
                                            alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="/">Home</a> </li>
                                        <li> <a href="/about">About us</a> </li>
                                        <li><a href="/books">Our Books</a></li>
                                        <li><a href="/library">library</a></li>
                                        <li><a href="/contact">Contact us</a></li>
                                        <li class="mean-last"> <a href="#"><img
                                            src="{{ asset('assets/images/search_icon.png') }}" /></a> </li>
                                        <li class="mean-last"> <a href="#"><img
                                            src="{{ asset('assets/images/top-icon.png') }}" /></a> </li>
                                        
                                        <li class="mean-last"> <a href="{{ route('cart.list') }}">
                                            <i class="fa fa-shopping-cart"></i>{{ Cart::count() }}</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('assets/images/banner.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua.
                                Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="{{ route('front-list') }}">Read More</a> </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('assets/images/banner.jpg') }}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua.
                                Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="{{ route('front-list') }}">Read More</a> </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('assets/images/banner.jpg') }}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua.
                                Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="{{ route('front-list') }}">Read More</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    @yield('content')
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="Follow">
                            <h3>Follow Us</h3>
                        </div>
                        <ul class="location_icon">
                            <li> <a href="#"><img src="{{ asset('asstes/icon/linkedin.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('asstes/icon/Twitter.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('asstes/icon/instagram.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('asstes/icon/facebook.png') }}"></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="Follow">
                            <h3>Newsletter</h3>
                        </div>
                        <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                        <button class="Subscribe">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright © 2022 Library Books.<a href="https://html.design/">All rights reserved.</a></p>
            </div>
        </div>
    </footer>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        let listHead = document.querySelectorAll('.menu-area-main li a')
        let windowHref = window.location.pathname
        listHead.forEach(e => {
            let href = e.getAttribute('href')
            href == windowHref ? e.parentElement.classList.add('active') : '';
        });
    </script>
</body>

</html>
