@extends('layout.base')

@section('main')
    <!-- Background image -->
    <!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="background-radial-gradient mb-32">
      <style>
        .background-radial-gradient {
          background-color: hsl(218, 41%, 15%);
          background-image: radial-gradient(650px circle at 0% 0%,
              hsl(218, 41%, 35%) 15%,
              hsl(218, 41%, 30%) 35%,
              hsl(218, 41%, 20%) 75%,
              hsl(218, 41%, 19%) 80%,
              transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
              hsl(218, 41%, 45%) 15%,
              hsl(218, 41%, 30%) 35%,
              hsl(218, 41%, 20%) 75%,
              hsl(218, 41%, 19%) 80%,
              transparent 100%);
        }
      </style>

      <div class="px-6 py-12 text-center md:px-12 lg:text-left">
        <div class="container mx-auto">
          <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="mt-12 lg:mt-0">
              <h1 class="mb-12 text-5xl font-bold tracking-tight text-[hsl(218,81%,95%)] md:text-6xl xl:text-7xl">
                Video de presentacion  <br /><span class="text-[hsl(218,81%,75%)]">Estas preparado para invertir</span>
              </h1>
              <p class="text-lg text-[hsl(218,81%,95%)]">
                Descripcion del video
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minima officia consequatur adipisci tenetur repudiandae rerum
                quos.
              </p>
            </div>
            <div class="mb-12 lg:mb-0">
              <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
                style="padding-top: 56.25%">
                <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 h-full w-full" width="853" height="480" src="https://www.youtube.com/embed/9VsKr-WRDAg" title="Curso Finanzas Personales - Presentación" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->
    <!-- Background image -->

@endsection


