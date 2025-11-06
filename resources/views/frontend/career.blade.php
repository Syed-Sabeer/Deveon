@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')



    <section class="py-0 career_sec">
      <div class="container-fluid position-relative">
        <!-- Clay decoration -->
        <div class="position-absolute top-0 z-index-2 start-0 translate-middle mt-5 parent-stone">
          <img src="{{ asset('FrontendAssets/images/elements/clay-decoration.png')}}" class="solid-stone" alt="Clay-decoration" />
        </div>

        <!-- Bottom shape decoration -->
        <div class="position-absolute bottom-0 end-0 ms-n5 mb-n8 d-none d-lg-block z-index-2">
          <img src="{{ asset('FrontendAssets/images/elements/grad-shape/02.png')}}" class="h-200px solutionVectors" alt="Shape" />
        </div>

        <div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-5 py-sm-6 py-lg-8">
          <!-- Decoration START -->
          <!-- Grad blur -->
          <div class="position-absolute top-0 start-0 mt-n6 ms-n5">
            <img src="{{ asset('FrontendAssets/images/elements/grad-shape/blur-decoration.svg')}}" class="blur-7 opacity-1"
              alt="Grad shape" />
          </div>
          <!-- Grad blur -->
          <div class="position-absolute top-100 start-50 translate-middle">
            <img src="{{ asset('FrontendAssets/images/elements/grad-shape/blur-decoration-2.svg')}}" class="opacity-2 blur-9"
              alt="Grad shape" />
          </div>
          <!-- Decoration END -->

          <div class="container position-relative" data-bs-theme="dark">
            <!-- Title and button -->
            <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="">
                  <h2 class="text-left mb-4">Now Hiring: Build Your Future with <span class="heading-bg">MS
                      Global</span></h2>
                  <p class="text-left unlead w-75 mb-5">
                    At Deveon, we offer dynamic opportunities tailored to your skills and aspirations—step into your
                    future with us.
                  </p>
                </div>
              </div>
              <div class=" col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="jobs-box">
                  <h5>Apply Now we are hiring
                  </h5>
                  <span>
                  <lord-icon
                      src="https://cdn.lordicon.com/wjyqkiew.json"
                      trigger="loop"
                      delay="2000"
                      colors="primary:#ffffff,secondary:#a39cf4
                      style="width:70px;height:70px">
                  </lord-icon>
                  </span>
                </div>
              </div>
            </div>

          <!-- job list -->
          <div class="row">
          
            <div class="col-xxl-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 mx-auto">
              <!-- Job item -->
              <div
                class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4 overflow-hidden position-relative">
                <!-- Decorative accent line -->
                <div class="position-absolute top-0 start-0 w-100" style="height: 4px; background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 50%, #a855f7 100%);"></div>
                
                <div class="card-body p-5">
                  <!-- Job Title and Badge -->
                  <div class="d-flex justify-content-between align-items-start mb-4">
                    <div class="flex-grow-1">
                      <h4 class="mb-2 fw-bold">Backend Laravel Developer</h4>
                      <span class="badge bg-primary bg-opacity-20 text-primary border border-primary border-opacity-25 px-3 py-2" style="color:#ffff !important;">Full-time</span>
                    </div>
                  </div>

             

                  <!-- Job Summary -->
                  <div class="mb-4">
                    <h6 class="text-primary mb-3 fw-semibold d-flex align-items-center gap-2">
                      <i class="bi bi-file-text"></i>
                      Job Summary
                    </h6>
                    <p class="text-white-50 mb-0 lh-lg">
                      We are seeking a skilled and detail-oriented Backend Laravel Developer to join our growing development team. The ideal candidate will be responsible for building and maintaining robust backend solutions using Laravel and related technologies. You'll work closely with our front-end developers, UI/UX designers, and project managers to deliver high-quality, scalable web applications.
                    </p>
                  </div>

                  <!-- Two Column Layout -->
                  <div class="row g-4 mb-4">
                    <!-- Key Responsibilities -->
                    <div class="col-lg-6">
                      <h6 class="text-primary mb-3 fw-semibold d-flex align-items-center gap-2">
                        <i class="bi bi-list-check"></i>
                        Key Responsibilities
                      </h6>
                      <ul class="list-unstyled mb-0">
                        <li class="mb-2 d-flex align-items-start gap-2">
                          <i class="bi bi-check-circle-fill text-success mt-1"></i>
                          <span class="text-white-50 small">Develop, test, and maintain scalable backend services using Laravel framework.</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start gap-2">
                          <i class="bi bi-check-circle-fill text-success mt-1"></i>
                          <span class="text-white-50 small">Integrate third-party APIs, databases, and internal tools.</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start gap-2">
                          <i class="bi bi-check-circle-fill text-success mt-1"></i>
                          <span class="text-white-50 small">Design and implement RESTful APIs and microservices architecture.</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start gap-2">
                          <i class="bi bi-check-circle-fill text-success mt-1"></i>
                          <span class="text-white-50 small">Collaborate with front-end developers to ensure seamless data flow and application performance.</span>
                        </li>
                      </ul>
                    </div>

                    <!-- Job Information -->
                    <div class="col-lg-6">
                      <h6 class="text-primary mb-3 fw-semibold d-flex align-items-center gap-2">
                        <i class="bi bi-info-circle"></i>
                        Job Information
                      </h6>
                      <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-center gap-3">
                          <div class="bg-primary bg-opacity-10 rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                          </div>
                          <div>
                            <small class="text-white-50 d-block">Location</small>
                            <span class="text-white fw-semibold">Karachi, Pakistan</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                          <div class="bg-primary bg-opacity-10 rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-building text-primary"></i>
                          </div>
                          <div>
                            <small class="text-white-50 d-block">Department</small>
                            <span class="text-white fw-semibold">Production</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                          <div class="bg-primary bg-opacity-10 rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-briefcase-fill text-primary"></i>
                          </div>
                          <div>
                            <small class="text-white-50 d-block">Experience</small>
                            <span class="text-white fw-semibold">3+ Years</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                          <div class="bg-primary bg-opacity-10 rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-currency-dollar text-primary"></i>
                          </div>
                          <div>
                            <small class="text-white-50 d-block">Salary Range</small>
                            <span class="text-white fw-semibold">70k - 100k PKR</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Apply Button -->
                  <div class="d-flex justify-content-end pt-3 border-top border-secondary border-opacity-25">
                    <a href="#" 
                       class="btn btn-primary btn-lg px-4 py-2 d-flex align-items-center gap-2 fw-semibold apply-job-btn"
                       data-bs-toggle="modal" 
                       data-bs-target="#applyForm"
                       data-job-title="Backend Laravel Developer">
                      Apply Now
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- Row END -->
      </div>
      </div>
      </div>
    </section>

    <!-- ======================= Job listing END -->
    <!-- ======================= Recruitment Process START -->

    <!-- ======================= Recruitment Process END -->

    <!-- =======================
