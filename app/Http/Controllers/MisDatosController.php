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
    $paciente = new Paciente([
              'nombre' => 'Eduardo',
              'apellido' => 'Jerez',
              'historia_clinica' => '132656',
              'fecha_nacimiento' => '14/10/1978',
              'documento' => '26587435',
              'email' => 'arieljerez@gmail.com',
              'sexo' => 'M'
            ]);
    $Coberturas[] = new Cobertura([
              'Codigo' => 10000,
        			'Descripcion' => "PRIVADO",
        			'PlanCodigo' => 11000,
        			'PlanDescripcion' => "PRIVADO VIP",
        			'NumeroAfiliado' => '',
        			'TipoContratacionCodigo' => 9393,
        			'TipoContratacionDescripcion' => 'Privado'
            ]);
    $Coberturas[] = new Cobertura([
              "Codigo" => 43213,
        			"Descripcion" => "OSDE",
        			"PlanCodigo" => 10210,
        			"PlanDescripcion" => "PLAN 210",
        			"NumeroAfiliado" => "70006501132",
        			"TipoContratacionCodigo" => 9394,
        			"TipoContratacionDescripcion" => "Laboral"
            ]);
    $Coberturas[] = new Cobertura([
              "Codigo" => 13213,
        			"Descripcion" => "SMG",
        			"PlanCodigo" => 212,
        			"PlanDescripcion" => "Docthos",
        			"NumeroAfiliado" => "80006501131",
        			"CodigoTipoContratacion" => 9393,
        			"TipoContratacionDescripcion" => "Privado"
            ]);

    return view('misdatos',compact('Coberturas','paciente'));
  }
}
