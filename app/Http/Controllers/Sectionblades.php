<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class Sectionblades extends Controller
{
    public function contdownFormulario(Request $request){
        info('formularios');
        info('request ' .json_encode($request->all()));


        $response = [
            'status' => 'ok',
            'mensaje' => 2
        ];
        return json_encode($response);
    }
}
