@extends('layouts.web.base')

@section('main')



<div class="hero overlay inner-page">
    <img src="images/blob.svg" alt="" class="img-fluid blob">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up" >Cursos</h1>
        </div>
      </div>
    </div>
  </div>

  {{-- <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 h-full w-full" width="853" height="480" src="https://www.youtube.com/embed/9VsKr-WRDAg" title="Curso Finanzas Personales - Presentación" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}

  @include('sections.partial.cards_cursos')

  @include('sections.partial.contact_info_divided')

  @endsection
