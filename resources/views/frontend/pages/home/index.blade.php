@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
@php
$about = DB::table('settings')->first()->about;
$phone = DB::table('settings')->first()->phone;
$categories = DB::table('product_categories')->where('is_active', 1)->get();
@endphp


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">






<style>
    header #navbar ul li:nth-child(1) a.active {
        border: 1px solid #fff;
    }

    .footer-link:nth-child(1) a.active {
        border: 1px solid #000;
    }

    @media (max-width: 425px) {
        header #navbar ul li:nth-child(1) a.active {
            border: 0px solid #000;
            background-color: #fff !important;
            color: #000 !important;
        }
    }
</style>
<style>
    .floting-icon {
        position: absolute;
        top: 11%;
        left: 10%;
        width: 40px;
        height: 40px;
        z-index: 100;
    }

    .floting-icon-a img {
        animation-name: zoom-a;
        animation-timing-function: inherit;
        animation-iteration-count: infinite;
        animation-duration: 1.5s;
        transform: scale(0.8);
        animation-delay: 0.2s;
    }

    @keyframes zoom-a {
        1% {
            transform: scale(0.8);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(0.8);
        }
    }

    .floting-icon-b img {
        animation-name: zoom-b;
        animation-timing-function: inherit;
        animation-iteration-count: infinite;
        animation-duration: 1.7s;
        transform: scale(0.8);
        animation-delay: 0.5s;
    }

    @keyframes zoom-b {
        1% {
            transform: scale(0.8);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(0.8);
        }
    }

    .floting-icon-c img {
        animation-name: zoom-c;
        animation-timing-function: inherit;
        animation-iteration-count: infinite;
        animation-duration: 2s;
        transform: scale(0.8);
        animation-delay: 0.5s;
    }

    @keyframes zoom-c {
        1% {
            transform: scale(0.8);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(0.8);
        }
    }

    .floting-icon-1 {
        top: 30%;
        left: 2%;
    }

    .floting-icon-2 {
        top: 5%;
        left: 15%;
    }

    .floting-icon-3 {
        top: 20%;
        left: 21%;
    }

    .floting-icon-4 {
        top: 80%;
        left: 42%;
    }

    .floting-icon-5 {
        top: 85%;
        left: 5%;
    }

    .floting-icon-6 {
        top: 70%;
        left: 23%;
    }

    .floting-icon-7 {
        top: 60%;
        left: 37%;
    }

    .floting-icon-8 {
        top: 12%;
        left: 42%;
    }

    @media (max-width: 425px) {
        #hero {
            height: 50vh !important;
        }

        .floting-icon-3 {
            top: 5% !important;
            left: 81% !important;
        }

        .floting-icon-7 {
            top: 76% !important;
            left: 71% !important;
        }

        .floting-icon-6 {
            top: 74% !important;
            left: 23% !important;
        }

        .home-about-img {
            width: 99%;
            height: 100%;
            margin-top: 20px;
        }


        .floting-icon {
            filter: invert(1);
        }


        #hero .carousel-1-slide::before {
            width: 100%;
            height: 100%;
        }

        #hero .carousel-2-slide::before {
            width: 100%;
            height: 100%;
        }

        #hero .carousel-3-slide::before {
            width: 100%;
            height: 100%;
        }

        #hero .carousel-1-slide::after {
            content: "";
            position: absolute;
            width: 80%;
            height: 50%;
            top: 10vh;
            left: 10%;
            background-color: #fef7ef70;
            transform: rotate(0deg);
        }

        #hero .carousel-2-slide::after {
            width: 80%;
            height: 50%;
            top: 10vh;
            left: 10%;
            background-color: #ffe2d580 !important;
            transform: rotate(0deg);
        }

        #hero .carousel-3-slide::after {
            width: 80%;
            height: 50%;
            top: 10vh;
            left: 10%;
            background-color: #ffeec48c;
            transform: rotate(0deg);
        }

        #hero h2 {
            font-size: 22px !important;
        }

        #counter .section-header span {
            display: none;
        }

        .section-header span {
            font-size: 44px !important;

        }
    }
