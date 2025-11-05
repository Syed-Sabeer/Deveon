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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Service Details</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{route('home')}}">
                            Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Service Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="service-details-section section-padding">
            <div class="container">
                <div class="service-details-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="details-image">
                                <img src="{{asset('FrontendAssets/img/service/details-1.jpg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar sticky-style">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>All Services</h4>
                                    </div>
                                    <div class="service-widget-categories">
                                     <ul>
    @foreach($services as $item)
        <li class="{{ $item->slug === $service->slug ? 'active' : '' }}">
            <a href="{{ route('service.detail', $item->slug) }}">
                {{ $item->heading }}
            </a>
            <span><i class="fa-regular fa-arrow-right-long"></i></span>
        </li>
    @endforeach
</ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="service-details-content">
                                <h3>
                                   {{$service->heading}}
                                </h3>
                                <p class="mb-4">
                                        {!! $service->description !!}
                                </p>
                               
                            </div>
                         <div class="faq-wrapper mt-5">
    <div class="faq-accordion-items">
        <div class="faq-accordion">
            <div class="accordion" id="accordion">

                @if(!empty($service->faq_question) && !empty($service->faq_answer))
                    @foreach($service->faq_question as $index => $question)
                        @php
                            $answer = $service->faq_answer[$index] ?? '';
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
                                    {{ $question }}
                                </button>
                            </h5>
                            <div 
                                id="{{ $faqId }}" 
                                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    {!! $answer !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No FAQs available for this service.</p>
                @endif

            </div>
        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

@section('script')

@endsection