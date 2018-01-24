<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeApiRemotoController
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

    public function CargarCoberturasPaciente(&$paciente)
    {
      $paciente->coberturas()->saveMany([
              new Cobertura([
                'Codigo' => 10000,
          			'Descripcion' => "PRIVADO",
          			'PlanCodigo' => 11000,
          			'PlanDescripcion' => "PRIVADO VIP",
          			'NumeroAfiliado' => '',
          			'TipoContratacionCodigo' => 9393,
          			'TipoContratacionDescripcion' => 'Privado'
              ]),
              new Cobertura([
                        "Codigo" => 43213,
                        "Descripcion" => "OSDE",
                        "PlanCodigo" => 10210,
                        "PlanDescripcion" => "PLAN 210",
                        "NumeroAfiliado" => "70006501132",
                        "TipoContratacionCodigo" => 9394,
                        "TipoContratacionDescripcion" => "Laboral"
              ]),
              new Cobertura([
                        "Codigo" => 13213,
                        "Descripcion" => "SMG",
                        "PlanCodigo" => 212,
                        "PlanDescripcion" => "Docthos",
                        "NumeroAfiliado" => "80006501131",
                        "TipoContratacionCodigo" => 9393,
                        "TipoContratacionDescripcion" => "Privado"
                      ])
            ]);

}
