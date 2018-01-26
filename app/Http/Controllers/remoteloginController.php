<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\saludmobile\remoteEntitys\Paciente;
use App\Http\Controllers\FakeApiRemotoController;

class RemoteLoginController extends Controller
{

    protected  $token = "";
    protected  $remoteController;

    public function __construct(FakeApiRemotoController $remoteController)
    {
        $this->remoteController =  $remoteController;
    }

    public function handleRemoteCallback(Request $request)
    {
      $pacienteRemoto = $this->remoteController->getLoginData($request->user,$request->password);

      if ($pacienteRemoto != null){
         $usuario = User::firstOrCreate([
                'name' => $pacienteRemoto->documento
            ], [
                'full_name' => $pacienteRemoto->nombre ." ". $pacienteRemoto->apellido,
                'email' => $pacienteRemoto->mail,
                'access_token' => $this->token
            ]);

          Auth::loginUsingId($usuario->id);
          if ($usuario->paciente){
              Paciente::destroy($usuario->paciente->id);
          }
          //dd($pacienteRemoto->data);
          //
          $paciente = Paciente::create([
            'nombre' => $pacienteRemoto->data['Nombre'],
            'apellido' => $pacienteRemoto->data['Apellido'],
            'historia_clinica' => $pacienteRemoto->data['CodigoPaciente'],
            'fecha_nacimiento' => $pacienteRemoto->data['FechaNacimiento'],
            'documento' => $pacienteRemoto->data['Documento'],
            'email' => $pacienteRemoto->data['Mail'],
            'sexo' => $pacienteRemoto->data['Sexo'],
            'user_id' => $usuario->id
          ]);

          $this->remoteController->CargarCoberturasPaciente($paciente);

          return redirect(route('inicio'));
      }

      return view('saludmobile')->with('error', 'Usuario o Contraseña inválidos');
    }
}
