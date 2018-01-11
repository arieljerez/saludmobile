<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RecuperarAccesoController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('auth.recuperar_acceso');
=======
        return view('Auth.recuperar_acceso');
>>>>>>> 8b744b0bcd3eb0ac75fdf10eaf09e555c568be9c
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function recuperar(Request $request)
    {
      /*  $validator =  Validator::make($request->toarray(), [
            'documento' => 'required|numeric|size:10',
            'fecha_nacimiento' => 'required|date',
        ]);

        if ($validator->fails()) {
                    return redirect(route('recuperar_acceso'))
                                ->withErrors($validator)
                                ->withInput();
        }
      */

      $documento = $request->input('documento');
      $fecha_nacimiento = $request->input('fecha_nacimiento');

      $clave = $this->validarDatos($documento,  $fecha_nacimiento);

      session(['documento' =>   $documento ]);
      session(['fecha_nacimiento' =>   $fecha_nacimiento ]);
      session(['clave' => $clave ]);

      return $clave
          ? redirect(route("acceso_confirmar_email")) :
          redirect(route("registro"))->withInput();
    }

    public function validarDatos($documento,$fecha_nacimiento)
    {
      return $documento == '26587435'? "pvw409q": false ;
    }

    public function confirmarMail()
    {
        return view('auth.confirmar_mail');
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
        $body = [
                  'email' => $request->get('email'),
                  'dni' => session('documento'),
                  'fecha_nacimiento' =>session('fecha_nacimiento'),
                  'clave' => session('clave'),
                ];

        \Mail::send("mail.recuperar_acceso",$body, function($message) {

            $message->to(Request()->get('email'), Request()->get('email'))
                ->subject('Recuperar contraseña');
        });
        session()->forget("documento");

       return Redirect()->back()->with("email",$request->input("email"));

    }


}
