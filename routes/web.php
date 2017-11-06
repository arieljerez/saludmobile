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

	$pacient = \Session::get('pacient');
    return view('pacient')->with(compact('pacient'));
})->name('pacient');

Route::get('/doctos/dates', function () {
    return view('doctos_dates');
});
Route::get('/doctos/schedule', function () {
    return view('doctos_schedule');
});
