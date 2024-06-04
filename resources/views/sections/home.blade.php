@extends('layouts.web.base')

@section('main')

    {{-- HERO SECTION --}}
    <div class="hero overlay">
        <img src="images/blob.svg" alt="" class="img-fluid blob">

             @include('sections.partial.sobremi')

        </div>

        @include('sections.partial.asesoramiento1')

        @include('sections.partial.asesoramiento2')

        @include('sections.partial.info_seccion_divided')

        {{-- @include('sections.partial.asesoramiento3') --}}

        @include('sections.partial.asesoramiento_cards')


    </div>

    {{-- @include('sections.partial.info_seccion_divided') --}}



    @include('sections.partial.contact_info_divided')

    @include('sections.partial.faqs')

    @include('sections.partial.cards_cursos')

    @include('sections.partial.blog')



@endsection
