<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\saludmobile\remoteEntitys\Cobertura;

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

    public function getLoginData($usuario,$clave)
    {
      $http = new Client;

      $response = $http->request('GET',env('RL_URL',env('APP_URL').'/ws'), [
        'query' => [
              'Usuario' => $usuario, //'5497032',
              'Clave' => $clave, // '5497032',
              'CodigoFranquicia' => env('RL_CODIGO_FRANQUICIA'),
          ],
      ]);

      $array = (json_decode((string) $response->getBody(), true));
      $this->token = $array['AutenticarPacienteResult']['AuthToken'];
      $paciente = $array['AutenticarPacienteResult']['Pacientes'][0];

      if ($paciente["Documento"] != $usuario)
      {
          $this->token = "";
      }
      if ($this->token == "")
      {
        return null;
      }

      return $this->getPacienteRemoto($paciente);
    }

    public function getPacienteRemoto($datos)
    {
      $session = $datos;
      $paciente = new \stdClass();

      $int= mt_rand(1262055681,1262055681);

      $string = date("Y-m-d H:i:s",$int);
      $datos["FechaNacimiento"]  = $string;

      $paciente->apellido = $session['Apellido'];
      $paciente->documento = $session["Documento"];
      $paciente->FechaNacimiento = $session["FechaNacimiento"] = $string;

      $paciente->mail = $session["Mail"];
      $paciente->nombre = $session["Nombre"];
      //$paciente->sexo = $session["Sexo"];
      $paciente->data = $datos;
      return $paciente;
    }
}
