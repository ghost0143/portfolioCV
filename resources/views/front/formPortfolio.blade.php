@extends('layouts')
@section('title', 'Contact')
@section('meta_keywords', 'ajavon ayi daniel, ajavon daniel, ajavon, developpeur')
@section('meta_robots', 'index, follow')
@section('content')


  <!-- Form Section Start -->
  <section class="cv_form_wrapper">
    <form class="cv_contact_form" enctype="multipart/form-data" method="POST" action="{{ route('createProject') }}">
      @csrf
      <div class="cv_container container-fluid">
          <div class="row align-items-center">
              <div class="col-xl-4">
                  <div class="cv_client_heading">
                      <h2>Créer un projet</h2>
                      {{-- <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p> --}}
                  </div>
              </div>
              <div class="col-xl-8">
                  <div class="row">
                      <div class="col-md-6">
                          <input type="text" name="nomProjet" placeholder="Nom du projet" autocomplete="off" required>
                          <input type="text" name="techno" placeholder="Technologie utilisés" autocomplete="off" required>
                          <input type="text" name="categorie" placeholder="Catégorie" autocomplete="off" required>
                          <input type="text" name="lien" placeholder="Lien" autocomplete="off" required>
                          <input type="file" name="image" placeholder="Sujet" autocomplete="off" required>
                      </div>
                      <div class="col-md-6">
                          <textarea name="description" placeholder="Message" rows='5' required></textarea>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="cv_contact_btn">
                      <button type="submit" class="cv_btn">Créer le projet</button>
                  </div>
              </div>
          </div>
      </div>
  </form>
  
  </section>
  <!-- Form Section End -->
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