

<div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">


    @if(count($curso->videos) == 0)
        <p>PROXIMAMENTE DISPONIBLE</p>
    @else
        @foreach ($curso->videos as $video)

            <h2 id={{ 'accordion-flush-heading-'.$video->id }}>
            <button type="button" class="flex items-center justify-between w-full py-2 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#{{ 'accordion-flush-body-'.$video->id }}" aria-expanded="true" aria-controls="{{ 'accordion-flush-body-'.$video->id }}">
                <span>{{$video->titulo}}</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </button>
            </h2>
            <div id="{{ 'accordion-flush-body-'.$video->id }}" class="hidden" aria-labelledby={{ 'accordion-flush-heading-'.$video->id }}>
                <div class="py-2 border-b border-gray-200 dark:border-gray-700">
                    <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">{{$video->subtitulo}}</h5>
                        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{$video->descripcion}}</p>
                        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                            <button data-modal-target={{"default-modal".$video->id}} data-modal-toggle={{"default-modal".$video->id}} class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
                                <div class="text-left rtl:text-right">
                                    <div class="mb-1 text-xs">Reproducir</div>
                                    <div class="-mt-1 font-sans text-sm font-semibold">{{$video->titulo}}</div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <x-modal-video :$video>

            </x-modal-video>

        @endforeach
    @endif

</div>









