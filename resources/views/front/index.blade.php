@extends('layouts')
@section('title', 'Accueil | Portfolio AJAVON Ayi Daniel')
@section('meta_description', 'Passionné par le développement et le design, je conçois des solutions digitales sur mesure alliant performance, esthétique et expérience utilisateur. Mon expertise couvre la création de sites web responsives, d\'applications web et mobiles, ainsi que la conception d\'interfaces modernes et ergonomiques.')
@section('meta_keywords', 'ajavon ayi daniel, ajavon daniel, ajavon, developpeur')
@section('meta_robots', 'index, follow')
@section('content')
      <!-- Navbar Start -->
      <!-- Header Section End -->
      <div class="cv_banner_wrapper">
        <div class="cv_container container-fluid  ">
          <div class="row">
            <div class="col-xl-6">
              <div class="cv_banner_img">
                <img src="assets/images/banner-boy.webp" class="img-fluid bnr-boy">
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cv_banner_text">
                <h5>Développeur Full Stack</h5>
                <h1>Salut! <span><img src="assets/images/hand.svg" class="img-fluid"></span>Je suis</h1>
                <h1 class="cv_profile_name">
                  
                </h1>
                  <a href="{{ asset('CV_AJAVON_Ayi_Daniel.pdf') }}" class="cv_btn" download>
                      Télécharger mon CV
                  </a>
              </div>
              <div class="cv_banner_box">
                <h4>Développeur Web & Mobile || UI/UX Designer</h4>
                <p>
                  Passionné par le développement et le design, je conçois des solutions digitales sur mesure alliant performance, esthétique et expérience utilisateur. Mon expertise couvre la création de sites web responsives, d'applications web et mobiles, ainsi que la conception d'interfaces modernes et ergonomiques.
                  Toujours en veille technologique, j'aime transformer des idées en produits concrets et fonctionnels. Mon objectif : créer des expériences digitales qui ont du sens et qui marquent.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection
  