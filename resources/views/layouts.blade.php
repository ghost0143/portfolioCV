
<!DOCTYPE html>
<html lang="en">
  <!-- Begin Head -->
  <head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--=== custom css ===-->
    <!-- Stylesheets (normes Laravel) -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!--=== custom css ===-->
    <title>@yield('title', 'Accueil | Portfolio AJAVON Ayi Daniel')</title>
    <meta name="description" content="@yield('meta_description', 'Description par défaut de votre site.')">
    <meta name="keywords" content="@yield('meta_keywords', 'mot-clé1, mot-clé2, mot-clé3')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <meta name="author" content="AJAVON Ayi daniel">
    </head>
  <body>
    <div class="cv_main_wrapper">
      <!-- Loader Start -->
      <div class="loader">
        <div class="spinner">
          <img src="{{ asset('assets/images/favicon.png') }}" alt="loader" class="img-fluid">
        </div>
      </div>
      <!-- Loader End -->
      <!-- Bottom To Top Start -->
      <div class="cv_top_icon">
        <a id="button">
          <img src="{{ asset('assets/images/gototop.svg') }}" class="img-fluid">
        </a>
      </div>
      <!-- Bottom To Top End -->
      <!-- Header Section Start -->
      <div class="cv_header_wrapper">
        <div class="cv_container container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="cv_navbar">
                <div class="cv_logo">
                  <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid img-fluid-cus">
                  </a>
                </div>
                <a href="javascript:void(0);" class="cv_toggle_btn">
                  <svg class="ham hamRotate ham7" viewBox="0 0 100 100">
                    <path class="line top" d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013">
                    </path>
                    <path class="line middle" d="m 70,50 h -40">
                    </path>
                    <path class="line bottom" d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar Start -->
      <div class="cv_header_menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="cv_menus_wrapper">
                <ul class="cv_menus">
                  <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                  </li>
                  <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">À propos</a>
                  </li>
                  <li>
                    <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Mes réalisations</a>
                  </li>
                  <li>
                    <a href="{{ route('competence') }}" class="{{ request()->routeIs('competence') ? 'active' : '' }}">Compétences</a>
                  </li>
                  <li>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                  </li>
                </ul>

                <div class="cv_header_social">
                  <h4>Mes réseaux</h4>
                  <ul>
                    <li>
                      <a href="https://www.linkedin.com/in/ayidatech/" target="_blank">
                        <img src="{{ asset('assets/images/fb.svg') }}" alt="Facebook">
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/profile.php?id=61568982433618" target="_blank">
                        <img src="{{ asset('assets/images/in.svg') }}" alt="LinkedIn">
                      </a>
                    </li>
                    </li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

  @yield('content')


    <!--=== Optional JavaScript ===-->
    <!-- Scripts JS (version Laravel) -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/ityped.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!--=== Optional JavaScript ===-->
  </body>
</html>