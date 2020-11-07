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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/**
 * Regla de enrutador en la raiz de la uri, controlando el request en 
 * la función "index" del controllador "AdministrarWebController"
 */
Route::any('/', 'AdministrarWebController@index');
Route::any('/accounts/login', 'AdministrarWebController@login');
Route::any('/accounts/logout', 'AdministrarWebController@logout');
Route::any('/my-admin', 'AdministrarWebController@myAdmin');