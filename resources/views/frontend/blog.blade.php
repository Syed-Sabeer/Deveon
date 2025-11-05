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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Standard</h1>
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
                            Blog Standard
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- News Standard Section Start -->
        <section class="news-standard-section section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-lg-8">
                        <div class="news-standard-wrapper">
                            @foreach($blogs as $blog)
                            <div class="news-standard-items">
                                <div class="thumb">
                                    <img src="{{asset($blog->image)}}" alt="img">
                                </div>
                                <div class="content">

                                    <h3><a  href="{{ route('blog.detail', $blog->slug) }}">{{$blog->title}}</a></h3>
                                    <p>
                                     {{ \Illuminate\Support\Str::words(strip_tags($blog->content), 30, '...') }}

                                    </p>
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="theme-btn">
                                            Read More <i class="fa-regular fa-arrow-right-long"></i>
                                                </a>

                                </div>
                            </div>
                            @endforeach
                           <div class="page-nav-wrap pt-5 text-center">
    <ul>
        {{-- Previous Page --}}
        @if ($blogs->onFirstPage())
            <li><a class="page-numbers disabled" href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
        @else
            <li><a class="page-numbers" href="{{ $blogs->previousPageUrl() }}"><i class="fa-solid fa-arrow-left-long"></i></a></li>
        @endif

        {{-- Page Numbers --}}
        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
            <li>
                <a class="page-numbers {{ $page == $blogs->currentPage() ? 'active' : '' }}" href="{{ $url }}">
                    {{ str_pad($page, 2, '0', STR_PAD_LEFT) }}
                </a>
            </li>
        @endforeach

        {{-- Next Page --}}
        @if ($blogs->hasMorePages())
            <li><a class="page-numbers" href="{{ $blogs->nextPageUrl() }}"><i class="fa-solid fa-arrow-right-long"></i></a></li>
        @else
            <li><a class="page-numbers disabled" href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
        @endif
    </ul>
</div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar sticky-style">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h4>Search</h4>
                                </div>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
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
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp3.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    14 Feb, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Which Yoga Hybrid is Right <br> for Your?
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp4.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    12 Mar, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Keep Your Business Safe <br> Ensure High Availability
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp5.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    23 Feb, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Tackling the Changes of <br> Retell Industry
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h4>Tag</h4>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                        <a href="news-details.html">Security</a>
                                        <a href="news-details.html">Business</a>
                                        <a href="news-details.html">Digital</a>
                                        <a href="news-details.html">Technology</a>
                                        <a href="news-details.html">Change</a>
                                        <a href="news-details.html">Video</a>
                                        <a href="news-details.html">UI/UX Desing</a>
                                        <a href="news-details.html">Startup</a>
                                        <a href="news-details.html">Services</a>
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
                <img src="assets/img/rokect.png" alt="img">
            </div>
            <div class="container">
                <div class="cta-wrapper bg-cover" style="background-image: url('assets/img/cta-bg.jpg');">
                    <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="assets/img/cta-img.png" alt="img">
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
