          <script>
            document.addEventListener("DOMContentLoaded", function () {
              const canonical = document.createElement("link");
              canonical.setAttribute("rel", "canonical");
              canonical.setAttribute("href", window.location.origin + window.location.pathname);
              document.head.appendChild(canonical);
              console.log("✅ Canonical tag added:", canonical.outerHTML);

            });
          </script>


  <link rel="canonical" href="https://www.msglobalinc.org" />

  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="{{asset('FrontendAssets/vendor/bootstrap-icons/bootstrap-icons.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('FrontendAssets/vendor/swiper/swiper-bundle.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('FrontendAssets/vendor/glightbox/css/glightbox.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('FrontendAssets/vendor/aos/aos.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('FrontendAssets/css/style.css')}}" />


<style>
</style>
@yield('css')
