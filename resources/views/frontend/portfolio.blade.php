@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')

    <section class="bg-dark position-relative pt-xl-8 overflow-hidden portfolio-banner">
      <!-- Decoration START -->
      <!-- Grad blur -->
      <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
        <img src="{{ asset('FrontendAssets/images/elements/grad-shape/blur-decoration.svg')}}" class="blur-7 opacity-2" alt="Grad shape" />
      </div>

      <!-- Grad blur -->
      <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
        <img src="{{ asset('FrontendAssets/images/elements/grad-shape/blur-decoration.svg')}}" class="blur-8 opacity-1" alt="Grad shape" />
      </div>
      <!-- Decoration START -->

      <!-- Title and content -->
      <div class="inner-container text-center mx-auto position-relative pt-4 pt-sm-5">
        <!-- Breadcrumb -->
        <nav class="mb-2 d-flex justify-content-center" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark pt-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Portfolio
            </li>
          </ol>
        </nav>
        <!-- Title -->
        <h1 class="mb-5 text-white">
          <span class="heading-bg">Our Portfolio</span>
        </h1>
      </div>

      <!-- Curve decoration -->
      <span>
        <svg class="position-absolute bottom-0 start-0 mb-n1 mb-lg-n5 mb-xxl-n7" viewBox="0 0 1950 237"
          style="enable-background: new 0 0 1950 237" xml:space="preserve">
          <path class="fill-body portfolio-svg" d="M1949.5,236.4H0v-164c717.2-131.2,1598.5-54.7,1949.5,0V236.4z" />
        </svg>
      </span>
    </section>
    <!-- =======================
Hero END -->

    <!-- =======================
Portfolio START -->
    <section class="pt-5">
      <div class="container">
        <div class="col-12">
          <div class="w-75 mx-auto">
            <h2 class="text-center">
              Showcasing Innovation in Every <br><span class="heading-bg"> App We Build </span>
            </h2>
          </div>
        </div>
        <!-- Portfolio item START -->
        <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0 d-none">
          <!-- Border -->
          <div class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
          </div>
          <!-- Dot circle -->
          <span
            class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
            <span class="d-block rounded-circle bg-body p-1"> </span>
          </span>

          <div class="row align-items-center g-0">
            <!-- Image -->
            <div class="col-lg-6 p-lg-5">
              <div class="card-img-scale-wrapper rounded-4">
                <a target="_blank"
                  href="https://play.google.com/store/apps/details?id=com.moyenexpress.moyen_express&hl=en">
                  <div class="un-section"></div>
                  <div class="un-section">
                    <div class="reveal">
                      <img src="{{ asset('FrontendAssets/images/MSglobal-images/mobile-app/moyenexpress.jpeg')}}" class="rounded-4"
                        alt="portfolio image">
                    </div>
                  </div>
                </a>
                <div class="un-section"></div>
              </div>
            </div>
            <!-- Content -->
            <div class="col-lg-6">
              <div class="card-body px-2 p-lg-5">
                <!-- Client logo -->
                <div class="mb-3 mb-lg-4">
                  <img src="{{$business_settings->dark_logo_image}}" class="light-mode-item h-50px" alt="client logo">
                  <img src="{{ asset('FrontendAssets/images/MSglobal-images/MS LOGO-02.png')}}" class="dark-mode-item h-50px"
                    alt="client logo">
                </div>
                <!-- Title -->
                <h5 class="mb-3">Moyen Xpress</h5>
                <p>MoyenXpress is your ultimate eCommerce destination, offering a seamless and intuitive shopping
                  experience. Our app provides access to a diverse range of products, from everyday essentials to
                  exclusive items, all curated to meet your needs.</p>
                <!-- List -->
                <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                  <li class="nav-item heading-color">2024</li>
                  <li class="nav-item heading-color">UI/UX </li>
                  <li class="nav-item heading-color">Mobile App Development</li>
                  <li class="nav-item heading-color">UI/UX </li>
                </ul>
                <!-- Button -->
                <a href="#" class="link-primary-grad icon-link icon-link-hover">Request a Quote <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Portfolio item END -->

        <!-- Portfolio item START -->
        <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0 ">
          <!-- Border -->
          <div class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
          </div>
          <!-- Dot circle -->
          <span
            class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
            <span class="d-block rounded-circle bg-body p-1"> </span>
          </span>

          <div class="row align-items-center g-0">
            <!-- Content -->
            <div class="col-lg-6 order-2">
              <div class="card-body px-2 p-lg-5">
                <!-- Client logo -->
                <div class="mb-3 mb-lg-4">
                  <img src="{{$business_settings->dark_logo_image}}" class="light-mode-item h-50px" alt="client logo">
                  <img src="{{ asset('FrontendAssets/images/MSglobal-images/MS LOGO-02.png')}}" class="dark-mode-item h-50px"
                    alt="client logo">
                </div>
                <!-- Title -->
                <h5 class="mb-3">Def Cutz</h5>
                <p>
