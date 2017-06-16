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

Auth::routes();

Route::group(['prefix' => ''], function () {

    Route::get('/', 'WebSiteController@home');

    Route::get('portifolio', 'WebSiteController@portifolio');

    Route::get('parceiros', 'WebSiteController@parceiros');

    Route::get('quemsomos', 'WebSiteController@quemsomos');

    Route::get('mej', 'WebSiteController@mej');

    Route::get('gestao', 'WebSiteController@gestao');

    Route::get('contato', 'WebSiteController@contato');

    Route::post('contato', 'ContatoController@postContato');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index');

    Route::resource('users', 'UserController');

    Route::resource('workshops', 'WorkshopController');

    Route::resource('clientes', 'ClienteController');

    Route::resource('processosseletivos', 'ProcessoSeletivoController');
});