</style>
<section id="hero">
    <div id="heroCarousel" data-bs-interval="50000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"
                style="background-image: url({{ asset('assets/frontend/images/panner-masala.jpg') }})">
                <div class="carousel-container carousel-1-slide">
                    <div class="container con">
                        <h2 class="animate__animated animate__fadeInDown">The Best</h2>
                        <h2 class="animate__animated animate__fadeInUp">Maharashtrian</h2>
                        <h2 class="animate__animated animate__fadeInUp scrollto btn-get-started">Masala Gravy</h2>
                    </div>
                    <div class="floting-icon-1 floting-icon floting-icon-a animate__animated animate__bounceInLeft">
                        <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-2 floting-icon floting-icon-b animate__animated animate__bounceInDown">
                        <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-3 floting-icon floting-icon-c animate__animated animate__rotateIn">
                        <img src="{{ asset('assets/frontend/images/icon-leaf.png') }}" class="img-fluid p-2" alt="">
                    </div>
                    <div class="floting-icon-4 floting-icon floting-icon-a animate__animated animate__fadeInUp">
                        <img src="{{ asset('assets/frontend/images/icon-star.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-7 floting-icon floting-icon-b animate__animated animate__bounceInUp">
                        <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-8 floting-icon floting-icon-a animate__animated animate__zoomInDown">
                        <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-5 floting-icon floting-icon-c animate__animated animate__fadeInUp">
                        <img src="{{ asset('assets/frontend/images/icon-leaf.png') }}" class="img-fluid p-1" alt="">
                    </div>
                    <div class="floting-icon-6 floting-icon floting-icon-b animate__animated animate__zoomIn">
                        <img src="{{ asset('assets/frontend/images/icon-star.png') }}" class="img-fluid p-1" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/frontend/images/panner-masala.jpg') }})">
                <div class="carousel-container carousel-2-slide">
                    <div class="container con">
                        <h2 class="animate__animated animate__fadeInDown">The Best</h2>
                        <h2 class="animate__animated animate__fadeInUp">Maharashtrian</h2>
                        <h2 class="animate__animated animate__fadeInUp scrollto btn-get-started">Masala Gravy</h2>
                    </div>
                    <div class="floting-icon-1 floting-icon floting-icon-a animate__animated animate__bounceInLeft">
                        <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-2 floting-icon floting-icon-b animate__animated animate__bounceInDown">
                        <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-3 floting-icon floting-icon-c animate__animated animate__rotateIn">
                        <img src="{{ asset('assets/frontend/images/icon-leaf.png') }}" class="img-fluid p-2" alt="">
                    </div>
                    <div class="floting-icon-4 floting-icon floting-icon-a animate__animated animate__fadeInUp">
                        <img src="{{ asset('assets/frontend/images/icon-star.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-7 floting-icon floting-icon-b animate__animated animate__bounceInUp">
                        <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-8 floting-icon floting-icon-a animate__animated animate__zoomInDown">
                        <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-5 floting-icon floting-icon-c animate__animated animate__fadeInUp">
                        <img src="{{ asset('assets/frontend/images/icon-leaf.png') }}" class="img-fluid p-1" alt="">
                    </div>
                    <div class="floting-icon-6 floting-icon floting-icon-b animate__animated animate__zoomIn">
                        <img src="{{ asset('assets/frontend/images/icon-star.png') }}" class="img-fluid p-1" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item "
                style="background-image: url({{ asset('assets/frontend/images/panner-masala.jpg') }})">
                <div class="carousel-container carousel-3-slide">
                    <div class="container con">
                        <h2 class="animate__animated animate__fadeInDown">The Best</h2>
                        <h2 class="animate__animated animate__fadeInUp">Maharashtrian</h2>
                        <h2 class="animate__animated animate__fadeInUp scrollto btn-get-started">Masala Gravy</h2>
                    </div>
                    <div class="floting-icon-1 floting-icon floting-icon-a animate__animated animate__bounceInLeft">
                        <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-2 floting-icon floting-icon-b animate__animated animate__bounceInDown">
                        <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-3 floting-icon floting-icon-c animate__animated animate__rotateIn">
                        <img src="{{ asset('assets/frontend/images/icon-leaf.png') }}" class="img-fluid p-2" alt="">
                    </div>
                    <div class="floting-icon-4 floting-icon floting-icon-a animate__animated animate__fadeInUp">
                        <img src="{{ asset('assets/frontend/images/icon-star.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-7 floting-icon floting-icon-b animate__animated animate__bounceInUp">
                        <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-8 floting-icon floting-icon-a animate__animated animate__zoomInDown">
                        <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="floting-icon-5 floting-icon floting-icon-c animate__animated animate__fadeInUp">
                        <img src="{{ asset('assets/frontend/images/icon-leaf.png') }}" class="img-fluid p-1" alt="">
                    </div>
                    <div class="floting-icon-6 floting-icon floting-icon-b animate__animated animate__zoomIn">
                        <img src="{{ asset('assets/frontend/images/icon-star.png') }}" class="img-fluid p-1" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</section>