Testimonials START -->
    <section class="bg-body position-relative py-5 testi-Sec overflow-hidden">
      <!-- Right side svg decoration -->
      <div class="position-absolute top-100 start-0 translate-middle z-index-2 ms-5 ms-xl-9 mt-5 d-none d-sm-block">
        <img src="{{ asset('FrontendAssets/images/elements/grad-shape/10.png')}}" class="testi-vectors h-500px h-xl-700px rtl-flip" alt="" />
      </div>

      <div class="container position-relative z-index-9">
        <!-- Title -->
        <div class="row align-items-center mb-4 mb-md-5">
          <div class="col-md-7 col-lg-5">
            <h2 class="mb-0">What our clients say</h2>
          </div>

          <div class="col-md-5 ms-sm-auto text-sm-end mt-5 mt-sm-0">
            <!-- Add pagination and navigation elements here -->
            <div class="d-flex gap-2 justify-content-sm-end">
              <a href="#" class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-prev"><i
                  class="bi bi-arrow-left fa-sm"></i></a>
              <a href="#" class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-next"><i
                  class="bi bi-arrow-right fa-sm"></i></a>
            </div>
          </div>
        </div>

        <!-- Testimonials START -->
        <div class="swiper" data-swiper-options='{
				"spaceBetween": 30,
				"breakpoints": {
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"992": {"slidesPerView": 3}
				},
				"navigation":{
					"nextEl":".swiper-button-next",
					"prevEl":".swiper-button-prev"
				}}'>
          <div class="swiper-wrapper">
            <!-- Testimonials item -->
            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      T "Excellent service and response time. Great ability is
                      finding solutions to improve service and client
                      information."
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/wow.png')}}" alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">WOW</p>
                      <!-- <small>Product designer</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonials item -->
            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                      <i class="bi bi-star-fill text-warning"></i>
                    </li>
                  </ul>
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      "My eyes are open after working with you guys."
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/adale.png')}}"
                        alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">
                        Add Money Transfer
                      </p>
                      <!-- <small>Web Developer</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonials item -->
            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      " A Very supporting team specially for non-technical
                      people like me ;) "
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/coctail.png')}}"
                        alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">
                        Ifra Zaidi
                      </p>
                      <!-- <small>UI/UX designer</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonials item -->
            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      Did not believe in the beginning that they can perform a
                      web portal and mobile apps project like uber.com, but in
                      the end i am all satisfied with the company
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/hydra.png')}}"
                        alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">
                        Filip De Vos
                      </p>
                      <!-- <small>Manager</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonials item -->
            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      " A nice and effective skilled team. I would say they
                      are specialists in all ways. Can see my web portal for
                      the proof :) "
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/fashion.png')}}"
                        alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">
                        Remi Ekundayo
                      </p>
                      <!-- <small>UI/UX designer</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      " I found this company realistic specially after a lot
                      of stress given to me by different freelancers in
                      different CRM projects in the past. I feel my self safe
                      now"
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/frank.png')}}"
                        alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">Frank</p>
                      <!-- <small>UI/UX designer</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      " Wow! I never expected such a design and quality. Heads
                      off to Deveon :) "
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/cupid.png')}}"
                        alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">
                        Mesh Digital
                      </p>
                      <!-- <small>UI/UX designer</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                <!-- Card body -->
                <div class="card-body p-0 mb-4">
                  <!-- Rating star -->
                  <ul class="list-inline mb-3">
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
                  <!-- Testimonials text -->
                  <blockquote>
                    <p class="heading-color mb-0">
                      "You guys invented the digital machine for me that was
                      never in my vision."
                    </p>
                  </blockquote>
                </div>
                <!-- Card footer -->
                <div class="card-footer bg-transparent p-0">
                  <!-- Testimonials info -->
                  <div class="d-flex align-items-center">
                    <div class="avatar flex-shrink-0">
                      <img class="avatar-img rounded-circle" src="{{ asset('FrontendAssets/images/MSglobal-images/kppr.png')}}"
                        alt="avatar" />
                    </div>
                    <div class="ms-3">
                      <p class="lead heading-color fw-semibold mb-0">KPPR</p>
                      <!-- <small>UI/UX designer</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonials END -->
      </div>
    </section>
    <!-- =======================