A refined, responsive site for DefCutz Studios that mirrors its premium grooming brand – showcasing stylish men’s haircuts, bespoke barber services, and immersive visual storytelling. With sleek imagery, clear service breakdowns, and streamlined booking flows, the platform encapsulates the modern barber experience while reinforcing the salon’s upscale identity.
                </p>
                <!-- List -->
                <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                  <li class="nav-item heading-color">2025</li>
                  <li class="nav-item heading-color">UI/UX </li>
                  <li class="nav-item heading-color">Mobile App Development</li>
                  <li class="nav-item heading-color">Website Development</li>
                </ul>
                <!-- Button -->
                <a href="#" class="link-primary-grad icon-link icon-link-hover">Request a Quote <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 order-1 order-lg-2 p-lg-5">
              <div class="card-img-scale-wrapper rounded-4">
                <a href="https://www.astoriatravel.com/" target="_blank">
                  <div class="un-section"></div>
                  <div class="un-section">
                    <div class="reveal">
                      <img src="{{ asset('FrontendAssets/images/MSglobal-images/mobile-app/astoria.jpeg')}}" class="rounded-4"
                        alt="portfolio image">
                    </div>
                  </div>
                  <div class="un-section"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Portfolio item END -->

        <!-- Portfolio item START -->
        <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0 ">
          <!-- Border -->
          <div class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
          </div>
          <!-- Dot circle -->
          <span
            class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
            <span class="d-block rounded-circle bg-body p-1"> </span>
          </span>

          <div class="row align-items-center g-0">
            <!-- Image -->
            <div class="col-lg-6 p-lg-5">
              <div class="card-img-scale-wrapper rounded-4">
                <a href="https://www.drycleaningsoftware.com.au/" target="_blank">
                  <div class="un-section"></div>
                  <div class="un-section">
                    <div class="reveal">
                      <img src="{{ asset('FrontendAssets/images/MSglobal-images/mobile-app/dcme.jpeg')}}" class="rounded-4"
                        alt="portfolio image">
                    </div>
                  </div>
                  <div class="un-section"></div>
                </a>
              </div>
            </div>
            <!-- Content -->
            <div class="col-lg-6">
              <div class="card-body px-2 p-lg-5">
                <!-- Client logo -->
                <div class="mb-3 mb-lg-4">
                  <img src="{{$business_settings->dark_logo_image}}" class="light-mode-item h-50px" alt="client logo">
                  <img src="{{ asset('FrontendAssets/images/MSglobal-images/MS LOGO-02.png')}}" class="dark-mode-item h-50px"
                    alt="client logo">
                </div>
                <!-- Title -->
                <h5 class="mb-3">Capbeast</h5>
                <p>A dynamic eCommerce platform similar to Shopify, CapBeast lets users fully customize caps and hats through an interactive design editor. With real-time previews, flexible product options, and seamless order management, it delivers a personalized shopping experience for custom headwear enthusiasts. </p>
                <!-- List -->
                <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                  <li class="nav-item heading-color">2025</li>
                  <li class="nav-item heading-color">UI/UX </li>
                  <li class="nav-item heading-color">Mobile App Development</li>
                  <li class="nav-item heading-color">Website Development</li>
                </ul>
                <!-- Button -->
                <a href="#" class="link-primary-grad icon-link icon-link-hover">Request a Quote <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Portfolio item END -->

        <!-- Portfolio item START -->
        <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0 ">
          <!-- Border -->
          <div class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
          </div>
          <!-- Dot circle -->
          <span
            class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
            <span class="d-block rounded-circle bg-body p-1"> </span>
          </span>

          <div class="row align-items-center g-0">
            <!-- Content -->
            <div class="col-lg-6 order-2">
              <div class="card-body px-2 p-lg-5">
                <!-- Client logo -->
                <div class="mb-3 mb-lg-4">
                  <img src="{{$business_settings->dark_logo_image}}" class="light-mode-item h-50px" alt="client logo">
                  <img src="{{ asset('FrontendAssets/images/MSglobal-images/MS LOGO-02.png')}}" class="dark-mode-item h-50px"
                    alt="client logo">
                </div>
                <!-- Title -->
                <h5 class="mb-3">School Management App</h5>
                <p>A comprehensive school management system streamlining academics and administration with attendance tracking, fee management, results, and timetables. Featuring dedicated portals for parents, students, and administrators, it ensures secure access, smooth communication, and efficient management across all school operations.</p>
                <!-- List -->
                <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                  <li class="nav-item heading-color">2025</li>
                  <li class="nav-item heading-color">UI/UX </li>
                  <li class="nav-item heading-color">Mobile App Development</li>
                  <li class="nav-item heading-color">Branding</li>
                </ul>
                <!-- Button -->
                <a href="#" class="link-primary-grad icon-link icon-link-hover">Request a Quote <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 order-1 order-lg-2 p-lg-5">
              <div class="card-img-scale-wrapper rounded-4">
                <a href="https://www.itailor.com/" target="_blank">
                  <div class="un-section"></div>
                  <div class="un-section">
                    <div class="reveal">
                      <img src="{{ asset('FrontendAssets/images/MSglobal-images/mobile-app/itailor.jpeg')}}" class="rounded-4 "
                        alt="portfolio image">
                    </div>
                  </div>
                  <div class="un-section"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Portfolio item END -->
        <!-- Portfolio item START -->
        <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0 more-content">
          <!-- Border -->
          <div class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
          </div>
          <!-- Dot circle -->
          <span
            class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
            <span class="d-block rounded-circle bg-body p-1"> </span>
          </span>

          <div class="row align-items-center g-0">
            <!-- Image -->
            <div class="col-lg-6 order-1 order-lg-2 p-lg-5">
              <div class="card-img-scale-wrapper rounded-4">
                <a href="https://play.google.com/store/apps/details?id=com.onepagecrm&hl=en" target="_blank">
                  <div class="un-section"></div>
                  <div class="un-section">
                    <div class="reveal">
                      <img src="{{ asset('FrontendAssets/images/MSglobal-images/mobile-app/onepageCrm.jpeg')}}" class="rounded-4 "
                        alt="portfolio image">
                    </div>
                  </div>
                  <div class="un-section"></div>
                </a>
              </div>
            </div>
            <!-- Content -->
            <div class="col-lg-6 order-2">
              <div class="card-body px-2 p-lg-5">
                <!-- Client logo -->
                <div class="mb-3 mb-lg-4">
                  <img src="{{$business_settings->dark_logo_image}}" class="light-mode-item h-50px" alt="client logo">
                  <img src="{{ asset('FrontendAssets/images/MSglobal-images/MS LOGO-02.png')}}" class="dark-mode-item h-50px"
                    alt="client logo">
                </div>
                <!-- Title -->
                <h5 class="mb-3">Monkey Beanies</h5>
                <p>A robust Laravel and React-based eCommerce platform offering seamless shopping with role-based portals, embroidery customization, live shipping rates, currency conversion, and tiered pricing. Featuring secure payments, real-time tracking, and an intuitive admin panel, it’s a scalable global retail solution.</p>
                <!-- List -->
                <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                  <li class="nav-item heading-color">2025</li>
                  <li class="nav-item heading-color">UI/UX </li>
                  <li class="nav-item heading-color">Mobile App Development</li>
                  <li class="nav-item heading-color">Website Development</li>
                </ul>
                <!-- Button -->
                <a href="#" class="link-primary-grad icon-link icon-link-hover">Request a Quote <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>


          </div>
        </div>
        <!-- Portfolio item END -->

        <!-- Load more button -->
        <!-- <div class="d-grid justify-content-center mt-6">
          <a href="#!" role="button" class="btn btn-secondary mb-0" onclick="toggleContent(this)">
            Load more work
          </a>
        </div> -->
      </div>
    </section>
    <!-- =======================
