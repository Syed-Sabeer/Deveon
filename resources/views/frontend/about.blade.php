@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')



     <!-- Breadcrumb Section Start -->
     <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('FrontendAssets/img/breadcrumb.jpg')}}');">
            <div class="left-shape">
                <img src="{{asset('FrontendAssets/img/breadcrumb-shape.png')}}" alt="img">
            </div>
            <div class="right-shape">
                <img src="{{asset('FrontendAssets/img/breadcrumb-shape-2.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">about us</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="index.html">
                            Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            about us
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- About Section Start -->
        <section class="about-section-2 fix section-padding">
            <div class="bg-shape">
                <img src="{{asset('FrontendAssets/img/about/bg-shape-2.png')}}" alt="img">
            </div>
            <div class="right-shape float-bob-x">
                <img src="{{asset('FrontendAssets/img/case-studies/right-shaape.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-image">
                                <img src="{{asset('FrontendAssets/img/about/01.jpg')}}" alt="img" class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="box-shape float-bob-y">
                                    <img src="{{asset('FrontendAssets/img/about/box-shape-2.png')}}" alt="img">
                                </div>
                                <div class="gap-shape float-bob-x">
                                    <img src="{{asset('FrontendAssets/img/about/grap-2.png')}}" alt="img">
                                </div>
                                <a href="{{route('about')}}" class="circle-button">
                                    <i class="fa-regular fa-arrow-up-right"></i>
                                    <span class="text-circle">
                                        <img src="{{asset('FrontendAssets/img/about/white-text.png')}}" alt="img">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <div class="sub-title bg-color-2 wow fadeInUp">
                                        <span>About Company</span>
                                    </div>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Let’s make something awesome together
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    We're not just another agency – we're your digital growth partners. With
                                    years of industry experience and a passion for innovation, our team is
                                    dedicated to delivering measurable results propel your business forward.
                                </p>
                                <div class="icon-items-area">
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon">
                                            <i class="icon-01"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Analytics Reporting</h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user </p>
                                        </div>
                                    </div>
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="icon-02"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Data Guard Sentinel</h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-button">
                                    <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                        <a href="{{route('about')}}"> <span class="theme-btn">ABOUT US MORE </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                                    </div>
                                    <a href="{{route('about')}}" class="link-btn wow fadeInUp" data-wow-delay=".5s">EXPLORE MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Counter Section Start -->
        <section class="cta-counter-section-3 fix section-bg section-padding bg-cover" style="background-image: url('{{asset('FrontendAssets/img/cta-counter-bg.jpg')}}');">
            <div class="container">
                <div class="cta-counter-wrapper-2">
                    <div class="section-title-area">
                        <div class="section-title">
                            <div class="sub-title bg-color-3 wow fadeInUp">
                                <span>Counter</span>
                            </div>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                Make your marketing <br> more effective
                            </h2>
                        </div>
                        <div class="counter-box-area">
                            <div class="counter-text wow fadeInUp" data-wow-delay=".3s">
                                <h2>
                                    <span class="count">19.4</span>K
                                </h2>
                                <p>Projects Done</p>
                            </div>
                            <div class="counter-text wow fadeInUp" data-wow-delay=".5s">
                                <h2>
                                    <span class="count">95.2</span>K
                                </h2>
                                <p>Happy Clients</p>
                            </div>
                            <div class="counter-text wow fadeInUp" data-wow-delay=".7s">
                                <h2>
                                    <span class="count">142.6</span>K
                                </h2>
                                <p>Team Members</p>
                            </div>
                        </div>
                    </div>
                    <div class="cta-video-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="{{asset('FrontendAssets/img/cta-video.jpg')}}" alt="img">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-icon video-popup">
                             <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section Start -->
        <section class="value-section fix section-padding section-bg pt-0">
            <div class="value-shape">
                <img src="{{asset('FrontendAssets/img/value-shape.png')}}" alt="img">
            </div>
            <div class="value-shape-2">
                <img src="{{asset('FrontendAssets/img/value-shape-2.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay=".3s">
                    <h2>Our values</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="value-box-items">
                            <div class="icon">
                               <i class="icon-01"></i>
                            </div>
                            <div class="content">
                                <h3>Integrity</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="value-box-items">
                            <div class="icon">
                                <i class="icon-02"></i>
                            </div>
                            <div class="content">
                                <h3>Simplicity</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="value-box-items">
                            <div class="icon">
                                <i class="icon-03"></i>
                            </div>
                            <div class="content">
                                <h3>Performance</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="value-box-items">
                            <div class="icon">
                                <i class="icon-04"></i>
                            </div>
                            <div class="content">
                                <h3>Integrity</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section-33 section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="team-left-content sticky-style ">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>Our EXPART TEAM</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Use SEO to Drive Growth <br> at Your Business
                                </h2>
                            </div>
                            <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                                <button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                <button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="swiper team-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-card-items mt-0">
                                        <div class="team-image">
                                            <img src="{{asset('FrontendAssets/img/team/01.jpg')}}" alt="img">
                                        </div>
                                        <div class="team-content">
                                            <h3><a href="team-details.html">Reful Miya</a></h3>
                                            <p>CO-Leader</p>
                                        </div>
                                        <div class="icon-shape">
                                            <img src="{{asset('FrontendAssets/img/team/icon-shape.png')}}" alt="img">
                                            <div class="social-profile">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card-items mt-0">
                                        <div class="team-image">
                                            <img src="{{asset('FrontendAssets/img/team/02.jpg')}}" alt="img">
                                        </div>
                                        <div class="team-content">
                                            <h3><a href="team-details.html">Shikhon Islam</a></h3>
                                            <p>Web Developer</p>
                                        </div>
                                        <div class="icon-shape">
                                            <img src="{{asset('FrontendAssets/img/team/icon-shape.png')}}" alt="img">
                                            <div class="social-profile">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-3 section-padding pt-0">
            <div class="overlay-shape">
                <img src="{{asset('FrontendAssets/img/testimonial/overlay-shape.png')}}" alt="img">
            </div>
            <div class="overlay-shape-2">
                <img src="{{asset('FrontendAssets/img/testimonial/overlay-shape-2.png')}}" alt="img">
            </div>
            <div class="left-shape">
                <img src="{{asset('FrontendAssets/img/testimonial/left-shape.png')}}" alt="img">
            </div>
            <div class="right-shape">
                <img src="{{asset('FrontendAssets/img/testimonial/right-shape.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="sub-title bg-color-2 wow fadeInUp">
                        <span>TESTIMONIALS</span>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        What our happy customers <br> are saying
                    </h2>
                </div>
                <div class="testimonial-wrapper-3 style-2">
                    <div class="client-1">
                        <img src="{{asset('FrontendAssets/img/testimonial/06.png')}}" alt="img">
                    </div>
                    <div class="client-2">
                        <img src="{{asset('FrontendAssets/img/testimonial/07.png')}}" alt="img">
                    </div>
                    <div class="client-3">
                        <img src="{{asset('FrontendAssets/img/testimonial/08.png')}}" alt="img">
                    </div>
                    <div class="client-4">
                        <img src="{{asset('FrontendAssets/img/testimonial/09.png')}}" alt="img">
                    </div>
                    <div class="swiper testimonial-slider-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="icon">
                                        <img src="{{asset('FrontendAssets/img/testimonial/quote.png')}}" alt="img">
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris nullam the as integer quam dolor nunc semper.  faucibus pulvinar neque. The as Suscipit tristique mauris consectetur platea.
                                    </p>
                                    <div class="client-info">
                                        <div class="client-img">
                                            <img src="{{asset('FrontendAssets/img/testimonial/05.png')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Esther Howard</h6>
                                            <span>Trader, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="icon">
                                        <img src="{{asset('FrontendAssets/img/testimonial/quote.png')}}" alt="img">
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris nullam the as integer quam dolor nunc semper.  faucibus pulvinar neque. The as Suscipit tristique mauris consectetur platea.
                                    </p>
                                    <div class="client-info">
                                        <div class="client-img">
                                            <img src="{{asset('FrontendAssets/img/testimonial/05.png')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Esther Howard</h6>
                                            <span>Trader, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="icon">
                                        <img src="{{asset('FrontendAssets/img/testimonial/quote.png')}}" alt="img">
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris nullam the as integer quam dolor nunc semper.  faucibus pulvinar neque. The as Suscipit tristique mauris consectetur platea.
                                    </p>
                                    <div class="client-info">
                                        <div class="client-img">
                                            <img src="{{asset('FrontendAssets/img/testimonial/05.png')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Esther Howard</h6>
                                            <span>Trader, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <!-- Cta Section Start -->
        <section class="cta-section section-padding pb-0">
            <div class="rokect-shape float-bob-y">
                <img src="{{asset('FrontendAssets/img/rokect.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="cta-wrapper bg-cover" style="background-image: url('{{asset('FrontendAssets/img/cta-bg.jpg')}}');">
                    <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="{{asset('FrontendAssets/img/cta-img.png')}}" alt="img">
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Stay Connected With <br> Cutting Edge IT
                    </h2>
                    <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                        <a href="contact.html"> <span class="theme-btn"> talk TO  A SPECIALIST </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                </div>
            </div>
        </section>



@endsection

@section('script')

@endsection