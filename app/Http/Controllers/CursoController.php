<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Formulario;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;

class CursoController extends Controller
{

    /**
     * Display a listing clients dataTable.
     */
    public function GET_clientesDatatable()
    {
        info('DATATABLE CLIENTES ');
        info('REQUEST '.json_encode(request()->all()));
        if (request()->ajax()) {
            info('GET DATA TABLE AJAX');
            info(request()->all());

            $filtrados = 0;

            $query = Formulario::query();

            // info('formulraios' .json_encode($dataForm));

            $filtrados = $query->toBase()->getCountForPagination();

            if (request('order'))
            {
                $columnIndex = request('order')[0]['column'];
                $columnName = request('columns')[$columnIndex]['name'];

                $query->orderBy($columnName, request('order')[0]['dir']);
            }

            if (request('search') && request('search.value') != '')
            {
                $query->where(function ($q)
                {
                    $q->where("name", 'LIKE', '%' . request('search.value') . '%')
                        ->orWhere("lastName", 'LIKE', '%' . request('search.value') . '%')
                        ->orWhere("tipo", 'LIKE', '%' . request('search.value') . '%');

                });
            }
            // if (request('start') && request('start') != 0)
            // {
            //     $query->offset(request('start'));
            // }

            // if (request('length') && request('length') != 0)
            // {
            //     $query->limit(request('length'));
            // }
            // if (request('start') && request('start') != 0)
            // {
            //     $query->offset(request('start'));
            // }

            // if (request('length') && request('length') != 0)
            // {
            //     $query->limit(request('length'));
            // }

            $dataForm = $query->get();

            $data ['draw'] = request('draw');
            $data ['recordsTotal'] = $query->toBase()->getCountForPagination();
            $data ['recordsFiltered'] = $filtrados;
            $data ['data'] = json_decode($dataForm);

            return $data;
        }


        return view('formularios');
        // return view('admin.cursos');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (request()->ajax()) {
            // info(request()->all());

            $filtrados = 0;

            $cursos = Curso::get();

            $query = Curso::query();

            $filtrados = $query->toBase()->getCountForPagination();

            if (request('order'))
            {
                $columnIndex = request('order')[0]['column'];
                $columnName = request('columns')[$columnIndex]['name'];

                $query->orderBy($columnName, request('order')[0]['dir']);
            }

            if (request('search') && request('search.value') != '')
            {
                $query->where(function ($q)
                {
                    $q->where("titulo", 'LIKE', '%' . request('search.value') . '%')
                        ->orWhere("subtitulo", 'LIKE', '%' . request('search.value') . '%')
                        ->orWhere("descripcion", 'LIKE', '%' . request('search.value') . '%');

                });
            }
            // if (request('start') && request('start') != 0)
            // {
            //     $query->offset(request('start'));
            // }

            // if (request('length') && request('length') != 0)
            // {
            //     $query->limit(request('length'));
            // }
            // if (request('start') && request('start') != 0)
            // {
            //     $query->offset(request('start'));
            // }

            // if (request('length') && request('length') != 0)
            // {
            //     $query->limit(request('length'));
            // }

            $dataForm = $query->get();

            $data ['draw'] = request('draw');
            $data ['recordsTotal'] = $query->toBase()->getCountForPagination();
            $data ['recordsFiltered'] = $filtrados;
            $data ['data'] = json_decode($dataForm);

            return $data;
        }

        return view('admin.cursos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cursoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCursoRequest $request)
    {
        info('METODO STORE CURSO CONTROLLER');
        info($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {

        $curso = Curso::with('videos')->where('id',$curso->id)->first();

        return view('admin.cursoDetalle', ['curso' => $curso]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        info('CURSO CONTROLLER - EDITAR');
        return dd($curso);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCursoRequest $request, Curso $curso)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        info('CURSO CONTROLLER - DESTROY');
        return dd($curso);
    }
}