<main id="main">
    <style>
        .home-about-content {
            padding-left: 15px;
        }

        .home-about-img {
            overflow: hidden;
            padding: 5px;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .home-about-img img {
            object-fit: cover;
            object-position: center;
            height: 100% !important;
            width: 100% !important;
        }

        /* .title-heading {
      width: fit-content;
      padding: 1px 20px;
      background-color: var(--color-primary);
      color: #fff;
      } */
        #home-about .about-section-header {
            text-align: center;
            position: relative;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid var(--color-primary);
            margin-bottom: 15px;
        }

        #home-about .about-section-header h2 {
            font-size: 26px;
            font-weight: 500;
            text-transform: uppercase;
            padding-bottom: 0;
            color: var(--color-primary);
            position: relative;
            z-index: 2;
            position: relative;
            width: fit-content;
            padding: 0px 20px;
            border-radius: 2px;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        #home-about .about-section-header h2:after {
            content: "";
            position: absolute;
            display: block;
            width: 50px;
            height: 3px;
            background: var(--color-primary);
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        #home-about .about-section-header span {
            position: absolute;
            top: 13px;
            color: rgb(238 240 245 / 85%);
            left: 0;
            right: 0;
            z-index: 1;
            font-weight: 700;
            font-size: 50px;
            text-transform: uppercase;
            line-height: 0;
        }

        .transition {
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }

        /* .fx2 .item {
      padding: 0;
      }*/
        .fx2 .item-ab {
            width: 100%;
            height: 100%;
            border: 2px solid transparent;
        }

        .fx2 .item-ab:hover {
            border: 2px solid var(--color-primary);
        }

        .fx2 .item-ab img {
            padding: 0 !important;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .fx2 a:hover .item-ab img,
        .fx2 a:focus .item-ab img {
            opacity: 0.5;
            -webkit-transform: scale(0.96);
            transform: scale(0.96);
        }

        .fx2 a .item-ab h4 {
            font-size: 22px;
            font-weight: bold;
            position: absolute;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: absolute;
            top: 42%;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            -webkit-filter: blur(1px);
            filter: blur(1px);
            opacity: 0;
            color: var(--color-primary);
        }

        .fx2 a:hover .item-ab h4,
        .fx2 a:focus .item-ab h4 {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            opacity: 1;
        }

        .fx2 a .item-ab p {
            font-size: 14px;
            position: absolute;
            font-weight: 600;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: absolute;
            top: 53%;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            opacity: 0;
        }

        .fx2 a:hover .item-ab p,
        .fx2 a:focus .item-ab p {
            opacity: 1;
        }

        .para {
            text-align: justify;
        }


        .br-sec{
            display: flex;
            justify-content: center;
        }
        .br_line {
            border-top: 1px dashed #555;
            margin: 50px 0px;
            padding: 1px 12px;
        }
    </style>





    <!--categories-->

    <section class="categories section" id="categories">
        <div class="section-header">
            <span>Our Products</span>
            <h2>Our Products</h2>
        </div>
        <div class="container">
            <div class="row gx-4">

                @foreach($categories as $category)
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <figure class="snip1384" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="{{ asset($category->thumbnail_image) }}" class="img-fluid" alt=" masale">
                        <figcaption>
                            <h3>{{$category->name}}</h3>
                            <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias</p><i class="ion-ios-arrow-right"></i>-->
                        </figcaption>
                        <a href="{{ url('category', [$category->id]) }}"></a>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--categories-->


    <!-- =================== home about section  -->
    <section class="home-about section" id="home-about">
        <div class="container">
            <div class="row flex-lg-row-reverse  ">
                <div class="col-lg-7 col-sm-12  col-12 ">
                    <div class="home-about-content" data-aos="zoom-in-down">
                        <div class="about-section-header">
                            <span>About Us</span>
                            <h2>About Us</h2>
                        </div>
                        <p class="para">{!! $about !!}</p>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-sm-12 col-lg-5">
                    <div class="home-about-img fx2" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1000">
                        <a href="{{url('about-us')}}">
                            <div class="item-ab col4">
                                <img class="transition img-responsive"
                                    src="{{ asset('assets/frontend/images/home-about.jpg') }}">

                                <h4>ABOUT US</h4>
                                <p>know more about parijat foods</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>




        <section class="br-sec">
            <div class="container  br_line"></div>
        </section>





        <div class="container">

            <div class="contain">
                <div id="owl-carousel" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-1.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-2.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-3.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-4.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-5.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-7.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>

                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-6.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/frontend/images/product-9.jpg') }}" alt=""
                            class="img-a img-fluid transition img-responsive">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        #categories {
            background-color: #fde5ca ;
        }

        .cat-img {
            border: 3px solid #fff;
            padding: 4px;
        }

        .item {
            background-color: white;
            position: relative;
            display: inline-block;
            margin: 1% 2% 1% 0%;
            overflow: hidden;
            box-shadow: 2px 3px 10px #444444;
        }

        .item .overlay {
            color: #000;
            width: 100%;
            height: 100%;
            background-color: #fff;
            opacity: 0;
            transition: all 0.5s ease;
            position: absolute;
            top: 0;
            bottom: 0;
        }

        /* effect-clean*/
        .clean .overlay span:nth-child(1) {
            position: absolute;
            left: 30%;
            top: 35%;
            font-size: 80px;
            font-weight: bold;
            font-family: coustard;
            transform: translateX(-50%);
        }

        .clean .overlay span:nth-child(2) {
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 17px;
            transform: translateX(-50%);
        }

        .clean .overlay span:nth-child(3) {
            height: 3px;
            background-color: #000;
            position: absolute;
            top: 60%;
            left: 0;
        }

        .clean .overlay:hover {
            opacity: 0.93;
        }

        .clean .overlay:hover span:nth-child(1) {
            animation: slide 0.4s;
        }

        .clean .overlay:hover span:nth-child(2) {
            animation: slide 0.7s;
        }

        .clean .overlay:hover span:nth-child(3) {
            animation: line 0.5s forwards;
        }

        @keyframes slide {
            0% {
                transform: translateX(-10%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes line {
            0% {
                width: 0;
            }

            100% {
                width: 50%
            }
        }

        /* effect-uncover*/
        .uncover .overlay span:nth-child(1) {
            position: absolute;
            left: 50%;
            top: 35%;
            font-size: 80px;
            font-weight: bold;
            font-family: coustard;
            transform: translateX(-50%);
            opacity: 0;
        }

        .uncover .overlay span:nth-child(2) {
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 17px;
            transform: translateY(-50%);
            transform: translateX(-50%);
            opacity: 0;
        }

        .uncover .overlay span:nth-child(3) {
            height: 30px;
            background-color: #000;
            position: absolute;
            top: 38%;
            opacity: 0;
        }

        .uncover .overlay span:nth-child(4) {
            height: 30px;
            background-color: #000;
            position: absolute;
            top: 50%;
            left: 25%;
            opacity: 0;
        }

        .uncover .overlay:hover {
            opacity: 0.9;
        }

        .uncover .overlay:hover span:nth-child(1) {
            animation: fadein 0.6s forwards;
            animation-delay: 0.5s;
        }

        .uncover .overlay:hover span:nth-child(2) {
            animation: fadein 0.6s forwards;
            animation-delay: 0.75s;
        }

        .uncover .overlay:hover span:nth-child(3) {
            animation: draw-left 0.7s;
        }

        .uncover .overlay:hover span:nth-child(4) {
            animation: draw-right 0.7s;
            animation-delay: 0.6s;
        }

        @keyframes draw-left {
            0% {
                opacity: 0;
                width: 0px;
                left: 75%
            }

            50% {
                opacity: 1;
                left: 25%;
                width: 200px;
            }

            100% {
                opacity: 0;
                width: 0px;
                left: 25%;
            }
        }

        @keyframes draw-right {
            0% {
                opacity: 0;
                width: 0px;
            }

            50% {
                opacity: 1;
                width: 200px;
            }

            100% {
                opacity: 0;
                width: 0px;
            }
        }

        @keyframes fadein {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* effect-explode */
        .explode .overlay span:nth-child(1) {
            position: absolute;
            left: 10%;
            top: 45%;
            font-size: 200px;
            font-weight: bold;
            font-family: coustard;
            transform: translateX(-50%);
            opacity: 0;
        }

        .explode .overlay span:nth-child(2) {
            position: absolute;
            top: 80%;
            left: 10%;
            font-size: 17px;
            opacity: 0;
        }

        .explode .overlay span:nth-child(3) {
            position: absolute;
            top: 90%;
            left: 0;
            height: 60px;
            background-color: #000;
        }

        .explode .overlay:hover {
            opacity: 0.9;
        }

        .explode .overlay:hover span:nth-child(1) {
            animation: focus 0.4s forwards;
            animation-delay: 0.2s;
        }

        .explode .overlay:hover span:nth-child(2) {
            animation: focus 0.4s forwards;
            animation-delay: 0.4s;
        }

        .explode .overlay:hover span:nth-child(3) {
            animation: block 0.3s forwards;
            animation-delay: 0.15s;
        }

        @keyframes focus {
            0% {
                transform: scale(1.4) translateX(-30%);
                filter: blur(10px);
                opacity: 0;
            }

            100% {
                transform: scale(1) translateX(0%);
                filter: blur(0px);
                opacity: 1;
            }
        }

        @keyframes block {
            0% {
                width: 0;
                filter: blur(5px);
                opacity: 0;
            }

            100% {
                width: 100%;
                filter: blur(0px);
                opacity: 1;
            }
        }
    </style>


    <style>
        figure.snip1384 {
            position: relative;
            overflow: hidden;
            width: 100%;
            color: #ffffff;
            text-align: left;
            font-size: 16px;
            background-color: transparent;
            border: 1px solid #fff;
            padding: 5px;
        }

        figure.snip1384:hover {
            transform: translateY(-15px) !important;
            /*box-shadow: 0px 12px 12px rgba(0, 0, 0, 0.4);*/
        }

        figure.snip1384 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
        }

        figure.snip1384 img {
            max-width: 100%;
            backface-visibility: hidden;
            vertical-align: top;
        }

        figure.snip1384:after,
        figure.snip1384 figcaption {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        figure.snip1384:after {
            content: '';
            background-color: rgba(0, 0, 0, 0.44);
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
            opacity: 0;
        }

        figure.snip1384 figcaption {
            z-index: 1;
            padding: 20px;
        }

        figure.snip1384 h3,
        figure.snip1384 .links {
            width: 100%;
            margin: 5px 0;
            padding: 0;
        }

        figure.snip1384 h3 {
            line-height: 1.1em;
            font-weight: 19px;
            font-size: 1.4em;
            text-transform: uppercase;
            opacity: 0;
            text-align: center;
        }

        figure.snip1384 p {
            font-size: 14px;
            font-weight: 500;
            letter-spacing: normal;
            opacity: 0;
            top: 50%;
            -webkit-transform: translateY(40px);
            transform: translateY(40px);
            color: #fff;
            line-height: 22px;
            font-size: 15px;
            text-align: center;
        }

        figure.snip1384 i {
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 20px 25px;
            font-size: 34px;
            opacity: 0;
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px);
        }

        figure.snip1384 a {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
        }

        figure.snip1384:hover img,
        figure.snip1384.hover img {
            zoom: 1;
            filter: alpha(opacity=90);
            -webkit-opacity: 0.9;
            opacity: 0.9;
        }

        figure.snip1384:hover:after,
        figure.snip1384.hover:after {
            opacity: 1;
            position: absolute;
            top: 10px;
            bottom: 10px;
            left: 10px;
            right: 10px;
        }

        figure.snip1384:hover h3,
        figure.snip1384.hover h3,
        figure.snip1384:hover p,
        figure.snip1384.hover p,
        figure.snip1384:hover i,
        figure.snip1384.hover i {
            -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
            opacity: 1;
        }

        .fname {
            position: absolute;
            bottom: 30px;
            transform: translateX(35%);
            font-size: 24px;
        }

        .fname {
            position: absolute;
            bottom: 30px;
            transform: translateX(35%);
            font-size: 24px;
        }

        figure.snip1384:hover .fname {
            opacity: 0;
        }

        @media (min-width: 425px) {

            figure.snip1384 h3 {
                line-height: 1em;
                font-weight: 17px;
                font-size: 14px;

            }
        }
    </style>



    <script>
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
    </script>
    <style>
        #counter {
            background: linear-gradient(rgb(14 29 52 / 59%), rgb(14 29 52 / 94%)),
            url('{{asset("assets/frontend/images/counter-background.jpg")}}') center center;
            background-size: cover;
            padding: 50px 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media (min-width: 1365px) {
            #counter {
                background-attachment: fixed;
            }
        }

        #counter .section-header {
            text-align: center;
            position: relative;
            display: flex;
            justify-content: center;
        }

        #counter .section-header h2 {
            font-size: 26px;
            font-weight: 500;
            text-transform: uppercase;
            padding-bottom: 0;
            color: #fff;
            position: relative;
            z-index: 2;
            position: relative;
            width: fit-content;
            padding: 0px 20px;
            border-radius: 2px;
            margin-bottom: 40px;
            padding-bottom: 20px;
        }

        #counter .section-header h2:after {
            content: "";
            position: absolute;
            display: block;
            width: 50px;
            height: 3px;
            background: var(--color-primary);
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        #counter .section-header span {
            position: absolute;
            top: 13px;
            color: rgb(238 240 245 / 15%);
            left: 0;
            right: 0;
            z-index: 1;
            font-weight: 700;
            font-size: 50px;
            text-transform: uppercase;
            line-height: 0;
        }

        #counter .counter-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #counter .counter-box {
            width: 18%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #counter .counter-box h1 {
            color: #fff;
            font-size: 56px;
            position: relative;
            font-weight: 500 !important;
            font-family: Calibri !important;
        }

        #counter .counter-box .purecounter {
            color: #fff;
            font-size: 56px;
            position: relative;
        }

        #counter .counter-box .purecounter::after {
            content: " +";
            font-weight: 500;
            font-size: 40px;
            color: var(--color-primary);
        }

        #counter .counter-box p {
            color: #fff;
            font-size: 18px;
        }

        @media (max-width:1024px) {
            #counter .counter-box {
                width: 18%;
            }

            #counter .counter-box h1 {
                font-size: 52px;
            }

            #counter .counter-box .purecounter {
                font-size: 52px;
            }

            #counter .counter-box .purecounter::after {
                font-size: 40px;
            }

            #counter .counter-box p {
                font-size: 18px;
            }
        }

        @media (max-width:768px) {
            #counter .counter-box {
                width: 19%;
            }

            #counter .counter-box h1 {
                font-size: 32px;
            }

            #counter .counter-box .purecounter {
                font-size: 32px;
            }

            #counter .counter-box .purecounter::after {
                font-size: 40px;
            }

            #counter .counter-box p {
                font-size: 12px;
            }
        }

        @media (max-width:425px) {
            .home-about-content {
                padding: 0px 15px;
            }

            .para {
                text-align: justify;
            }

            #hero h2 {
                font-size: 28px;
            }

            #counter .counter-row {
                justify-content: space-around;
            }

            #counter .counter-box {
                width: 47%;
                margin-bottom: 20px;
            }

            #counter .counter-box:nth-child(5) {
                width: 47%;
                margin-bottom: 0px;
            }

            #counter .counter-box h1 {
                font-size: 46px;
            }

            #counter .counter-box .purecounter {
                font-size: 46px;
            }

            #counter .counter-box .purecounter::after {
                font-size: 36px;
            }

            #counter .counter-box p {
                font-size: 16px;
            }
        }

        @media (max-width:375px) {
            #counter .counter-box {
                width: 80%;
                margin-bottom: 30px;
            }
        }
    </style>
    <section class="counter section" id="counter">
        <div class="section-header">
            <span>All Product Enquries Call Us: {{$phone}}</span>
            <h2>All Product Enquries Call Us: {{$phone}}</h2>
        </div>
        <div class="container">
            <div class="row counter-row pb-5">
                <div class="counter-box counter-box-1" data-aos="zoom-out" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <span data-purecounter-start="1" data-purecounter-end="5" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Year's of Experiance</p>
                </div>
                <div class="counter-box counter-box-1" data-aos="zoom-out" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <span data-purecounter-start="1" data-purecounter-end="75" data-purecounter-duration="5"
                        class="purecounter"></span>
                    <p>Clients</p>
                </div>
                <div class="counter-box counter-box-1" data-aos="zoom-out" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <span data-purecounter-start="1" data-purecounter-end="45" data-purecounter-duration="4"
                        class="purecounter"></span>
                    <p>Product's</p>
                </div>
                <div class="counter-box counter-box-1" data-aos="zoom-out" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <span data-purecounter-start="890" data-purecounter-end="1000" data-purecounter-duration="11"
                        class="purecounter"></span>
                    <p>Order Completed</p>
                </div>
            </div>
        </div>
    </section>




        <style>
            .owl-dots {
                display: none;
            }

            .product_carousel {
                padding: 55px 0px;
            }


            .item {
                align-items: center;
                background-color: #fff;
                color: white;
                display: flex;
                height: auto;
                justify-content: center;
                box-shadow: none;
                    border: 3px solid #f3cfac !important;
            }
            
                       .item:hover{
border: 3px solid #f7b473 !important;
            }
            
            .item:hover img{
transform: scale(0.93);
            }


            .item img {
                box-shadow: none;
    /*border: 3px solid #f3cfac;*/
            }
            
            
        </style>

   

</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        // nav: true,

        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }









    })
</script>
@endsection