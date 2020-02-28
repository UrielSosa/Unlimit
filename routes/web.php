<?php

/* middleware->rol crea el filtro para usuarios administradores */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| @author camila-tomas-uriel-matias
*/

/* -- Rutas principales -- */
Route::get('/','HomeController@index')->name('home');
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
Route::get('/preguntas', 'HomeController@preguntas')->name('Preguntas');

/* -- Aministrador -- */
Route::get('/admin','AdminController@index')->middleware('auth')->middleware('role')->name('admin');
Route::get('/admin/{id}','AdminController@search')->middleware('auth')->middleware('role');
//Route::get('/admin/productos','AdminController@productos')->middleware('auth')->middleware('role');
//Route::get('/admin/usuarios','AdminController@usuarios')->middleware('auth')->middleware('role');

/* -- Productos -- */
// Route::get('/producto/agregar', function(){ return view('admin.agregarProducto');})->middleware('auth')->middleware('role'); /*returna la vista*/
Route::get('/productos', 'ProductoController@index')->name('Preguntas');
Route::post('/producto/agregar','ProductoController@agregar')->middleware('auth')->middleware('role'); /*hace la logica del guardado*/
Route::get('/producto/edit/{id}', 'ProductoController@editar')->middleware('auth')->middleware('role');
Route::post('/producto', 'ProductoController@actualizar')->middleware('auth')->middleware('role'); /*Envía los datos por put para actualizar al controlador*/
Route::delete('/producto/delete', 'ProductoController@destroy')->middleware('auth')->middleware('role'); 
Route::get('/producto/{id}', 'ProductoController@detalle'); /*Envia al controlador el id para returnar la vista con los datos*/
Route::post('/buscar','ProductoController@search');

/* -- Usuarios -- */
Route::get('/perfil', 'UserController@show')->middleware('auth')->name('Perfil');
Route::put('/user/{id}', 'UserController@editar')->middleware('auth')->middleware('role'); /*Envía los datos por put para actualizar al controlador*/

/* -- Carrito -- */
Route::get('/carrito', 'CarritoController@show')->middleware('auth')->name('Carrito');