@extends('layouts')
@section('title', 'Portfolio')
@section('meta_keywords', 'ajavon ayi daniel, ajavon daniel, ajavon, developpeur')
@section('meta_robots', 'index, follow')
@section('content')
<!-- Portfolio Section Start -->
@php
    $categories = $projects->pluck('categorie')->unique();
@endphp

<div class="cv_portfolio_wrapper">
    <div class="cv_container container-fluid">
      <div class="row">
        <div class="col-12">
          <ul class="cv_port_tab">
            <li><a class="active" data-rel="tab-all" href="javascript:void(0)">All</a></li>
            @foreach($categories as $index => $category)
                <li><a data-rel="tab-{{ $index + 1 }}" href="javascript:void(0)">{{ $category }}</a></li>
            @endforeach
        </ul>
          <!-- Tous les projets -->
<div class="cv_tab_pane" id="tab-all" style="display:block;">
  <div class="cv_gallery_wrapper">
    @foreach($projects as $portfolio)
      <div class="cv_gallery_img">
        <a href="{{ route('portfolio.show', $portfolio->id) }}">
          <img src="{{ asset('images/' . $portfolio->image) }}" class="img-fluid">
        </a>
        <span class="cv_gallery_hover">
          <p>{{ $portfolio->categorie }}</p>
          <h4>{{ $portfolio->nomProjet }}</h4>
        </span>
      </div>
    @endforeach
  </div>
</div>




<!-- Par catégorie -->
@foreach($categories as $index => $category)
  <div class="cv_tab_pane" id="tab-{{ $index + 1 }}">
    <div class="cv_gallery_wrapper">
      @foreach($projects->where('categorie', $category) as $portfolio)
        <div class="cv_gallery_img">
          <a href="{{ route('portfolio.show', $portfolio->id) }}">
            <img src="{{ asset('images/' . $portfolio->image) }}" class="img-fluid">
          </a>
          <span class="cv_gallery_hover">
            <p>{{ $portfolio->categorie }}</p>
            <h4>{{ $portfolio->nomProjet }}</h4>
          </span>
        </div>
      @endforeach
    </div>
  </div>
@endforeach
      </div>
    </div>
    

<!-- Par catégorie -->


        
      </div>
    </div>
  </div>
  <!-- Portfolio Section End -->
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

  <script>
    $(document).ready(function () {
      $('.cv_port_tab li a').on('click', function () {
        var target = $(this).data('rel');
  
        $('.cv_port_tab li a').removeClass('active');
        $(this).addClass('active');
  
        $('.cv_tab_pane').hide();
  
        $('#' + target).fadeIn();
      });
    });
  </script>
  