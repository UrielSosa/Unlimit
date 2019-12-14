<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| @author camila-tomas-uriel-matias
*/

Route::get('/','homeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ----------------cosas de tomi---------------------

Route::get('/preguntas', 'HomeController@preguntas')->name('Preguntas');

Route::get('/perfil', 'HomeController@perfil')->name('PerfilUsuario');

Route::get('/carrito', 'HomeController@carrito')->name('CarritoUsuario');


// -------------cosas de cami----------


// Route::get('/productos', 'ProductoController@listado')->middleware('auth');



// middleware->rol crea el filtro para usuarios administradores

Route::get('/agregarProducto', function(){
  return view('admin.agregarProducto');
})->middleware('role');

Route::post('/agregarProducto','ProductoController@agregar');

Route::get('/detalleProducto/{id}', 'ProductoController@detalle');

// Route::get('/editarProducto/{id}', 'ProductoController@editar');
// Route::put('/editarProducto', 'ProductoController@actualizar');

// -----------------------------------------


Route::get('/','homeController@index')->name('home');
Route::get('/preguntas', 'HomeController@preguntas')->name('Preguntas');

//middleware->rol crea el filtro para usuarios administradores

/*--------ADMIN--------*/
Route::get('/admin','homeController@admin')->middleware('auth')->middleware('role');
// Route::get('/agregarProducto','ProductoController@create')->middleware('auth')->middleware('role'); /*returna la vista*/
// Route::post('/agregarProducto','ProductoController@store')->middleware('auth')->middleware('role'); /*hace la logica del guardado*/
Route::get('/editarProducto/{id}', 'ProductoController@editar')->middleware('auth')->middleware('role'); /*Envia al controlador el id para returnar la vista con los datos*/
Route::put('/editarProducto', 'ProductoController@actualizar')->middleware('auth')->middleware('role'); /*Envía los datos por put para actualizar al controlador*/

/*--------USERS--------*/
// Route::get('/perfil', 'UserController@show')->name('PerfilUsuario')->middleware('auth')->middleware('role');
Route::get('/detalleProducto/{id}', 'ProductoController@show');
Route::post('/buscar','ProductoController@search');
