<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeApiRemotoController extends Controller
{
    public function recuperarAcceso($documento, $fecha_nacimiento){
      return ['resultado'=>'ok','mensaje' => '',
                 'datos'=> ['clave' => 'asdfasd',
                            'email' => 'arieljerez@gmail.com',
                            'documento' => $documento,
                            'fecha_nacimiento' => $fecha_nacimiento]
      ];
    }

    public function actualizarEmail($documento, $fecha_nacimiento){
      $datos = ['resultado'=>'ok','mensaje' => '',
                 'datos'=> []
      ];
      return response()->json($datos);
    }

}
