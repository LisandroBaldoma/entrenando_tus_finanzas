<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CREAR / CURSO / ') }}
        </h2>
    </x-slot>



    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1>FORMULARIO PARA CREAR UN CURSO</h1>

                    <x-curso-create-form>

                    </x-curso-create-form>

                </div>
            </div>
        </div>
    </div>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <h1 class="flex justify-center border-b-4 border-indigo-500">DETALLE DE LOS CURSO CON TODOS LOS CAPITULOS/VIDEOS</h1>
                    {{--
                    @foreach ($curso->videos as $video)

                        <x-curso-video-detalle :$video>

                        </x-curso-video-detalle>

                    @endforeach --}}


                </div>
            </div>
        </div>
    </div>


</x-app-layout>



