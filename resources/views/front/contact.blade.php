@extends('layouts')
@section('content')

  <!-- Address Section Start -->
  <section class="cv_address_wrapper">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="cv_address_box">
            <div class="cv_address_icon">
              <img src="assets/images/add-1.svg">
            </div>
            <div class="cv_address_text">
              <h5>Téléphone</h5>
              <a href="javascript:void(0);">+228 91 79 06 60</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="cv_address_box">
            <div class="cv_address_icon">
              <img src="assets/images/add-2.svg">
            </div>
            <div class="cv_address_text">
              <h5>Email</h5>
              <a href="javascript:void(0);">ayidanielajavon@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="cv_address_box">
            <div class="cv_address_icon">
              <img src="assets/images/add-3.svg">
            </div>
            <div class="cv_address_text">
              <h5>Address</h5>
              <a href="javascript:void(0);">Lomé - Togo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Address Section End -->
  <!-- Form Section Start -->
  <section class="cv_form_wrapper">
    <form class="cv_contact_form" method="POST" action="{{ route('contact.send') }}">
      @csrf
      <div class="cv_container container-fluid">
          <div class="row align-items-center">
              <div class="col-xl-4">
                  <div class="cv_client_heading">
                      <h2>Contact</h2>
                      {{-- <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p> --}}
                  </div>
              </div>
              <div class="col-xl-8">
                  <div class="row">
                      <div class="col-md-6">
                          <input type="text" name="name" placeholder="Nom" autocomplete="off" required>
                          <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                          <input type="text" name="subject" placeholder="Sujet" autocomplete="off" required>
                      </div>
                      <div class="col-md-6">
                          <textarea name="message" placeholder="Message" required></textarea>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="cv_contact_btn">
                      <button type="submit" class="cv_btn">Envoyer</button>
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