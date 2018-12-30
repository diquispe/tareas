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
    return view('welcome');
});


Route::get('/tareas', [
    'uses' => 'TareasController@index',
    'as' => 'tareas'
]);

Route::get('/nuevo', [
    'uses' => 'TareasController@create',
    'as' => 'nuevo'
]);

Route::post('/crear', [
    'uses' => 'TareasController@store',
    'as' => 'store'
]);

Route::get('/delete/{id}', [
    'uses' => 'TareasController@destroy',
    'as' => 'delete'
]);

Route::get('/edit/{id}', [
    'uses' => 'TareasController@edit',
    'as' => 'edit'
]);
Route::post('/update/{id}', [
    'uses' => 'TareasController@update',
    'as' => 'update'
]);

Route::get('completado/{id}', [
    'uses' => 'TareasController@completado',
    'as' => 'completado'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
