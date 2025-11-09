@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')


  <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url({{asset('FrontendAssets/img/breadcrumb.jpg')}});">
            <div class="left-shape">
                <img src="{{ asset('FrontendAssets/img/breadcrumb-shape.png')}}" alt="img">
            </div>
            <div class="right-shape">
                <img src="{{ asset('FrontendAssets/img/breadcrumb-shape-2.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">FAQ’s</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home') }}">
                            Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            FAQ’s
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Faq Section Start -->
        <section class="faq-section section-padding">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4 justify-content-between">
                        <div class="col-xl-5 col-lg-6">
                            <div class="faq-content sticky-style">
                                <div class="section-title">
                                    <div class="sub-title bg-color-2 wow fadeInUp">
                                        <span>FAQ's</span>
                                    </div>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Let’s make something awesome together
                                    </h2>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay=".5s">
                                    We're not just another agency – we're your digital growth partners. With
                                    years of industry experience and a passion for innovation, our team is
                                    dedicated to delivering measurable results propel your business forward.
                                </p>
                                <ul class="faq-list">
                                    <li class="wow fadeInUp" data-wow-delay=".3s">
                                        <i class="fa-regular fa-circle-check"></i>
                                        Top quality service
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s">
                                        <i class="fa-regular fa-circle-check"></i>
                                        Intermodal Shipping
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                          <div class="faq-accordion-items">
    <div class="faq-accordion">
        <div class="accordion" id="accordion">

            @foreach($faqs as $index => $faq)
                @php
                    $faqId = 'faq' . ($index + 1);
                @endphp

                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".{{ $index + 3 }}s">
                    <h5 class="accordion-header">
                        <button 
                            class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#{{ $faqId }}" 
                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                            aria-controls="{{ $faqId }}">
                            {{ $faq->title }}
                        </button>
                    </h5>
                    <div 
                        id="{{ $faqId }}" 
                        class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                        data-bs-parent="#accordion">
                        <div class="accordion-body">
                            {!! $faq->description !!}
                        </div>
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
                        <a href="{{ route('contact') }}"> <span class="theme-btn"> talk TO  A SPECIALIST </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                </div>
            </div>
        </section>



@endsection

@section('script')

@endsection