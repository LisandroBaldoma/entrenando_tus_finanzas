<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ADMIN / CURSOS') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- @include('layouts.navigationClientes') --}}
                    <h1>DATA TABLE CURSOS ABM {{ __("Seccion de CursosDatatable!") }} </h1>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                                <a href="{{action([App\Http\Controllers\CursoController::class, 'create'])}}">

                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <i class="fa-solid fa-plus mr-4 "></i>
                                        Nuevo Curso
                                    </button>
                                </a>
                                <table id="CursosDatatable" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Subtitulo</th>
                                        {{-- <th>Descripcion</th> --}}
                                        <th>img</th>
                                        <th>Videos</th>
                                        <th>Duracion</th>
                                        <th>Accion</th>

                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

<script>

    $(document).ready(function() {
    console.log('DATATABLE CURSOS')
    // console.log(route("/dashboard/cursos"))

    dataTableForm =  $('#CursosDatatable').DataTable({
    processing: true,
    serverSide: true,

    ajax: {
        url: '/dashboard/cursos',
    },
    columns:[
        {
            data: 'id',
            name: 'id'
            // render: function(data, type, row) {
            //     // return `<input type="checkbox" name="productos_checkbox[]" value="${data}">`;
            //     console.log(row)
            //     return data
            // }
        },
        {
            data: 'titulo',
            name: 'titulo'
        },
        {
            data: 'subtitulo',
            name: 'subtitulo'
        },
        // {
        //     data: 'descripcion',
        //     name: 'descripcion'
        //
        // },
        {
            data: 'img',
            name: 'img'
        },
        {
            data: 'num_videos',
            name: 'num_videos'
            // render: function(data, type, row) {
            //     console.log(row)
            //     if(row.tipo !== 'contacto'){
            //         return 'sin mensaje'
            //     }else{
            //         return data
            //     }

            // }
        },
        {
            data: 'num_videos',
            name: 'num_videos',

        },
        {
            data: 'id',
            render: function(data, type, row) {

                let urlVer = "{{action([App\Http\Controllers\CursoController::class, 'show'], 1)}}"

                let urlEditar = "{{action([App\Http\Controllers\CursoController::class, 'edit'], 1)}}"

                let urlEliminar = "{{action([App\Http\Controllers\CursoController::class, 'destroy'], 1)}}"

                urlVer = urlVer.slice(0, -1).concat(data)
                urledit = urlEditar.slice(0, -6).concat(data + '/edit')
                urlBorrar = urlEliminar.slice(0, -1).concat(data)

                // let url = "{{action([App\Http\Controllers\CursoController::class, 'show'], 1)}}"
                // <a href="${urlBorrar}"><i class="fa-solid fa-trash"></i></a>

                let html = `
                <a href="${urlVer}"><i class="fa-solid fa-eye"></i></a>
                <a href="${urledit}"><i class="fa-solid fa-pen-to-square"></i></a>
                `

                return html

            }

        },


    ]

        });
    })

 </script>


