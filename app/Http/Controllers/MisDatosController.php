<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\saludmobile\remoteEntitys\Cobertura;
use App\saludmobile\remoteEntitys\Paciente;

class MisDatosController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $paciente = Paciente::find(auth()->user()->id);

    return view('misdatos',compact('paciente'));
  }
}
