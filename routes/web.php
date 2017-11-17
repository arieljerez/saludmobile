<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('saludmobile');
});

Route::post('/remotelogin', 'remoteloginController@login')->name('remotelogin');

Route::get('/pacient', function () {

	$session = \Session::get('pacient');
  $pacient = new stdClass();

$pacient->apellido = $session['Apellido'];
$pacient->codigocobertura = $session['CodigoCobertura'];
$pacient->codigopaciente = $session["CodigoPaciente"];
$pacient->codigopersona = $session["CodigoPersona"];
$pacient->codigoplan = $session["CodigoPlan"];
$pacient->documento = $session["Documento"];
$pacient->FechaNacimiento = str_replace("-"," ",substr($session["FechaNacimiento"],6,18));// => "/Date(-735598800000-0300)/"

$pacient->Mail = $session["Mail"];
$pacient->Nombre = $session["Nombre"];
$pacient->Sexo = $session["Sexo"];


    return view('pacient')->with(compact('pacient'));
})->name('pacient');

Route::get('/doctos/dates', function () {
    return view('doctos_dates');
});
Route::get('/doctos/schedule', function () {
    return view('doctos_schedule');
});

Route::get('/ws', function () {
    $body =  '{"AutenticarPacienteResult":{"AuthToken":"iRwlkA8n1UjdYC4hbybFQbQZeLIKqOVQ","EstadoRespuesta":{"CodigoRespuesta":0,"Mensaje":"OK"},"Pacientes":[{"Apellido":"SYRIANI","CodigoCobertura":0,"CodigoPaciente":71666,"CodigoPersona":72942,"CodigoPlan":1,"Documento":"5497032","FechaNacimiento":"\/Date(-735598800000-0300)\/","Mail":"bebasolv@gmail.com","Nombre":"OLGA","Sexo":"F"}]}}';
    $array = (json_decode((string) $body, true));
    return response()->json($array);
});

Route::get('/dates/registration', function () {
    return view('date_registration');
});

Route::get('/pacient/healt_insurance/list', function () {
    return view('pacient_health_insurance');
});
