@extends('layouts.web.base')

@section('main')

<div class="hero overlay inner-page">
    <img src="images/blob.svg" alt="" class="img-fluid blob">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <h1 class="heading text-white mb-3" data-aos="fade-up">Asesoramiento</h1>
            </div>
        </div>
    </div>
</div>

@include('sections.partial.asesoramiento_cards')


@include('sections.partial.contact_info_divided')


@include('sections.partial.asesoramiento2')


@endsection
