<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cursos de Finanza') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-300">

        @foreach ($cursos as $curso)

            <x-card-cursos :$curso>

            </x-card-cursos>

        @endforeach


    </div>



</x-app-layout>
