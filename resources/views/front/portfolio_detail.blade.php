{{-- @extends('layouts')
@section('content')

<div class="container cv_portfolio_wrapper">
    <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->nomProjet }}" class="img-fluid mb-3">
    <p>{{ $project->nomProjet }}</p>
    <p><strong>Catégorie :</strong> {{ $project->categorie }}</p>
    <p><strong>Technologies :</strong> {{ $project->techno }}</p>
    <p><strong>Description :</strong> {{ $project->description }}</p>
    <p><strong>Lien :</strong> <a href="{{ $project->lien }}" target="_blank">{{ $project->lien }}</a></p>
    
</div>

@endsection --}}



@extends('layouts')
@section('title', 'Projet détail')
@section('content')
<!-- About Section Start -->
<div class="cv_about_wrapper">
    <div class="cv_container container-fluid  edi">
      <div class="row">
        <div class="col-12">
          <div class="cv_about_content">
            <div class="cv_about_img cv_about_img_cus">
              <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->nomProjet }}" class="img-fluid mb-3 edi">
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="cv_about_content">
            <div class="cv_about_info edi">
              <div class="cv_about_box edi">
                <h3>{{ $project->nomProjet }}</h3>
                <p>
                    Description : {{ $project->description }}
                </p>
                <p><strong>Catégorie : </strong> {{ $project->categorie }}</p>
                <p><strong>Technologies : </strong> {{ $project->techno }}</p>
                <p><strong>Lien : </strong> <a href="{{ $project->lien }}" target="_blank"> Suivre ce lien</a></p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Section End -->
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
