
  <script src="{{asset('FrontendAssets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('FrontendAssets/vendor/ityped/index.js')}}"></script>
  <script src="{{asset('FrontendAssets/vendor/jarallax/jarallax.min.js')}}"></script>
  <script src="{{asset('FrontendAssets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('FrontendAssets/vendor/glightbox/js/glightbox.js')}}"></script>
  <script src="{{asset('FrontendAssets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('FrontendAssets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('FrontendAssets/js/functions.js')}}"></script>
  <script src="{{asset('FrontendAssets/js/dark-mode.js')}}"></script>

<script>
  const favicon = document.getElementById('dynamic-favicon');

  function updateFavicon(e) {
    const isDark = e?.matches ?? window.matchMedia('(prefers-color-scheme: dark)').matches;
    favicon.href = isDark
      ? 'assets/images/MSglobal-images/MS LOGO-02.png'
      : 'assets/images/MSglobal-images/logo.png';
  }


  updateFavicon();


  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateFavicon);
</script>

  <script>

    let counterElement = document.getElementById("productCounter");
    let targetNumber = 14;
    let currentNumber = 0;
    let speed = 100;
    let hasCounterStarted = false;

    function updateCounter() {
      if (currentNumber < targetNumber) {
        currentNumber++;
        counterElement.textContent = currentNumber + "+";
        setTimeout(updateCounter, speed);
      }
    }

    function isInViewport(element) {
      let rect = element.getBoundingClientRect();
      return rect.top >= 0 && rect.bottom <= window.innerHeight;
    }

    window.addEventListener("scroll", function () {
      if (!hasCounterStarted && isInViewport(counterElement)) {
        updateCounter();
        hasCounterStarted = true;
      }
    });


    let imageElement = document.getElementById("scrollImage");
    let sectionElement = document.querySelector(".scroll-section");


    function isInViewport(element) {
      let rect = element?.getBoundingClientRect();
      return rect.top >= 0 && rect.top <= window.innerHeight;
    }

    window.addEventListener("scroll", function () {

      if (isInViewport(sectionElement)) {
        let scrollY = window.scrollY;

        let moveAmount = (scrollY - sectionElement.offsetTop) * 0.5;

        imageElement.style.left = `calc(-100% + ${moveAmount}px)`;

        if (moveAmount > 500) {
          imageElement.style.left = "0";
        }
      } else {
        imageElement.style.left = "-100%";
      }
    });

  </script>


  <script>
    const counter = document.getElementById("counter");
    const target = 2009;
    let count = 2000;
    const duration = 2000; 
    const stepTime = Math.floor(duration / (target - count));
    let started = false;

    function startCounter() {
      if (started) return;
      started = true;

      const interval = setInterval(() => {
        count++;
        counter.textContent = count;
        if (count >= target) {
          clearInterval(interval);
        }
      }, stepTime);
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            startCounter();
            observer.unobserve(counter);
          }
        });
      },
      {
        threshold: 0.5,
      }
    );

    observer.observe(counter);
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@lottiefiles/lottie-player@2.0.12/dist/lottie-player.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="{{asset('FrontendAssets/js/gsap.js')}}"></script>



@yield('script')
@yield('js')

