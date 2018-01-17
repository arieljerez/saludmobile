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

use App\Http\Controllers\Auth;

Route::get('/', function () {
    return view('saludmobile');
})->name('login');

Route::post('/remotelogin', 'remoteloginController@handleRemoteCallback')
  ->name('remotelogin');

Route::get('/inicio','InicioController@index')->name('inicio');

Route::resource('turnos','TurnoRegistroController');

/* recuperacion de acceso */
Route::get('/acceso/recuperar','Auth\RecuperarAccesoController@index')
    ->name('recuperar_acceso')
    ->middleware('guest');

Route::post('/acceso/recuperar','Auth\RecuperarAccesoController@recuperar')->name('recuperar_acceso');

Route::get('/acceso/confirmar_mail','Auth\RecuperarAccesoController@confirmarMail')
          ->name('acceso_confirmar_email');
Route::post('/acceso/confirmar_mail','Auth\RecuperarAccesoController@enviarMail')
          ->name('acceso_confirmar_email');

Route::get('acceso/mailtest', function(){

          return new  App\Mail\RecuperarAcceso(
                      'arieljere@gmail.com',
                      '26587435',
                      '14101978',
                      'clave1234');
          ;
});
/************************************************************************************************/

Route::get('/acceso/registro', 'Auth\RegistroController@create')->name('registro');
Route::post('/acceso/registro', 'Auth\RegistroController@store')->name('registro');

/************************************************************************************************/

Route::get('/Login/LogOff', function () {
    \Auth::LogOut();
    return redirect('/');
})->name('LogOff');

/************************************************************************************************/

Route::get('/misdatos', 'MisDatosController@index')->name('misdatos');

/************************************************************************************************/

Route::get('/ws', function (Request $request) {
    $body =  '{"AutenticarPacienteResult":{"AuthToken":"iRwlkA8n1UjdYC4hbybFQbQZeLIKqOVQ","EstadoRespuesta":{"CodigoRespuesta":0,"Mensaje":"OK"},"Pacientes":[{"Apellido":"SYRIANI","CodigoCobertura":0,"CodigoPaciente":71666,"CodigoPersona":72942,"CodigoPlan":1,"Documento":"26587435","FechaNacimiento":"\/Date(-735598800000-0300)\/","Mail":"bebasolv@gmail.com","Nombre":"OLGA","Sexo":"F"}]}}';
    $array = (json_decode((string) $body, true));
    return response()->json($array);
});
/*****************************************/

Route::get('/api/recuperarAcceso/{documento}/{fecha_nacimiento}', 'FakeApiRemotoController@recuperarAcceso');

/*

Route::get('/doctos/dates', function () {
    return view('doctos_dates');
});
Route::get('/doctos/schedule', function () {
    return view('doctos_schedule');
});
Route::get('/dates/registration', function () {
    return view('date_registration');
});

Route::get('/pacient/healt_insurance/list', function () {

    return view('pacient_health_insurance');
});

Route::get('/pacient/healt_insurance/list', 'PacientHealtInsuranceController@index')
    ->name('pacient.healt_insurance.list');

Route::get('/pacient/healt_insurance/create', 'PacientHealtInsuranceController@create')
    ->name('pacient/healt_insurance/create');

Route::post('/pacient/healt_insurance/store', 'PacientHealtInsuranceController@store')
    ->name('pacient/healt_insurance/store');
*/
