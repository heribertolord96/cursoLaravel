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
Route::get('/','InicioController@index')->name('inicio');

Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout','Seguridad\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','Superadmin']],function(){
    Route::get('', 'AdminController@index' ) ;
    //Rutas de permiso
    Route::get('permiso','PermisoController@index')->name('permiso');
    Route::get('/','PermisoController@crear')->name ('crear_permiso');
    Route::post('permiso','PermisoController@guardar')->name('guardar_permiso');
    //Rutas de Menu
    Route::get('menu','MenuController@index')->name('menu');
    Route::get('menu/crear','MenuController@crear')->name('crear_menu');
    Route::post('menu','MenuController@guardar')->name('guardar_menu');
    Route::post('menu/guardar-orden','MenuController@guardarOrden')->name('guardar_orden');
    //Rutas rol
    Route::get('rol','RolController@index')->name('rol');
    Route::get('rol/crear','RolController@crear')->name('crear_rol');
    Route::post('rol','RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar','rolController@editar')->name('editar_rol');
    Route::put('rol/{id}','RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
    //rutas menu-rol
    Route::get ('menu-rol','MenuRolController@index')->name('menu-rol');
    Route::post ('menu-rol','MenuRolController@guardar')->name('guardar-menu-rol');
});