Testimonials END -->

    <!-- Apply form START -->
    <div class="modal fade" id="applyForm" tabindex="-1" aria-labelledby="applyFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h6 class="modal-title mb-0" id="applyFormLabel">Apply form</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="job-application-form" class="modal-body p-4" method="POST" action="{{ route('job.application.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Personal info -->
            <h6 class="mb-3">1. Personal info</h6>
            <div class="row g-3 mb-5">
              <div class="col-md-6">
                <label class="form-label heading-color">First name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="firstname" id="firstname" required />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Last name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="lastname" id="lastname" required />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Email address <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Phone <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" id="phone" required />
              </div>

              <div class="col-12">
                <label class="form-label heading-color">Linkedin url</label>
                <input type="url" class="form-control" name="linkedin_url" id="linkedin_url" placeholder="https://www.linkedin.com/example" />
              </div>
            </div>

            <!-- career info -->
            <h6 class="mb-3">2. career info</h6>
            <div class="row g-3 mb-5">
              <div class="col-md-6">
                <label class="form-label heading-color">Current job place</label>
                <input type="text" class="form-control" name="current_job_place" id="current_job_place" />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Current job position</label>
                <input type="text" class="form-control" name="current_job_position" id="current_job_position" />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Years of Experience <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="yearofexperince" id="yearofexperince" placeholder="e.g., 3+ Years" required />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Current salary</label>
                <input type="text" class="form-control" name="current_salary" id="current_salary" />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Applied for Position <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="applied_for" id="applied_for" required />
              </div>

              <div class="col-md-6">
                <label class="form-label heading-color">Expected salary <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="expected_salary" id="expected_salary" required />
              </div>
            </div>

            <!-- Key document -->
            <h6 class="mb-3">3. Key document</h6>
            <div class="row g-3">
              <div class="col-12">
                <label class="form-label heading-color">Upload your CV <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="resume_file" id="resume_file" accept=".pdf,.doc,.docx" required />
                <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max 5MB)</small>
              </div>

              <div class="col-12">
                <label class="form-label heading-color">Cover letter</label>
                <textarea class="form-control" name="covering_letter" id="covering_letter" style="height: 100px"></textarea>
              </div>

              <div class="col-12">
                <input type="checkbox" class="form-check-input border" id="rememberCheck" required />
                <label class="form-check-label" for="rememberCheck">I have read & accepted Terms & Conditions. <span class="text-danger">*</span></label>
              </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between mt-4">
              <button type="submit" class="btn btn-primary" id="submit-btn">
                Submit now
              </button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>



@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('job-application-form');
    const submitBtn = document.getElementById('submit-btn');
    let isSubmitting = false;
    let submissionId = null;

    // Remove any existing event listeners to prevent duplicates
    if (form) {
        form.removeEventListener('submit', handleSubmit);

        function handleSubmit(e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            console.log('Form submit event triggered, isSubmitting:', isSubmitting);

            // Prevent multiple submissions
            if (isSubmitting) {
                console.log('Already submitting, preventing duplicate');
                return false;
            }

            // Check if terms checkbox is checked
            const termsCheckbox = document.getElementById('rememberCheck');
            if (!termsCheckbox.checked) {
                Swal.fire({
                    title: 'Required!',
                    text: 'Please accept the Terms & Conditions to continue.',
                    icon: 'warning',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
                return false;
            }

            isSubmitting = true;
            submissionId = Date.now(); // Unique ID for this submission

            console.log('Starting submission with ID:', submissionId);

            // Disable submit button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Submitting...';

            // Get form data
            const formData = new FormData(form);

            // Send AJAX request
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                console.log('Response received for submission:', submissionId);
                return response.json();
            })
            .then(data => {
                console.log('Data received for submission:', submissionId, data);

                // Reset button and submission flag
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Submit now';
                isSubmitting = false;

                if (data.status === 'success') {
                    // Show success alert
                    Swal.fire({
                        title: data.title,
                        text: data.message,
                        icon: data.icon,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#3085d6'
                    }).then(() => {
                        // Reset form
                        form.reset();
                        // Close modal
                        const modal = bootstrap.Modal.getInstance(document.getElementById('applyForm'));
                        if (modal) {
                            modal.hide();
                        }
                    });
                } else {
                    // Show error alert
                    let errorMessage = data.message;
                    if (data.errors) {
                        errorMessage = Object.values(data.errors).flat().join('<br>');
                    }

                    Swal.fire({
                        title: data.title,
                        html: errorMessage,
                        icon: data.icon,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#d33'
                    });
                }
            })
            .catch(error => {
                console.error('Error for submission:', submissionId, error);

                // Reset button and submission flag
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Submit now';
                isSubmitting = false;

                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33'
                });
            });

            return false;
        }

        // Add the event listener
        form.addEventListener('submit', handleSubmit);
    }

    // Handle Apply Now button clicks to pre-fill job title
    const applyButtons = document.querySelectorAll('.apply-job-btn');
    applyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const jobTitle = this.getAttribute('data-job-title');
            const appliedForInput = document.getElementById('applied_for');
            if (appliedForInput && jobTitle) {
                appliedForInput.value = jobTitle;
            }
        });
    });

    // Also handle when modal is shown
    const applyFormModal = document.getElementById('applyForm');
    if (applyFormModal) {
        applyFormModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            if (button && button.classList.contains('apply-job-btn')) {
                const jobTitle = button.getAttribute('data-job-title');
                const appliedForInput = document.getElementById('applied_for');
                if (appliedForInput && jobTitle) {
                    appliedForInput.value = jobTitle;
                }
            }
        });
    }
});
</script>
@endsection
