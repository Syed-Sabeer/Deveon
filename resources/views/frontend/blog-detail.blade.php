@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')



    <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
            <div class="left-shape">
                <img src="{{ asset('FrontendAssets/img/breadcrumb-shape.png')}}" alt="img">
            </div>
            <div class="right-shape">
                <img src="{{ asset('FrontendAssets/img/breadcrumb-shape-2.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Details</h1>
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
                            Blog Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- News Details Section Start -->
        <section class="news-details-section section-padding">
            <div class="container">
                <div class="news-details-wrapper">
                    <div class="row g-4">
                        <div class="col-12 col-lg-8">
                            <div class="news-post-details">
                                <div class="single-news-post">
                                    <div class="post-featured-thumb">
                                        <img src="{{asset($blog->image)}}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <ul class="post-list d-flex align-items-center">
                                            <li>
                                                <i class="fa-regular fa-user"></i>
                                                By Admin
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                18 Dec, 2024
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-tag"></i>
                                                Technology
                                            </li>
                                        </ul>
                                        <h3>{{$blog->title}}</h3>
                                        <p class="mb-3">
                                            {!! $blog->content !!}
                                        </p>


                                    </div>
                                </div>
                         <div class="row tag-share-wrap mt-4 mb-5">
    <div class="col-lg-8 col-12">
        <div class="tagcloud">
            <span>Tags:</span>
            @if(!empty($blog->tags))
                @foreach(explode(',', $blog->tags) as $tag)
                    <a >{{ trim($tag) }}</a>
                @endforeach
            @else
                <span>No tags</span>
            @endif
        </div>
    </div>
</div>



                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar sticky-style">
                              
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>All Services</h4>
                                    </div>
                                    <div class="news-widget-categories">
                                        <ul>
                                            <li><a href="news-details.html">Digital Agency</a> <span>(7)</span></li>
                                            <li><a href="news-details.html">Business</a> <span>(4)</span></li>
                                            <li class="active"><a href="news-details.html">Digital Product</a> <span>(5)</span></li>
                                            <li><a href="news-details.html">Social Marketing</a> <span>(3)</span></li>
                                            <li><a href="news-details.html">System</a> <span>(6)</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Recent Post</h3>
                                    </div>
                                    <div class="recent-post-area">
                                        @foreach($latest_blog as $blog)
                                        <div class="recent-items">
                                            <div class="recent-thumb">
                                                <img src="{{ asset('FrontendAssets/img/news/pp4.jpg')}}" alt="img">
                                            </div>
                                            <div class="recent-content">
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    {{ $blog->created_at->format('d M, Y') }}
                                                    </li>
                                                </ul>
                                                <h6>
                                                    <a href="news-details.html">
                                                      {{ $blog->title }}
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                        @endforeach

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
                <img src="{{ asset('FrontendAssets/img/rokect.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="cta-wrapper bg-cover" style="background-image: url('assets/img/cta-bg.jpg');">
                    <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="{{ asset('FrontendAssets/img/cta-img.png')}}" alt="img">
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
