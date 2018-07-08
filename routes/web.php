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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);

	Route::resource('alimentos', 'AlimentosController');
	Route::get('alimentos/{id}/destroy', [
		'uses' => 'AlimentosController@destroy',
		'as' => 'admin.alimentos.destroy'
	]);
	Route::get('alimentos/{id}/searchUser', [
		'uses' => 'FrontController@searchUser',
		'as' => 'admin.alimentos.search'
	]);

	Route::resource('consultorios', 'ConsultorioController');
	Route::get('consultorios/{id}/destroy', [
		'uses' => 'ConsultorioController@destroy',
		'as' => 'admin.consultorios.destroy'
	]);

	Route::resource('medicos', 'MedicosController');
	Route::get('medicos/{id}/destroy', [
		'uses' => 'MedicosController@destroy',
		'as' => 'admin.medicos.destroy'
	]);

	Route::resource('citas', 'CitasController');
	Route::get('citas/{id}/destroy', [
		'uses' => 'CitasController@destroy',
		'as' => 'admin.citas.destroy'
	]);
	Route::get('citas/{id}/create', [
		'uses' => 'CitasController@create',
		'as' => 'admin.citas.create'
	]);

	Route::resource('tratamientos', 'TratamientosController');
	Route::get('tratamientos/{id}/destroy', [
		'uses' => 'TratamientosController@destroy',
		'as' => 'admin.tratamientos.destroy'
	]);
	Route::get('tratamientos/{id}/create', [
		'uses' => 'TratamientosController@create',
		'as' => 'admin.tratamientos.create'
	]);

	Route::resource('expedientes', 'ExpedientesController');
	Route::get('expedientes/{id}/destroy', [
		'uses' => 'ExpedientesController@destroy',
		'as' => 'admin.expedientes.destroy'
	]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
