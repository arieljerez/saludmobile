<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\FakeApiRemotoController as FakeApiRemotoController;
use App\Mail\RecuperarAcceso;

class RecuperarAccesoController extends Controller
{

    private $apiRemoto;

    public function __construct(FakeApiRemotoController $apiRemoto)
    {
        $this->middleware('guest');
        $this->apiRemoto = $apiRemoto;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.recuperar_acceso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function recuperar(Request $request)
    {
        $validator =  Validator::make($request->toarray(), [
            'documento' => 'required|numeric',
            'fecha_nacimiento' => 'required|date',
        ]);

        if ($validator->fails()) {
                    return redirect(route('recuperar_acceso'))
                                ->withErrors($validator)
                                ->withInput();
        }

      $documento = $request->input('documento');
      $fecha_nacimiento = $request->input('fecha_nacimiento');

      if ($this->validarDatos($documento,  $fecha_nacimiento,$datos)){
        session(['datos' => $datos]);
        return redirect(route("acceso_confirmar_email"));
      }
      return redirect(route("registro"));
    }

    public function validarDatos($documento,$fecha_nacimiento, &$datos)
    {
      $respuesta =  $this->apiRemoto->recuperarAcceso($documento, $fecha_nacimiento);

      $datos = $respuesta['datos'];

      return ($respuesta["resultado"] == "ok");
    }

    public function confirmarMail()
    {
        $datos = session('datos');
        $email = $datos['email'];
        return view('auth.confirmar_mail')->with(compact('email'));
    }


    public function enviarMail(Request $request)
    {
        $validator =  Validator::make($request->toarray(), [
            'email' => 'required|email|confirmed',
        ]);

        if ($validator->fails()) {
                    return redirect(route('acceso_confirmar_email'))
                                ->withErrors($validator)
                                ->withInput();
        }

        $datos = session('datos');
        $email = $datos['email'];

        \Mail::to(Request()->get('email'))
          ->send(new RecuperarAcceso(
              $request->get('email'),
              $datos['documento'],
              $datos['fecha_nacimiento'],
              $datos['clave']
          ));
        session()->forget("documento");
        session()->forget("datos");
        $confirmado = true;

       return view('auth.confirmar_mail')->with(compact('email','confirmado'));
    }


}
