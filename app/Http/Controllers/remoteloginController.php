<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class remoteloginController extends Controller
{
    function login(Request $request)
    {

      $http = new Client;

      $response = $http->request('GET',env('APP_REMOTELOGIN',env('APP_URL').'/ws'), [
        'query' => [
              'Usuario' => $request->user, //'5497032',
              'Clave' => $request->password, // '5497032',
              'CodigoFranquicia' => '1',
          ],
      ]);

        $array = (json_decode((string) $response->getBody(), true));

        if ($array['AutenticarPacienteResult']['AuthToken'] == "")
        {
          return view('saludmobile')->with('error', 'Usuario o Contraseña inválidos');
        } else {

          $pacient = $array['AutenticarPacienteResult']['Pacientes'][0];
          //dd($pacient);
          //return re('pacient')->with('error', 'Usuario o Contraseña inválidos');
          \Session::put('pacient', $pacient);
          return redirect(route('pacient'));
        }
    }
}
