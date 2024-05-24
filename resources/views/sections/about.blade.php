@extends('layout.base')

@section('main')


{{-- <div>

    <!-- Container for demo purpose -->
    <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
        <!-- Jumbotron -->
        <div class="container mx-auto text-center lg:text-left xl:px-32">
            <div class="flex grid items-center lg:grid-cols-2">
            <div class="mb-12 lg:mb-0">
                <div
                class="relative z-[1] block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] dark:bg-[hsla(0,0%,5%,0.55)] dark:shadow-black/20 md:px-12 lg:-mr-14">
                <h2 class="mb-8 text-3xl font-bold">Franco Tiberti</h2>
                <p class="mb-8 pb-2 text-neutral-50 dark:text-neutral-300 lg:pb-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                    soluta corporis voluptate ab error quam dolores doloremque,
                    quae consecteturAAAAA.
                </p>

                <div class="mx-auto mb-8 flex flex-col md:flex-row md:justify-around lg:justify-between">
                    <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-2 h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Contador Publico
                    </p>

                    <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-2 h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Asesor Financiero
                    </p>

                    <p class="mx-auto mb-2 flex items-center md:mx-0 lg:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-2 h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Matricula N° 1628
                    </p>
                </div>

                <p class="mb-0 text-neutral-50 dark:text-neutral-300">
                    In ac turpis justo. Vivamus auctor quam vitae odio feugiat
                    pulvinar. Sed semper ligula sed lorem tincidunt dignissim. Nam
                    sed cursus lectus. Proin non rutrum magna. Proin gravida,
                    justo et imperdiet tristique, turpis nisi viverra est, nec
                    i
                    et lectus sit amet neque luctus viverra.
                </p>
                </div>
            </div>

            <div>
                <img src="{{asset('/img/imgcard.jpg')}}"
                class="w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
            </div>
            </div>
        </div>
        <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->
        <!-- Container for demo purpose -->

</div> --}}