Portfolio END -->

    <!-- Product features START -->
    <section class="bg-secondary-grad overflow-hidden position-relative py-5 portfolio-sec">
      <!-- Geo gard pattern decoration -->
      <div class="position-absolute bottom-0 start-0 ms-n8 mb-n6">
        <img src="{{ asset('FrontendAssets/images/elements/geo-grad-pattern.svg')}}" class="h-500px opacity-2" alt="pattern" />
      </div>

      <div class="container">
        <!-- Title and slider button -->
        <div class="row mb-4 mb-md-5">
          <!-- Title -->
          <div class="col-md-8 col-xl-6">
            <h2>
              <span class="heading-bg">Success Stories</span> in Design &
              Development
            </h2>
          </div>
          <!-- Buttons -->
          <div class="col-md-4 col-xl-6">
            <!-- Slider arrow -->
            <div class="d-flex justify-content-md-end gap-3 position-relative mt-3">
              <a href="#"
                class="btn btn-lg btn-white btn-icon rounded-circle mb-0 swiper-button-prev-feature rtl-flip"><i
                  class="bi bi-arrow-left"></i></a>
              <a href="#"
                class="btn btn-lg btn-white btn-icon rounded-circle mb-0 swiper-button-next-feature rtl-flip"><i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Features slider START -->
        <div class="swiper swiper-outside-end-n20" data-swiper-options='{
			"spaceBetween": 50,
			"loop": true,
			"autoplay":{
				"pauseOnMouseEnter": true
			},
			"navigation":{
				"nextEl":".swiper-button-next-feature",
				"prevEl":".swiper-button-prev-feature"
			},
			"breakpoints": {
				"576": {"slidesPerView": 2},
				"992": {"slidesPerView": 3},
				"1200": {"slidesPerView": 4}
			}}'>
          <div class="swiper-wrapper">
            <!-- Feature item -->
            <div class="swiper-slide d-none">
              <div class="card card-img-scale rounded-4 overflow-hidden ">
                <!-- Card Image -->
                <img src="{{ asset('FrontendAssets/images/MSglobal-images/portfolio/moyenexpress-DlnZiT4T.png')}}" class="img-scale"
                  alt="portfolio-img" />
                <!-- BG overlay -->
                <div class="bg-overlay bg-dark opacity-4"></div>

                <!-- Card elements -->
                <div class="card-img-overlay p-4 p-xxl-5">
                  <h5 class="text-white">MOYENEXPRESS</h5>
                  <p class="text-white">
                    Shop anything, anywhere—fast and easy with Moyen Xpress.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature item -->
            <div class="swiper-slide ">
              <div class="card card-img-scale rounded-4 overflow-hidden">
                <!-- Card Image -->
                <img src="{{ asset('FrontendAssets/images/MSglobal-images/portfolio/astoria.png')}}" class="img-scale" alt="portfolio-img" />
                <!-- BG overlay -->
                <div class="bg-overlay bg-dark opacity-4"></div>

                <!-- Card elements -->
                <div class="card-img-overlay p-4 p-xxl-5">
                  <h5 class="text-white">Def Cutz Studio</h5>
                  <p class="text-white">
                  ChatGPT said:

