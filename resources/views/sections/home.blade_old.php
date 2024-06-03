@extends('layouts.web.base')

@section('main')

      <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      {{-- <h2 class="mb-12 text-center text-3xl font-bold">
        Projects we are proud of
      </h2> --}}

      <div class="flex flex-wrap items-center">
        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-6 lg:mb-0 lg:w-5/12">
          <div class="relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{asset('/img/logo.jpg')}}" class="w-full" />
            <a href="#!">
              <div
                class="absolute overflow-hidden top-0 right-0 bottom-0 left-0 h-full w-full  bg-fixed">
                <div class="flex h-full items-center justify-center">
                  <div class="px-6 py-12 text-center text-white md:px-12">
                    {{-- <h3 class="mb-6 text-2xl font-bold uppercase">
                      Entrenando tus
                      <u class="text-[hsl(210,12%,80%)]">Finanzas</u>
                    </h3> --}}
                    {{-- <p class="text-[hsl(210,12%,80%)]">
                        surgió con la idea de brindar servicios financieros tanto educativos como de asesoría, posibilitando que todos puedan acceder a las inversiones independientemente de su formación, experiencia y capital.
                    </p> --}}
                  </div>
                </div>
              </div>
              <div class="relative overflow-hidden bg-cover bg-no-repeat">
                <div
                  class="absolute overflow-hidden top-0 right-0 bottom-0 left-0 h-full w-full bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="w-full shrink-0 grow-0 basis-auto md:px-6 lg:w-7/12">

            <div class="mb-12 flex">
                <div class="shrink-0">
                  <div class="rounded-md p-4 shadow-lg bg-[#0A668B] dark:bg-[#0A668B]" >
                    {{-- <img
                        src="{{asset('/img/logo.jpg')}}"
                        class="w-32 rounded-full"
                        alt="Avatar" /> --}}
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="h-6 w-6 text-white">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                    </svg> --}}

                    <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff" transform="rotate(-45)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M484.267,239.303v-50.351c0-27.906-22.707-50.61-50.62-50.61c-6.088,0-11.929,1.081-17.341,3.06 c-1.623-26.465-23.656-47.502-50.52-47.502c-27.915,0-50.625,22.713-50.625,50.631v94.778H196.834v-94.778 c0-27.918-22.71-50.631-50.626-50.631c-26.863,0-48.897,21.036-50.519,47.502c-5.412-1.979-11.253-3.06-17.341-3.06 c-27.912,0-50.62,22.703-50.62,50.61v50.358H0v33.391h27.729v50.337c0,27.918,22.707,50.631,50.62,50.631 c6.088,0,11.93-1.082,17.342-3.061c1.627,26.46,23.659,47.492,50.518,47.492c27.916,0,50.626-22.713,50.626-50.631v-94.768 h118.327v94.768c0,27.918,22.71,50.631,50.625,50.631c26.86,0,48.891-21.032,50.518-47.492c5.412,1.98,11.253,3.061,17.342,3.061 c27.912,0,50.62-22.713,50.62-50.631v-50.343l27.725,0.007L512,239.31L484.267,239.303z M95.583,323.038 c0,9.505-7.731,17.24-17.234,17.24c-9.5,0-17.229-7.733-17.229-17.24V188.952c0-9.494,7.728-17.219,17.229-17.219 c9.503,0,17.234,7.723,17.234,17.219V323.038z M163.445,367.468c0,9.506-7.731,17.24-17.235,17.24 c-9.503,0-17.234-7.733-17.234-17.24v-44.431V188.952v-44.42c0-9.506,7.731-17.24,17.234-17.24c9.504,0,17.235,7.733,17.235,17.24 V367.468z M383.022,188.952v134.086v44.43c0,9.506-7.731,17.24-17.234,17.24s-17.234-7.733-17.234-17.24V144.532 c0-9.506,7.731-17.24,17.234-17.24s17.234,7.733,17.234,17.24V188.952z M450.876,323.037c0,9.506-7.728,17.24-17.229,17.24 c-9.503,0-17.234-7.733-17.234-17.24V188.952c0-9.494,7.731-17.219,17.234-17.219c9.5,0,17.229,7.723,17.229,17.219V323.037z"></path> </g> </g> </g></svg>
                  </div>
                </div>
                <div class="ml-4 grow">

                  <p class="text-neutral-500 dark:text-neutral-300">
                    Entrenando Tus Finanzas surgió con la idea de brindar servicios financieros tanto educativos como de asesoría, posibilitando que todos puedan acceder a las inversiones independientemente de su formación, experiencia y capital.

                  </p>
                </div>
              </div>
          <div class="mb-12 flex">
            <div class="shrink-0">
                <div class="rounded-md p-4 shadow-lg bg-[#0A668B] dark:bg-[#0A668B]" >
                {{-- <img
                    src="{{asset('/img/logo.jpg')}}"
                    class="w-32 rounded-full"
                    alt="Avatar" /> --}}
                    <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff" transform="rotate(45)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M484.267,239.303v-50.351c0-27.906-22.707-50.61-50.62-50.61c-6.088,0-11.929,1.081-17.341,3.06 c-1.623-26.465-23.656-47.502-50.52-47.502c-27.915,0-50.625,22.713-50.625,50.631v94.778H196.834v-94.778 c0-27.918-22.71-50.631-50.626-50.631c-26.863,0-48.897,21.036-50.519,47.502c-5.412-1.979-11.253-3.06-17.341-3.06 c-27.912,0-50.62,22.703-50.62,50.61v50.358H0v33.391h27.729v50.337c0,27.918,22.707,50.631,50.62,50.631 c6.088,0,11.93-1.082,17.342-3.061c1.627,26.46,23.659,47.492,50.518,47.492c27.916,0,50.626-22.713,50.626-50.631v-94.768 h118.327v94.768c0,27.918,22.71,50.631,50.625,50.631c26.86,0,48.891-21.032,50.518-47.492c5.412,1.98,11.253,3.061,17.342,3.061 c27.912,0,50.62-22.713,50.62-50.631v-50.343l27.725,0.007L512,239.31L484.267,239.303z M95.583,323.038 c0,9.505-7.731,17.24-17.234,17.24c-9.5,0-17.229-7.733-17.229-17.24V188.952c0-9.494,7.728-17.219,17.229-17.219 c9.503,0,17.234,7.723,17.234,17.219V323.038z M163.445,367.468c0,9.506-7.731,17.24-17.235,17.24 c-9.503,0-17.234-7.733-17.234-17.24v-44.431V188.952v-44.42c0-9.506,7.731-17.24,17.234-17.24c9.504,0,17.235,7.733,17.235,17.24 V367.468z M383.022,188.952v134.086v44.43c0,9.506-7.731,17.24-17.234,17.24s-17.234-7.733-17.234-17.24V144.532 c0-9.506,7.731-17.24,17.234-17.24s17.234,7.733,17.234,17.24V188.952z M450.876,323.037c0,9.506-7.728,17.24-17.229,17.24 c-9.503,0-17.234-7.733-17.234-17.24V188.952c0-9.494,7.731-17.219,17.234-17.219c9.5,0,17.229,7.723,17.229,17.219V323.037z"></path> </g> </g> </g></svg>
              </div>
            </div>
            <div class="ml-4 grow">

              <p class="text-neutral-500 dark:text-neutral-300">
               La relación con las FINANZAS es que, sin dudas estas al igual que el cuerpo también deben ENTRENARSE. La única manera de hacer crecer un músculo es ejercitándolo, si no, se atrofia. Lo mismo sucede con nuestro dinero, si no lo entrenamos (movemos) y no lo ponemos a funcionar (circular) se atrofiará (dejará de crecer).

              </p>
            </div>
          </div>

          <div class="mb-12 flex">
            <div class="shrink-0">
                <div class="rounded-md p-4 shadow-lg bg-[#0A668B] dark:bg-[#0A668B]" >
                    <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff" transform="rotate(-45)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M484.267,239.303v-50.351c0-27.906-22.707-50.61-50.62-50.61c-6.088,0-11.929,1.081-17.341,3.06 c-1.623-26.465-23.656-47.502-50.52-47.502c-27.915,0-50.625,22.713-50.625,50.631v94.778H196.834v-94.778 c0-27.918-22.71-50.631-50.626-50.631c-26.863,0-48.897,21.036-50.519,47.502c-5.412-1.979-11.253-3.06-17.341-3.06 c-27.912,0-50.62,22.703-50.62,50.61v50.358H0v33.391h27.729v50.337c0,27.918,22.707,50.631,50.62,50.631 c6.088,0,11.93-1.082,17.342-3.061c1.627,26.46,23.659,47.492,50.518,47.492c27.916,0,50.626-22.713,50.626-50.631v-94.768 h118.327v94.768c0,27.918,22.71,50.631,50.625,50.631c26.86,0,48.891-21.032,50.518-47.492c5.412,1.98,11.253,3.061,17.342,3.061 c27.912,0,50.62-22.713,50.62-50.631v-50.343l27.725,0.007L512,239.31L484.267,239.303z M95.583,323.038 c0,9.505-7.731,17.24-17.234,17.24c-9.5,0-17.229-7.733-17.229-17.24V188.952c0-9.494,7.728-17.219,17.229-17.219 c9.503,0,17.234,7.723,17.234,17.219V323.038z M163.445,367.468c0,9.506-7.731,17.24-17.235,17.24 c-9.503,0-17.234-7.733-17.234-17.24v-44.431V188.952v-44.42c0-9.506,7.731-17.24,17.234-17.24c9.504,0,17.235,7.733,17.235,17.24 V367.468z M383.022,188.952v134.086v44.43c0,9.506-7.731,17.24-17.234,17.24s-17.234-7.733-17.234-17.24V144.532 c0-9.506,7.731-17.24,17.234-17.24s17.234,7.733,17.234,17.24V188.952z M450.876,323.037c0,9.506-7.728,17.24-17.229,17.24 c-9.503,0-17.234-7.733-17.234-17.24V188.952c0-9.494,7.731-17.219,17.234-17.219c9.5,0,17.229,7.723,17.229,17.219V323.037z"></path> </g> </g> </g></svg>
              </div>
            </div>
            <div class="ml-4 grow">
              {{-- <p class="mb-2 font-bold">Safe and solid</p> --}}
              <p class="text-neutral-500 dark:text-neutral-300">
                Considero también que existe una gran carencia en la educación financiera en las aulas escolares, facultades e incluso en el hogar mismo por lo cual también existen diversos preconceptos (o conceptos erróneos) sobre el uso correcto del dinero y las inversiones.
              </p>
            </div>
          </div>

          <div class="mb-12 flex">
            <div class="shrink-0">
                <div class="rounded-md p-4 shadow-lg bg-[#0A668B] dark:bg-[#0A668B]" >
                    <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff" transform="rotate(45)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M484.267,239.303v-50.351c0-27.906-22.707-50.61-50.62-50.61c-6.088,0-11.929,1.081-17.341,3.06 c-1.623-26.465-23.656-47.502-50.52-47.502c-27.915,0-50.625,22.713-50.625,50.631v94.778H196.834v-94.778 c0-27.918-22.71-50.631-50.626-50.631c-26.863,0-48.897,21.036-50.519,47.502c-5.412-1.979-11.253-3.06-17.341-3.06 c-27.912,0-50.62,22.703-50.62,50.61v50.358H0v33.391h27.729v50.337c0,27.918,22.707,50.631,50.62,50.631 c6.088,0,11.93-1.082,17.342-3.061c1.627,26.46,23.659,47.492,50.518,47.492c27.916,0,50.626-22.713,50.626-50.631v-94.768 h118.327v94.768c0,27.918,22.71,50.631,50.625,50.631c26.86,0,48.891-21.032,50.518-47.492c5.412,1.98,11.253,3.061,17.342,3.061 c27.912,0,50.62-22.713,50.62-50.631v-50.343l27.725,0.007L512,239.31L484.267,239.303z M95.583,323.038 c0,9.505-7.731,17.24-17.234,17.24c-9.5,0-17.229-7.733-17.229-17.24V188.952c0-9.494,7.728-17.219,17.229-17.219 c9.503,0,17.234,7.723,17.234,17.219V323.038z M163.445,367.468c0,9.506-7.731,17.24-17.235,17.24 c-9.503,0-17.234-7.733-17.234-17.24v-44.431V188.952v-44.42c0-9.506,7.731-17.24,17.234-17.24c9.504,0,17.235,7.733,17.235,17.24 V367.468z M383.022,188.952v134.086v44.43c0,9.506-7.731,17.24-17.234,17.24s-17.234-7.733-17.234-17.24V144.532 c0-9.506,7.731-17.24,17.234-17.24s17.234,7.733,17.234,17.24V188.952z M450.876,323.037c0,9.506-7.728,17.24-17.229,17.24 c-9.503,0-17.234-7.733-17.234-17.24V188.952c0-9.494,7.731-17.219,17.234-17.219c9.5,0,17.229,7.723,17.229,17.219V323.037z"></path> </g> </g> </g></svg>
              </div>
            </div>
            <div class="ml-4 grow">
              {{-- <p class="mb-2 font-bold">Extremely fast</p> --}}
              <p class="text-neutral-500 dark:text-neutral-300">
                Al estar todos, sin excepciones de profesión, labor, ni oficio involucrados en su uso, considero que educarse al respecto es una cuestión FUNDAMENTAL para tener una buena salud financiera.
                Es por ello que te invito a ENTRENAR TUS FINANZAS conmigo, ¿empezamos?

              </p>
            </div>
          </div>




      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->













@endsection