<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      <h2 class="mb-16 text-center text-2xl font-bold"></h2>

      <div class="mb-16 flex flex-wrap">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{asset('/img/franco1.jpg')}}" class="w-full" alt="Louvre"/>
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>

        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
          <h3 class="mb-4 text-2xl font-bold text-neutral-800 ">Franco Tiberti</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-warning dark:text-warning-600">

            <svg class="mr-2 h-5 w-5" fill="#C48A17" width="64px" height="64px" viewBox="0 -20.38 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 82.13" xml:space="preserve" stroke="#C48A17"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M0,66.24c7.11-2.74,13.1-0.95,21.42,1.55c2.17,0.65,4.53,1.36,6.66,1.92c1.9,0.5,4.82-0.58,7.88-1.71 c3.82-1.41,7.8-2.87,12.57-2.75c3.6,0.09,6.63,1.74,9.69,3.41c1.92,1.05,3.87,2.11,4.95,2.15c1.24,0.04,3.08-1.04,4.92-2.12 c3-1.77,6-3.54,10.17-3.68c4.48-0.15,7.95,1.39,11.39,2.92c1.96,0.87,3.91,1.74,5.54,1.86c1.54,0.12,3.6-1.2,5.6-2.47 c2.78-1.78,5.51-3.52,9.1-3.92c4.27-0.47,8.93,1.54,12.89,3.24l0.1,0.05c0,4.05,0,8.11,0,12.16c-0.85-0.25-1.73-0.59-2.64-0.96 c-0.63-0.26-1.28-0.54-1.94-0.82c-2.71-1.16-5.9-2.54-7.17-2.4c-1.02,0.11-2.63,1.14-4.27,2.19c-0.6,0.38-1.21,0.77-1.82,1.15 c-3.04,1.85-6.34,3.43-10.69,3.1c-3.54-0.27-6.42-1.55-9.31-2.84l-0.25-0.11c-2.16-0.96-4.33-1.89-6.17-1.83 c-1.13,0.04-2.75,0.95-4.39,1.91l-0.38,0.22c-3.25,1.92-6.51,3.84-11.08,3.67c-3.73-0.14-6.87-1.84-9.96-3.53l-0.39-0.21 c-1.72-0.94-3.37-1.8-4.16-1.82c-2.42-0.06-5.21,0.91-7.92,1.91l-0.47,0.17c-4.74,1.75-9.26,3.41-14.62,2.01 c-2.88-0.75-5.06-1.41-7.06-2.01l-0.06-0.02c-7.25-2.18-11.98-3.58-17.65,0.13c-0.15,0.1-0.31,0.2-0.47,0.31v-0.31V66.24L0,66.24z M87.91,17.06l14.16-2.15c8.81-1.32,6.16-17.18-5.13-14.64l-32.11,5.3c-3.48,0.57-9.45,1.01-12.05,3.33 c-1.49,1.33-2.11,3.18-1.77,5.49c0.48,3.27,3.21,7.37,4.85,10.34l3.97,7.14c2.89,5.19,4.44,5.69-0.91,8.56L22.45,59.99l2.67,0.79 l8.01,0.12c0.91-0.3,1.86-0.65,2.83-1.01c3.82-1.41,7.8-2.87,12.57-2.75c3.6,0.09,6.63,1.74,9.69,3.41l1.38,0.74l7.06,0.11 c0.47-0.26,0.95-0.54,1.42-0.82c3-1.77,6-3.54,10.17-3.68c4.48-0.15,7.95,1.39,11.39,2.92c1.96,0.87,3.91,1.74,5.54,1.86 c0.37,0.03,0.77-0.03,1.19-0.14L77.79,28.5c-1.58-2.81-4.42-6.36-4.01-8.5c0.14-0.72,1.1-1.01,2.27-1.19 C80.01,18.24,83.95,17.66,87.91,17.06L87.91,17.06z M103.21,24.42c7.77,0,14.07,6.3,14.07,14.07c0,7.77-6.3,14.07-14.07,14.07 c-7.77,0-14.07-6.3-14.07-14.07C89.15,30.71,95.44,24.42,103.21,24.42L103.21,24.42z"></path> </g> </g></svg>

            Contador
          </div>
          <p class="mb-6 text-sm text-neutral-800 dark:text-neutral-500">
            Egresado en la UNR
          </p>
          <p class="mb-6 text-neutral-40 dark:text-neutral-400">
            Soy Franco Tiberti, Contador Público egresado en la UNR y asesor financiero registrado ante la Comisión Nacional de Valores bajo la matrícula N° 1628.
            Soy idóneo en mercado de capitales, y he realizado la Diplomatura en Asesoramiento Financiero además de múltiples cursos y talleres de formación bursátil en su gran mayoría en la Bolsa de Comercio de Rosario.

          </p>
          <p class="text-neutral-50 dark:text-neutral-300">
            {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quae
            nulla saepe rerum aspernatur odio amet perferendis tempora
            mollitia? Ratione unde magni omnis quaerat blanditiis cumque
            dolore placeat rem dignissimos? --}}
          </p>
        </div>
      </div>

      <div class="mb-16 flex flex-wrap lg:flex-row-reverse">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pl-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{asset('/img/francocharla.jpg')}}" class="w-full" alt="Louvre"/>
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>

        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6">
          <h3 class="mb-4 text-2xl font-bold text-neutral-800">Asesor Financiero</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-warning dark:text-warning-600">
            <svg  class="mr-2 h-5 w-5" height="64px" width="64px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#C48A17" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#C48A17;} </style> <g> <path class="st0" d="M221.672,109.882c30.346,0,54.945-24.6,54.945-54.95C276.617,24.591,252.018,0,221.672,0 c-30.337,0-54.937,24.591-54.937,54.932C166.736,85.282,191.335,109.882,221.672,109.882z"></path> <path class="st0" d="M476.641,465.19l-80.767-51.634l-65.079-102.251l-21.42-120.873l69.702-6.477l59.974,38.789 c8.058,5.206,18.695,3.734,25.018-3.47l0.345-0.4c7.022-7.985,6.277-20.139-1.672-27.198l-53.678-47.719 c-5.796-5.141-13.19-8.112-20.93-8.402l-133.937-7.467c-4.124-0.228-7.966,0.081-7.966,0.081c-1.726,0.146-3.466,0.354-5.205,0.646 c-9.756,1.68-18.513,5.713-25.794,11.409l-98.486,59.465L54.71,164.987c-9.633-5.387-21.793-2.19-27.52,7.24l-0.781,1.281 c-2.838,4.678-3.697,10.282-2.38,15.579c1.313,5.305,4.692,9.865,9.389,12.663l73.926,44.122 c9.198,5.496,20.403,6.485,30.428,2.698l62.376-23.582l20.766,83.737l-87.611-0.345c-11.624-0.036-22.661,5.124-30.078,14.08 c-7.408,8.957-10.42,20.757-8.208,32.176l23.214,119.529c2.571,13.235,15.116,22.101,28.456,20.103l0.995-0.154 c13.199-1.981,22.56-13.908,21.338-27.198l-7.862-85.646l121.91,3.852l57.102,57.53c7.949,8.021,17.033,14.844,26.944,20.248 l84.819,46.33c11.882,6.14,26.498,1.744,33.021-9.938l0.472-0.818C491.93,486.819,488.051,472.112,476.641,465.19z"></path> </g> </g></svg>
            Asesor
          </div>
          <p class="mb-6 text-sm text-neutral-800 dark:text-neutral-800">
            Matrícula N° 1628

          </p>
          <p class="text-neutral-40 dark:text-neutral-300">
            Dicto cursos y charlas en colegios y facultades sobre el correcto uso del dinero y las inversiones en la Bolsa de Valores a fin de cumplir con mi misión de llevar educación financiera a todos y acorde al público receptor.
            Soy CEO y fundador de Entrenando Tus Finanzas, entidad que surgió con la idea de brindar servicios financieros tanto educativos como de asesoría, posibilitando que todos puedan acceder a las inversiones independientemente de su formación, experiencia y capital.

          </p>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{asset('/img/franco4.jpg')}}" class="w-full" alt="Louvre"/>
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>

        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
          <h3 class="mb-4 text-2xl font-bold text-neutral-800">CEO y fundador de Entrenando Tus Finanzas</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-yellow-600">
           <svg class="mr-2 h-5 w-5" fill="#C48A17" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.351 491.351" xml:space="preserve" stroke="#C48A17"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_188_" d="M381.559,182.007c-0.895,0-1.755,0.115-2.632,0.138l-14.934-87.322c-0.809-4.71-3.613-8.842-7.674-11.355 c-4.051-2.511-8.998-3.154-13.582-1.772l-44.975,13.622c-8.792,2.667-13.763,11.963-11.097,20.771 c2.667,8.801,11.992,13.789,20.757,11.111l26.901-8.15l6.167,35.949H198.895v-7.076l17.403-4.393 c6.916-1.741,11.845-8.19,11.433-15.575c-0.464-8.369-7.639-14.77-16.018-14.29l-64.285,3.653c-1.282,0.08-2.701,0.292-4.001,0.616 c-11.415,2.889-18.349,14.487-15.467,25.906c2.882,11.419,14.495,18.339,25.911,15.458l11.707-2.959v10.815l-13.694,23.586 c-12.964-5.61-27.142-8.733-42.032-8.733C49.282,182.007,0,233.227,0,296.184C0,359.151,49.282,410.37,109.852,410.37 c55.081,0,100.708-42.453,108.494-97.529h17.763c4.732,0,9.239-2.017,12.396-5.547l24.432-27.287 c-0.732,5.304-1.239,10.673-1.239,16.177c0,62.968,49.291,114.187,109.861,114.187c60.543,0,109.792-51.219,109.792-114.187 C491.351,233.227,442.102,182.007,381.559,182.007z M109.852,377.058c-42.203,0-76.544-36.28-76.544-80.874 c0-44.591,34.341-80.864,76.544-80.864c8.783,0,17.084,1.895,24.956,4.789l-39.365,67.709c-2.994,5.148-3.011,11.508-0.035,16.672 c2.959,5.165,8.474,8.352,14.444,8.352h74.824C177.39,349.464,146.62,377.058,109.852,377.058z M184.676,279.528h-45.868 l24.078-41.406C173.682,249.151,181.476,263.423,184.676,279.528z M228.66,279.528h-10.314 c-4.001-28.383-17.988-53.433-38.255-71.018l11.743-20.202h118.464L228.66,279.528z M381.559,377.058 c-42.211,0-76.544-36.28-76.544-80.874c0-33.481,19.355-62.272,46.874-74.536l13.239,77.351c1.403,8.118,8.431,13.842,16.397,13.842 c0.945,0,1.892-0.072,2.829-0.236c9.085-1.553,15.166-10.167,13.618-19.232l-13.307-77.72c40.714,1.774,73.378,37.07,73.378,80.531 C458.043,340.777,423.719,377.058,381.559,377.058z"></path> </g></svg>
                Educador Financiero
          </div>
          <p class="mb-6 text-sm text-neutral-800 dark:text-neutral-800">
            CEO y fundador de Entrenando Tus Finanzas
          </p>
          <p class="text-neutral-40 dark:text-neutral-300">
            Otra de mis pasiones además de las finanzas es realizar deportes, me inicié desde chico practicando natación y fútbol. A los 20 años empecé a incursionar en el mundo del running y el ciclismo, agregando la natación fue que comencé a competir en triatlón, obteniendo el primer puesto en mi categoría en el campeonato Rio Uruguay.
            Hoy por hoy divido mi tiempo entre estas dos actividades, las finanzas y el deporte.

          </p>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->




@endsection