A refined, responsive site for DefCutz Studios that mirrors its premium grooming brand – showcasing stylish men’s haircuts, bespoke barber services, and immersive visual storytelling. With sleek imagery, clear service breakdowns, and streamlined booking flows, the platform encapsulates the modern barber experience while reinforcing the salon’s upscale identity.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature item -->
            <div class="swiper-slide">
              <div class="card card-img-scale rounded-4 overflow-hidden">
                <!-- Card Image -->
                <img src="{{ asset('FrontendAssets/images/MSglobal-images/portfolio/itailor.jpg')}}" class="img-scale" alt="portfolio-img" />
                <!-- BG overlay -->
                <div class="bg-overlay bg-dark opacity-4"></div>

                <!-- Card elements -->
                <div class="card-img-overlay p-4 p-xxl-5">
                  <h5 class="text-white">ITAILOR</h5>
                  <p class="text-white">
                    Free Monogramming, Unlimited Designs, and 450+ Premium
                    Cotton Fabrics.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature item -->
            <div class="swiper-slide">
              <div class="card card-img-scale rounded-4 overflow-hidden">
                <!-- Card Image -->
                <img src="{{ asset('FrontendAssets/images/MSglobal-images/portfolio/ONEPAGE.jpg')}}" class="img-scale" alt="portfolio-img" />
                <!-- BG overlay -->
                <div class="bg-overlay bg-dark opacity-4"></div>

                <!-- Card elements -->
                <div class="card-img-overlay p-4 p-xxl-5">
                  <h5 class="text-white">ONEPAGECRM</h5>
                  <p class="text-white">
                    A simple CRM built for your core business needs
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card card-img-scale rounded-4 overflow-hidden">
                <!-- Card Image -->
                <img src="{{ asset('FrontendAssets/images/MSglobal-images/portfolio/thread.jpg')}}" class="img-scale" alt="portfolio-img" />
                <!-- BG overlay -->
                <div class="bg-overlay bg-dark opacity-4"></div>

                <!-- Card elements -->
                <div class="card-img-overlay p-4 p-xxl-5">
                  <h5 class="text-white">THE RED BOX</h5>
                  <p class="text-white">
                    Experience the world’s #1 AI-powered 24/7 self-serve
                    Redbox dry cleaning machine.
                  </p>
                </div>
              </div>
            </div>
            <!-- Feature item -->
            <div class="swiper-slide">
              <div class="card card-img-scale rounded-4 overflow-hidden">
                <!-- Card Image -->
                <img src="{{ asset('FrontendAssets/images/MSglobal-images/portfolio/www.dcme.com.au_.png')}}" class="img-scale"
                  alt="portfolio-img" />
                <!-- BG overlay -->
                <div class="bg-overlay bg-dark opacity-4"></div>

                <!-- Card elements -->
                <div class="card-img-overlay p-4 p-xxl-5">
                  <h5 class="text-white">Capbeast</h5>
                  <p class="text-white">
                 A dynamic eCommerce platform similar to Shopify, CapBeast lets users fully customize caps and hats through an interactive design editor. With real-time previews, flexible product options, and seamless order management, it delivers a personalized shopping experience for custom headwear enthusiasts.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Features slider END -->
      </div>
    </section>
    <!-- =======================
        Product features END -->

    <!-- ======================= CTA START-->
    <section class="py-5">
      <div class="container">
        <div class="bg-secondary-grad position-relative rounded-3 overflow-hidden p-4 p-sm-6">
          <!-- BG pattern -->
          <div class="position-absolute end-0 top-0 rotate-343 mt-n5 me-7 d-none d-sm-block">
            <img src="{{ asset('FrontendAssets/images/elements/geo-grad-pattern.svg')}}" class="h-500px opacity-3" alt="bg pattern" />
          </div>

          <!-- BG pattern -->
          <div class="position-absolute start-0 top-0 rotate-343 mt-n5 ms-n8">
            <img src="{{ asset('FrontendAssets/images/elements/geo-grad-pattern.svg')}}" class="h-300px opacity-1" alt="bg pattern" />
          </div>

          <div class="row g-4 align-items-center position-relative">
            <!-- Title and list -->
            <div class="col-xl-6">
              <h2>
                Ready to transform your
                <span class="text-primary-grad">vision</span> into reality?
              </h2>
              <ul class="list-inline d-flex flex-wrap gap-2 mb-0 mt-3">
                <li class="list-inline-item heading-color">
                  <i class="bi bi-check-circle text-success me-1"></i>No
                  Credit Card Required
                </li>
                <li class="list-inline-item heading-color">
                  <i class="bi bi-check-circle text-success me-1"></i>14 days
                  free trial
                </li>
              </ul>
            </div>

            <!-- Button -->
            <div class="col-xl-6 text-xl-end">
              <a href="{{ route('contact') }}" class="btn btn-dark mb-0">Let's work together</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======================= CTA END-->

    <!-- =======================
