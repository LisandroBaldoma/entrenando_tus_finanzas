<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DETALLE / CURSO / ') }} {{$curso->titulo}}
        </h2>
    </x-slot>



    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- @include('layouts.navigationClientes') --}}
                    {{-- <h1>DETALLE DE LOS CURSO CON TODOS LOS CAPITULOS/VIDEOS</h1> --}}
                    <x-curso-detalle :$curso>

                    </x-curso-detalle>

                </div>
            </div>
        </div>
    </div>

    <div role="status" class="space-y-8 md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">

                    @foreach ($curso->videos as $video)

                        <x-curso-video-detalle :$video>

                        </x-curso-video-detalle>

                    @endforeach

    </div>


</x-app-layout>



