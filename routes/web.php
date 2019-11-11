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
    return view('outlook');
});
Route::get('/informacion', function () {
    return view('paginformacion');
});
Route::get('/microsoft', function () {
    return view('microsoft');
});
Route::get('/premium', function () {
    return view('premium');
});
Route::get('/bandeja-de-entrada', function () {
    return view('Bandeja');
});
Route::get('/inicioGitHub', function () {
    return view('iniciarSesionGitHub');
});
Route::get('/soporte', function () {
    return view('soporte');
});
Route::get('/recuperar-usuario', function () {
    return view('recuperar');
});


// Authentication Routes...
 Route::get('/loguear', 'Auth\LoginController@showLoginForm');
 Route::post('/login', 'Auth\LoginController@login');
 Route::post('/logout', 'Auth\LoginController@logout');


 // Registration Routes...
 Route::get('/registro', 'Auth\RegisterController@showRegistrationForm');
 Route::post('/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

