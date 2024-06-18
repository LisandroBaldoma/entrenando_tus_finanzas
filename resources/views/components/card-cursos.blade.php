<div class="max-w-12xl mx-auto sm:px-6 lg:px-8 mt-5">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl sm:text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$curso->titulo}}</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-600">{{$curso->descripcion}}</p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-5 lg:mx-0 lg:flex lg:max-w-none">
                        <div class="p-8 sm:p-10 lg:flex-auto">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{$curso->subtitulo}}</h3>
                        <p class="mt-6 text-base leading-7 text-gray-600">Lorem ipsum dolor sit amet consect etur adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem assumenda.</p>
                        <div class="mt-10 flex items-center gap-x-4">
                            <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">Material Incluido</h4>
                            <div class="h-px flex-auto bg-gray-100"></div>
                        </div>
                        <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                            <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Private forum access
                            </li>
                            <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Member resources
                            </li>
                            <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Entry to annual conference
                            </li>
                            <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Official member t-shirt
                            </li>
                        </ul>
                        </div>


                        <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">

                            <a href="{{action([App\Http\Controllers\CursoController::class, 'show'], $curso)}}">

                                <img class="rounded-2xl text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center" src="{{asset('/img/imagenesfinanzas2.jpg')}}" alt="img-card">

                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








