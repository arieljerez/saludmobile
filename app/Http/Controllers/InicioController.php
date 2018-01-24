<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
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
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
      /** TODO: refactorizar */
      $body =  '{"AutenticarPacienteResult":{"AuthToken":"iRwlkA8n1UjdYC4hbybFQbQZeLIKqOVQ","EstadoRespuesta":{"CodigoRespuesta":0,"Mensaje":"OK"},"Pacientes":[{"Apellido":"SYRIANI","CodigoCobertura":0,"CodigoPaciente":71666,"CodigoPersona":72942,"CodigoPlan":1,"Documento":"26587435","FechaNacimiento":"\/Date(-735598800000-0300)\/","Mail":"bebasolv@gmail.com","Nombre":"OLGA","Sexo":"F"}]}}';
      $ultimosProfesionalesJson = '{"ultimosProfesionales":[{"Profesional":"Cesar Tomasin","Especialidad":"Ginecologia","Cobertura":"OSDE","PLAN":410,"Fecha":20171220 },{"Profesional":"Carmilo Logrono","Especialidad":"Clinica Medica","Cobertura":"OSDE","PLAN":410,"Fecha":20171220 },{"Profesional":"Sara Espinaga","Especialidad":"Oftalmologia","Cobertura":"OSDE","PLAN":410,"Fecha":20171210 }]  }';
      $ultimosProfesionales = (json_decode((string) $ultimosProfesionalesJson , true));
      $ultimosProfesionales = $ultimosProfesionales['ultimosProfesionales'];
      return view('inicio',compact('ultimosProfesionales'));
  }
}
