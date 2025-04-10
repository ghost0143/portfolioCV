@extends('layouts')
@section('content')
<!-- Do Section Start -->
<div class="cv_do_wrapper">
    <div class="cv_container container-fluid">
      <div class="row align-items-center">
        <div class="col-xl-4">
          <div class="cv_do_heading">
            <h2>Ce que je fais</h2>
            <p>
              Je développe des sites web et des applications mobiles modernes et performants.
              J’interviens aussi en design UI/UX pour créer des interfaces intuitives et esthétiques.
              Mon objectif : offrir des solutions digitales efficaces.
            </p>
          </div>
          <div class="cv_do_img img-fluid">
            <img src="assets/images/do_img.webp" class="img-fluid">
          </div>
        </div>
        <div class="col-xl-8">
          <div class="row">
            <div class="col-sm-6">
              <div class="cv_do_box">
                <div class="cv_do_icon">
                  <img src="assets/images/do-icon1.svg">
                </div>
                <div class="cv_do_text">
                  <h4>Création de site web</h4>
                  <p>Je conçois des sites web modernes, responsives et adaptés à vos objectifs, qu’il s’agisse de visibilité, ou d’information.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="cv_do_box">
                <div class="cv_do_icon">
                  <img src="assets/images/do-icon2.svg">
                </div>
                <div class="cv_do_text">
                  <h4>Web Design</h4>
                  <p> J’imagine et crée des interfaces élégantes, intuitives et centrées sur l’utilisateur pour offrir une expérience fluide et engageante.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="cv_do_box">
                <div class="cv_do_icon">
                  <img src="assets/images/do-icon3.svg">
                </div>
                <div class="cv_do_text">
                  <h4>Développement d'application mobile</h4>
                  <p> Je développe des applications mobiles performantes, ergonomiques et compatibles iOS/Android pour répondre à vos besoins.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="cv_do_box">
                <div class="cv_do_icon">
                  <img src="assets/images/do-icon4.svg">
                </div>
                <div class="cv_do_text">
                  <h4>Développement d'application web</h4>
                  <p> Je réalise des applications web sur mesure, sécurisées et évolutives pour optimiser vos processus ou services en ligne.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Do Section End -->
  <!-- Award Section Start -->
  <section class="cv_award_wrapper">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6">
          <div class="cv_award_box">
            <div class="cv_award_icon">
              <img src="assets/images/award-1.svg">
            </div>
            <div class="cv_award_text">
              <h1><span class="timer" data-from="0" data-to="15" data-speed="2000"></span>+</h1>
              <h4>Clients Satisfaits</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="cv_award_box">
            <div class="cv_award_icon">
              <img src="assets/images/award-2.svg">
            </div>
            <div class="cv_award_text">
              <h1 class="timer" data-from="0" data-to="10" data-speed="2000"></h1>
              <h4>Collaborateurs</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="cv_award_box">
            <div class="cv_award_icon">
              <img src="assets/images/award-3.svg">
            </div>
            <div class="cv_award_text">
              <h1 class="timer" data-from="0" data-to="2" data-speed="2000"></h1>
              <h4>Ans D'expériences</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Award Section End -->
  <!-- Skill Section Start -->
  <section class="cv_skill_wrapper">
    <div class="cv_container container-fluid">
      <div class="row align-items-center">
        <div class="col-xl-8">
          <div class="row">
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/fig.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Figma</h4>
                    <p>85%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/lara.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Laravel</h4>
                    <p>90%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/pres.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Prestashop</h4>
                    <p>65%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/dj.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Django</h4>
                    <p>75%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/word.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>WordPress</h4>
                    <p>95%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/skill-4.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Flutter</h4>
                    <p>70%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/gi.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Git</h4>
                    <p>90%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/rai.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Rails</h4>
                    <p>75%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/b.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Bootstrap</h4>
                    <p>90%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv_skill_box">
                <div class="cv_skill_icon">
                  <img src="assets/images/ang.svg">
                </div>
                <div class="cv_skill_progress">
                  <div class="cv_skill_text">
                    <h4>Angular</h4>
                    <p>70%</p>
                  </div>
                  <div class="cv_skill_bar">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="cv_exp_info">
            <div class="cv_exp_heading">
              <h2>Compétences</h2>
              <p>
                Je mets un point d'honneur à proposer des solutions sur mesure, en utilisant les dernières technologies et en plaçant toujours l'utilisateur au cœur de mes créations. Voici un aperçu des domaines dans lesquels je suis spécialisé.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Skill Section End -->
  
  <!-- Footer Section Start -->
  <div class="cv_footer_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cv_footer_text">
            <p>Copyright © <span id="copyYear"></span> AJAVON Ayi Daniel. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Section End -->
  @endsection