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

Route::group(['prefix' => ''], function () {
    Route::get('portifolio', function () {
        return view('site/portifolio');
    });

    Route::get('parceiros', function () {
        return view('site/parceiros');
    });

    Route::get('quemsomos', function () {
        return view('site/quemsomos');
    });

    Route::get('mej', function () {
        return view('site/mej');
    });

    Route::get('gestao', function () {
        return view('site/gestao');
    });

    Route::get('email', function () {
        return view('email');
    });

    Route::get('/', function() {
        return view('site/home');
    });

    Route::get('contato', function () {
        return view('site/contato');
    });

    Route::post('contato', 'ContatoController@postContato');
});

    Route::get('admin', function ()    {
        return view('plataforma/home');
    });

    Route::get('usuarios', function ()    {
        return view('plataforma/users/index');
    });

    Route::get('workshops', function ()    {
        return view('plataforma/workshop/index');
    });

    Route::get('clientes', function ()    {
        return view('plataforma/clientes/index');
    });

    Route::get('processoseletivo', function ()    {
        return view('plataforma/processoseletivo/index');
    });