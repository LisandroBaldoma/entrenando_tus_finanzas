@extends('layouts.web.base')

@section('main')

<div class="hero overlay inner-page">
    <img src="images/blob.svg" alt="" class="img-fluid blob">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <h1 class="heading text-white mb-3" data-aos="fade-up">Contacto</h1>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">

                    <div class="address mt-2">
                        {{-- <i class="icon-room"></i>
                         --}}
                         <i class="bi bi-instagram"></i>

                        {{-- <h4 class="mb-2">Instagram</h4> --}}
                        <p>/entrenandotusfinanzas<br></p>
                    </div>

                    <div class="open-hours mt-4">
                        <i class="bi bi-linkedin"></i>
                        {{-- <h4 class="mb-2">Linkedin</h4> --}}
                        <p>
                            /Franco Tiberti
                        </p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        {{-- <h4 class="mb-2">Email:</h4> --}}
                        <p>tusfinanzasentrenando@gmail.com</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="bi bi-whatsapp"></i>
                        {{-- <h4 class="mb-2"></h4> --}}
                        <p>+54 0341 156 864646</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                {{-- @include('sections.partial.formContacto') --}}

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalCursos"
                        data-bs-whatever="@mdo">
                    Cursos de Finanzas</button>
                    <button type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalAsesoramiento"
                        data-bs-whatever="@fat">
                    Asesoramiento Financiero</button>

                  </div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalCursos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cursos de finanzas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @include('sections.partial.formularios.form_Cursos')
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalAsesoramiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Asesoramiento Financiero</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @include('sections.partial.formularios.form_Asesoram')
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button> --}}
        </div>
      </div>
    </div>
  </div>


  <script>


  </script>



@endsection
