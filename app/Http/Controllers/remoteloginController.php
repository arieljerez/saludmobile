<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\User;
use Auth;

class RemoteLoginController extends Controller
{

    protected  $token = "";

    public function handleRemoteCallback(Request $request)
    {
      $pacienteRemoto = $this->login($request->user,$request->password);

      if ($pacienteRemoto != null){
         $paciente = User::firstOrCreate([
                'name' => $pacienteRemoto->documento
            ], [
                'full_name' => $pacienteRemoto->nombre ." ". $pacienteRemoto->apellido,
                'email' => $pacienteRemoto->mail,
                'access_token' => $this->token
            ]);
          Auth::loginUsingId($paciente->id);
          return redirect(route('inicio'));
      }

      return view('saludmobile')->with('error', 'Usuario o Contraseña inválidos');
    }


    public function login($usuario,$clave)
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

      $paciente->apellido = $session['Apellido'];
      $paciente->codigocobertura = $session['CodigoCobertura'];
      $paciente->codigopaciente = $session["CodigoPaciente"];
      $paciente->codigopersona = $session["CodigoPersona"];
      $paciente->codigoplan = $session["CodigoPlan"];
      $paciente->documento = $session["Documento"];
      $paciente->FechaNacimiento = str_replace("-"," ",substr($session["FechaNacimiento"],6,18));// => "/Date(-735598800000-0300)/"

      $paciente->mail = $session["Mail"];
      $paciente->nombre = $session["Nombre"];
      $paciente->sexo = $session["Sexo"];

      return $paciente;
    }
}
