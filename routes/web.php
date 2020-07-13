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

Route::get('/','parqueadoreController@index');
Route::get("/carros/modalRegistro","parqueadoreController@frmRegistroCarro");
Route::post("/carro/registroCarroDb","parqueadoreController@registroCarroDb");
Route::get("/carros/modalRegistroConductor","parqueadoreController@frmRegistroConductor");
Route::post("/carro/registroConductorDb","parqueadoreController@registroConductorDb");
Route::get('/javaScript','parqueadoreController@javaScript');
