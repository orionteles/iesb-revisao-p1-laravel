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

Route::resource('/marcas', 'MarcaController');
Route::get('marcas/{marca}/destroy', 'MarcaController@destroy');

Route::resource('/categorias', 'CategoriaController');
Route::get('categorias/{categoria}/destroy', 'CategoriaController@destroy');

Route::get('/salario', 'SalarioController@index');
Route::post('/salario', 'SalarioController@calcular');