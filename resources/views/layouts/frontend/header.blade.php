 <!-- Header START -->
    <div class="">
      <!-- Top header -->
      <div
        class="alert fade show bg-primary border-0 rounded-0 text-center overflow-hidden z-index-9 py-2 m-0 d-none d-lg-block"
        role="alert">
        <div class="container d-flex justify-content-between px-2 px-xl-4">
          <!-- Contact info -->
          <ul class="list-inline d-flex flex-wrap gap-3 text-white mb-0">
            <li class="list-inline-item small fw-light">
              <i class="bi bi-headset me-2"></i>Call us:
              <a href="tel:{{$business_settings->phone}}" class="link-white">{{$business_settings->phone}} </a>
            </li>
            <li class="list-inline-item small fw-light">
              <i class="bi bi-envelope me-2"></i>Email:
              <a href="mailto:mailto:{{$business_settings->email}}" class="link-white">{{$business_settings->email}}</a>
            </li>
          </ul>

          <!-- Social links -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item small text-white">Follow us on:</li>
            <li class="list-inline-item">
              <a href="{{ $business_settings->facebook_link }}" class="link-white"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="{{ $business_settings->instagram_link }}" class="link-white"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="{{ $business_settings->tiktok_link }}" class="link-white"><i class="bi bi-twitter-x"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="{{ $business_settings->youtube_link }}" class="link-white"><i class="bi bi-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Header START -->
      <header class="header-sticky bg-transparent">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
          <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand me-0" href="index.html">
              <img
                class="light-mode-item navbar-brand-item"
                src="{{$business_settings->dark_logo_image}}"
                alt="logo"
              />
              <img
                class="dark-mode-item navbar-brand-item"
                src="{{$business_settings->dark_logo_image}}"
                alt="logo"
              />
            </a>
            <!-- Logo END -->

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
              <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">
                <!-- Nav item -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>


                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                </li>

                <!-- Nav item -->
                <li class="nav-item dropdown">

                </li>

                <!-- Nav item -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    data-bs-auto-close="outside"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Services</a
                  >
                  <div
                    class="dropdown-menu dropdown-menu-center p-xl-3"
                  >
                    <div class="">
                      <div class="">
                        <div
                          class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3"
                        >
                          <a
                            class="icon-link icon-link-hover text-primary-hover stretched-link"
                            href="/web-development.html"
                            target="_blank"
                            ><i class="bi bi-chevron-right"></i>Web Development
                          </a>
                        </div>
                        <div
                          class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3"
                        >
                          <a
                            class="icon-link icon-link-hover text-primary-hover stretched-link"
                            href="/mobile-app-development.html"
                            target="_blank"
                            ><i class="bi bi-chevron-right"></i>Android & IOS Development
                          </a>
                        </div>
                        <div
                          class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3"
                        >
                          <a
                            class="icon-link icon-link-hover text-primary-hover stretched-link"
                            href="/digital-branding.html"
                            target="_blank"
                            ><i class="bi bi-chevron-right"></i>Digital Branding
                          </a>
                        </div>
                        <div
                          class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3"
                        >
                          <a
                            class="icon-link icon-link-hover text-primary-hover stretched-link"
                            href="/graphics-desiging.html"
                            target="_blank"
                            ><i class="bi bi-chevron-right"></i>Graphics Designing
                          </a>
                        </div>
                        <div
                          class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3"
                        >
                          <a
                            class="icon-link icon-link-hover text-primary-hover stretched-link"
                            href="/SEO.html"
                            target="_blank"
                            ><i class="bi bi-chevron-right"></i>SEO
                          </a>
                        </div>
                        <div
                          class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3"
                        >
                          <a
                            class="icon-link icon-link-hover text-primary-hover stretched-link"
                            href="/social-media.html"
                            target="_blank"
                            ><i class="bi bi-chevron-right"></i>Social Media Marketing
                          </a>
                        </div>
                        <div
                          class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3"
                        >
                          <a
                            class="icon-link icon-link-hover text-primary-hover stretched-link"
                            href="/content-writing.html"
                            target="_blank"
                            ><i class="bi bi-chevron-right"></i>Content Writing
                          </a>
                        </div>
                      </div>


                    </div>
                  </div>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('career') }}">Careers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
              </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Buttons -->
            <ul class="nav align-items-center dropdown-hover ms-sm-2">
              <!-- Dark mode option START -->
              <li class="d-none nav-item dropdown dropdown-animation">
                <button
                  class="btn btn-link mb-0 px-2 lh-1"
                  id="bd-theme"
                  type="button"
                  aria-expanded="false"
                  data-bs-toggle="dropdown"
                  data-bs-display="static">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    class="bi bi-circle-half theme-icon-active fill-mode fa-fw"
                    viewBox="0 0 16 16">
                    <path
                      d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"
                    />
                    <use href="#"></use>
                  </svg>
                </button>

                <ul
                  class="dropdown-menu d-none min-w-auto dropdown-menu-end"
                  aria-labelledby="bd-theme"
                >
                  <li class="mb-1">
                    <button
                      type="button"
                      class="dropdown-item d-flex align-items-center"
                      data-bs-theme-value="light"
                    >
                      <svg
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-brightness-high-fill fa-fw mode-switch me-1"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
                        />
                        <use href="#"></use></svg>Light
                    </button>
                  </li>
                  <li class="mb-1">
                    <button
                      type="button"
                      class="dropdown-item d-flex align-items-center"
                      data-bs-theme-value="dark"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
                        />
                        <path
                          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
                        />
                        <use href="#"></use></svg>Dark
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      class="dropdown-item d-flex align-items-center active"
                      data-bs-theme-value="auto"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-circle-half fa-fw mode-switch me-1"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"
                        />
                        <use href="#"></use></svg>Auto
                    </button>
                  </li>
                </ul>
              </li>
              <!-- Dark mode option END -->

              <!-- Schedule button -->
              <!-- <li class="nav-item ms-2 d-none d-sm-block">
						<a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="offcanvas" data-bs-target="#scheduleCall" aria-controls="scheduleCall"><i class="bi bi-calendar-week me-2"></i>Schedule a call</a>
					</li> -->

              <!-- Responsive navbar toggler -->
              <li class="nav-item">
                <button
                  class="navbar-toggler ms-sm-3 p-2"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse"
                  aria-controls="navbarCollapse"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </button>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Logo Nav END -->
      </header>
      <!-- Header END -->
    </div>
    <!-- Header END -->
