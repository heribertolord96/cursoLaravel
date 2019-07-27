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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','InicioController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'],function(){
    //Rutas de permiso
    Route::get('permiso','PermisoController@index')->name('permiso');
    Route::get('/','PermisoController@crear')->name ('crear_permiso');
    Route::post('permiso','PermisoController@guardar')->name('guardar_permiso');
    //Rutas de Menu
    Route::get('menu/crear','MenuController@crear')->name('crear_menu');
    Route::post('menu','MenuController@guardar')->name('guardar_menu');
});