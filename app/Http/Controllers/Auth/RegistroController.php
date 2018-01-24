<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistroController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documento = '';
        $fecha_nacimiento = '';
        return view('auth.register',compact(['documento','fecha_nacimiento']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*
        $user = \App\User::UpdateOrCreate([
          'name' => $request->input('documento'),
          'email' => $request->input('email'),
          'full_name' => $request->input('nombre') . '  '. $request->input('apellido'),
          'access_token' => bcrypt(str_random(6))
        ]);
        $datos = $request->only(['apellido','nombre','fecha_nacimiento']);
        $datos['historia_clinica'] = 4838294;
        $datos['user_id'] = $user->id;

        \App\saludmobile\remoteEntitys\Paciente::create($datos);
        */
        $paciente = new \App\saludmobile\RegistroPaciente($request->input());

        \Mail::to(Request()->get('email'))
          ->send( new \App\Mail\RegistroPaciente($paciente) );

        return new \App\Mail\RegistroPaciente($paciente);
    }

}
