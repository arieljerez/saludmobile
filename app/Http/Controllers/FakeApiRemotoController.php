<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeApiRemotoController extends Controller
{
    public function recuperarAcceso($documento, $fecha_nacimiento)
    {
      if ($documento < 30999999)
      {
        return ['resultado'=>'ok','mensaje' => '',
                 'datos'=> ['clave' => 'asdfasd',
                            'email' => 'arieljerez@gmail.com',
                            'documento' => $documento,
                            'fecha_nacimiento' => $fecha_nacimiento]
                ];
      }else{
        return ['resultado'=>'','mensaje' => 'No existe registros coincidentes con los datos ingresados',
                 'datos'=> ['clave' => '',
                            'email' => '',
                            'documento' => $documento,
                            'fecha_nacimiento' => $fecha_nacimiento]
                ];
      }
    }

    public function actualizarEmail($documento, $fecha_nacimiento){
      $datos = ['resultado'=>'ok','mensaje' => '',
                 'datos'=> []
      ];
      return response()->json($datos);
    }

}
