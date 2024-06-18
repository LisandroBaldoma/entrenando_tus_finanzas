<x-app-layout>


    {{-- {{$curso}} --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle del curso xxxxx') }}
        </h2>
    </x-slot>


    <div class="py-12">

      <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

             <x-details-cursos :$curso>

             </x-details-cursos>

            </div>
          </div>
      </div>
    </div>


      <!-- Modal toggle -->





















</x-app-layout>





<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
