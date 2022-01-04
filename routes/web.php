<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('panelUnidad/{idrol}', 'App\Http\Controllers\seguimientoController@panelseguimiento')->name('panelUnidad');
Route::get('panelPersonal', 'App\Http\Controllers\personalController@panelPersonal')->name('panelPersonal');
Route::get('/addPersonal', 'App\Http\Controllers\personalController@vistaaddPersonal')->name('addPersonal');

/*Ruta de clinicas*/
Route::get('/clinica', 'App\Http\Controllers\clinicaController@clinica')->name('clinica');
Route::get('/addClinica', 'App\Http\Controllers\clinicaController@vistaaddClinica')->name('addClinica');

/*Expediente certificao*/
Route::get('expCertMedico','App\Http\Controllers\expedientesController@expCertMedico')->name('expCertMedico');
Route::get('/imprimirCert/{id}', 'App\Http\Controllers\expedientesController@imprimirCert')->name('imprimirCert');

/*Control Sanitario*/
Route::get('/panelLaboratorios','App\Http\Controllers\controlSanitarioController@panelLaboratorios')->name('panelLaboratorios');
Route::get('/addLab', 'App\Http\Controllers\controlSanitarioController@addLab')->name('addLab');
Route::get('/panelSaludPublica','App\Http\Controllers\controlSanitarioController@panelSaludPublica')->name('panelSaludPublica');
Route::get('/panelContrSS','App\Http\Controllers\controlSanitarioController@panelContrSS')->name('panelContrSS');

/*Formato Unico*/
Route::get('/formatoUnico','App\Http\Controllers\controlSanitarioController@formatoUnico')->name('formatoUnico');
Route::POST('/infoCiu','App\Http\Controllers\controlSanitarioController@infoCiu')->name('infoCiu');

Route::get('formatoCar', function () {
    return view('formatoCarnet');
});