Testimonials START -->
    <section class="position-relative pt-0 overflow-hidden">
      <!-- Hand decoration -->
      <div class="position-absolute top-0 end-0 me-7 d-none d-sm-block z-index-2" data-0="right:0%;top:50%;"
        data-top="right:0%;top:90%;">
        <img style="animation: mymove 4s infinite;" src="{{ asset('FrontendAssets/images/elements/hand-dec.png')}}" alt="hand decoration" />
      </div>

      <!-- Grad shape decoration -->
      <div class="position-absolute start-0 bottom-0 mb-n7 ms-n7">
        <img src="{{ asset('FrontendAssets/images/elements/grad-shape/05.png')}}" alt="grad shape" class="image-05" />
      </div>

      <div class="container-fluid">
        <div
          class="max-width-1550 bg-secondary bg-opacity-50 bg-blur position-relative rounded-4 overflow-hidden py-6 py-lg-8">
          <!-- Grad blur decoration -->
          <div class="position-absolute top-0 end-0 mt-n6 ms-n5">
            <img src="{{ asset('FrontendAssets/images/elements/grad-shape/blur-decoration.svg')}}" class="blur-7 opacity-1"
              alt="Grad shape" />
          </div>

          <div class="container">
            <!-- Title -->
            <!-- <div class="inner-container text-center mb-lg-6">
              <h2>Client Testimonials 😍</h2>
            </div> -->

            <!-- Slider contents START -->
            <!-- <div class="row">
              <div class="col-md-8 mx-auto">

                <div class="swiper mt-2 mt-md-4" data-swiper-options='{
							"spaceBetween": 30,
							"autoplay":{
								"delay": 4000,
								"disableOnInteraction": false,
								"pauseOnMouseEnter": true
							},
							"pagination":{
								"el":".swiper-pagination",
								"clickable":"true"
							}}'>
                  <div class="swiper-wrapper mb-5">

                    <div class="swiper-slide">
                      <div class="text-center">

                        <div class="avatar avatar-lg mx-auto flex-shrink-0 mb-4">
                          <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/avatar/09.jpg')}}" alt="avatar" />
                        </div>

                        <blockquote class="mb-4">
                          <p class="lead heading-color mb-0">
                            Our passion for customer excellence is just one
                            reason why we are the market leader. We've always
                            worked very hard to give our customers the best
                            experience. Was out laughter raptures returned
                            outweigh. Luckily cheered colonel I do we attack
                            highest enabled. 
                          </p>
                        </blockquote>

                        <ul class="list-inline mb-4">
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-half text-warning"></i>
                          </li>
                        </ul>

                        <div>
                          <h6 class="mb-0">Jacqueline Miller</h6>
                          <span>Product designer</span>
                        </div>
                      </div>
                    </div>


                    <div class="swiper-slide">
                      <div class="text-center">

                        <div class="avatar avatar-lg mx-auto flex-shrink-0 mb-4">
                          <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/avatar/10.jpg')}}" alt="avatar" />
                        </div>

                        <blockquote class="mb-4">
                          <p class="lead heading-color mb-0">
                            Their team went above and beyond to understand our
                            needs and deliver a solution that exceeded our
                            expectations. They demonstrated throughout the
                            process was truly impressive.
                          </p>
                        </blockquote>

                        <ul class="list-inline mb-4">
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                        </ul>

                        <div>
                          <h6 class="mb-0">Louis Ferguson</h6>
                          <span>Web Developer</span>
                        </div>
                      </div>
                    </div>


                    <div class="swiper-slide">
                      <div class="text-center">

                        <div class="avatar avatar-lg mx-auto flex-shrink-0 mb-4">
                          <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/avatar/01.jpg')}}" alt="avatar" />
                        </div>

                        <blockquote class="mb-4">
                          <p class="lead heading-color mb-0">
                            Was out laughter raptures returned outweigh.
                            Luckily cheered colonel I do we attack highest
                            enabled. Tried law yet style child. The bore of
                            true of no be deal.
                          </p>
                        </blockquote>

                        <ul class="list-inline mb-4">
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-fill text-warning"></i>
                          </li>
                          <li class="list-inline-item fs-6 me-0">
                            <i class="bi bi-star-half text-warning"></i>
                          </li>
                        </ul>

                        <div>
                          <h6 class="mb-0">Emma Watson</h6>
                          <span>UI/UX er</span>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="swiper-pagination swiper-pagination-primary position-absolute bottom-0 mb-3"></div>
                </div>

              </div>
            </div> -->


            <hr class="border-primary border-2 border-opacity-25 my-5" />
            <!-- Divider -->

            <!-- Platform rating START -->
            <div class="row align-items-center px-md-5">
              <div class="col-lg-4">
                <h5 class="mb-4 mb-lg-0">
                  More than 200+ clients using
                  <span class="text-primary">Deveon Inc</span> platform
                </h5>
              </div>

              <!-- App store rating -->
              <div class="col-sm-6 col-lg-4 col-xl-3 border-end border-primary border-opacity-25 ms-auto mb-4 mb-sm-0">
                <div class="d-flex align-items-center">
                  <!-- Icon -->
                  <img src="{{ asset('FrontendAssets/images/elements/apple.svg')}}" class="icon-lg" alt="" />

                  <!-- Content -->
                  <div class="ms-3">
                    <!-- Rating -->
                    <ul class="list-inline mb-1">
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-half text-warning"></i>
                      </li>
                    </ul>
                    <span>4.8 stars on App Store</span>
                  </div>
                </div>
              </div>

              <!-- Google rating -->
              <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="d-flex align-items-center ps-2">
                  <!-- Icon -->
                  <img src="{{ asset('FrontendAssets/images/elements/gicon.svg')}}" class="icon-lg" alt="" />

                  <!-- Content -->
                  <div class="ms-3">
                    <!-- Rating -->
                    <ul class="list-inline mb-1">
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-fill text-warning"></i>
                      </li>
                      <li class="list-inline-item me-0">
                        <i class="bi bi-star-half text-warning"></i>
                      </li>
                    </ul>
                    <span>4.6 stars on Google</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Platform rating END -->
          </div>
        </div>
      </div>
    </section>


@endsection

@section('script')

@endsection
