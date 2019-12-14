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
    return view('Inicio');
});
Route::get('/agregar_cliente', function () {
    return view('agregar_cliente');
});
Route::post('/agregar_datos_cliente', function () {
    return view('agregar_datos_cliente');
});
Route::post('/conexion', function () {
    return view('conexion');
});
Route::get('/eliminar_cliente', function () {
    return view('eliminar_cliente');
});
Route::get('/modificar_cliente', function () {
    return view('modificar_cliente');
});
Route::post('/modificar_datos_cliente', function () {
    return view('modificar_datos_cliente');
});
Route::post('/Debito', function () {
    return view('MRdebito');
});
Route::post('/Credito', function () {
    return view('MRcredito');
});
Route::post('/pdf', function () {
    $pdf = App::make('dompdf.wrapper');
    $pdf -> loadView('pruebaaa');
    return $pdf->stream();
});
Route::post('/pablotest', function () {
    return view('pablotest');
});
Route::post('/pablotest2', function () {
    return view('pablotest2');
});
Route::post('/asignar_prestamo', function () {
    return view('asignar_prestamo');
});

Route::post('/p', function () {
   $pdf = App::make('dompdf.wrapper');
   $pdf -> loadView('I_VerificarBuroPDF');
   return $pdf->stream();
});
Route::post('/pd', function () {
   $pdf = App::make('dompdf.wrapper');
   $pdf -> loadView('I_RPrestamosPDF');
   return $pdf->stream();
});





Route::group(['middleware' => 'admin'], function(){
	Route::get('/asignar_prestamo', 'HomeController@showPrestamos');
	Route::get('/pablotest', 'HomeController@showPrestamo');
	Route::get('/pablotest2', 'HomeController@showPrestamo2');
	Route::get('/I_VerificarBuro', 'HomeController@showBuro');
	Route::get('/I_GenerarReporte', 'HomeController@showReportes');
	Route::get('/Tarjetas', 'HomeController@showTarjetas');
	Route::get('/Cobranza', 'HomeController@showCobranza');
	Route::get('/Credito', 'HomeController@showCredito');
	Route::get('/Debito', 'HomeController@showDebito');
	Route::get('/gestionar-clientes', 'HomeController@showClientes');
	Route::get('/calcular-prestamos', 'HomeController@showCalcular');
});


// Authentication Routes...
 Route::get('/loguear', 'Auth\LoginController@showLoginForm');
 Route::post('/login', 'Auth\LoginController@login');
 Route::post('/logout', 'Auth\LoginController@logout');


 // Registration Routes...
 Route::get('/crear-cuenta', 'Auth\RegisterController@showRegistrationForm');
 Route::post('/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
