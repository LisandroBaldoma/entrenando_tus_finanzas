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
                    <h1>DATA TABLE CURSOS ABM </h1>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ __("Seccion de CursosDatatable!") }}
                                </div>
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
                console.log(data)

                let urlVer = "{{action([App\Http\Controllers\CursoController::class, 'show'], 1)}}"

                let urlEditar = "{{action([App\Http\Controllers\CursoController::class, 'edit'], 1)}}"

                let urlEliminar = "{{action([App\Http\Controllers\CursoController::class, 'destroy'], 1)}}"

                console.log(urlEditar)

                urlVer = urlVer.slice(0, -1).concat(data)
                urledit = urlEditar.slice(0, -6).concat(data + '/edit')
                urlBorrar = urlEliminar.slice(0, -1).concat(data)

                console.log(urledit)

                console.log(urlBorrar)


                // let url = "{{action([App\Http\Controllers\CursoController::class, 'show'], 1)}}"

                let html = `
                <a href="${urlVer}"><i class="fa-solid fa-eye"></i></a>
                <a href="${urledit}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="${urlBorrar}"><i class="fa-solid fa-trash"></i></a>`

                return html

            }

        },


    ]

        });
    })

 </script>


