<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // info('GET DATA TABLE');

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


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        // info('formularios para grabar');
        // info('request ' .json_encode($request->all()));
        // info('formulario ' .json_encode($request->formulario));
        // info('nombre ' .json_encode($request->nombre));

        if($request->formulario == 'contacto'){
            info('contacto');
            if($request->nombre == null || $request->apellido == null || $request->email == null || $request->celular == null || $request->celular == null){
                return array(
                    'mensaje' => 'Debe completar todos las preguntas',
                    'status' => 1
                );
            }
            try {
                //code...
                Formulario::insert([
                    'tipo' => $request->formulario,
                    'name' => $request->nombre,
                    'lastName' => $request->apellido,
                    'celular' => $request->celular,
                    'email' => $request->email,
                    'mensaje' => $request->mensaje,

                ]);

                $response =  array(
                    'mensaje' => 'Los datos se enviaron correctamente',
                    'status' => 0
                );
            } catch (\Throwable $th) {
                // throw $th;
                $response =  array(
                    'mensaje' => $th,
                    'status' => 1
                );
            }

            return $response;

        }else if($request->formulario == 'curso'){
            // info('FORMULRIO DE CURSOS');
            if($request->nombre == null || $request->apellido == null || $request->email == null || $request->celular == null ){
                return array(
                    'mensaje' => 'Debe completar todos las preguntas',
                    'status' => 1
                );
            }
            try {
                //code...
                Formulario::insert([
                    'tipo' => $request->formulario,
                    'name' => $request->nombre,
                    'lastName' => $request->apellido,
                    'celular' => $request->celular,
                    'email' => $request->email,
                    'asesor' => $request->asesor == 'otro' ? $request->otro : $request->asesor,
                    'membresia' => $request->membresia,

                ]);

                $response =  array(
                    'mensaje' => 'Los datos se enviaron correctamente',
                    'status' => 0
                );
            } catch (\Throwable $th) {
                // throw $th;
                $response =  array(
                    'mensaje' => $th,
                    'status' => 1
                );
            }

            return $response;
        }else if($request->formulario == 'asesoramiento'){
            // info('asesoramiento grabar');
            if($request->nombre == null || $request->apellido == null || $request->celular == null || $request->experiencia == null || $request->recomendacion == null || $request->inversion == null ){
                return array(
                    'mensaje' => 'Debe completar todos las preguntas',
                    'status' => 1
                );
            }
            try {
                //code...
                Formulario::insert([
                    'tipo' => $request->formulario,
                    'name' => $request->nombre,
                    'lastName' => $request->apellido,
                    'celular' => $request->celular,
                    'inversion' => $request->inversion,
                    'experiencia' => $request->experiencia,
                    'recomendacion' => $request->recomendacion,

                ]);

                $response =  array(
                    'mensaje' => 'Los datos se enviaron correctamente',
                    'status' => 0
                );
            } catch (\Throwable $th) {
                // throw $th;
                $response =  array(
                    'mensaje' => $th,
                    'status' => 1
                );
            }

            return $response;
        }else{
           info('FORMULARIO INVALIDO');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulario $formulario)
    {
        //
    }


}
