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

Route::get('/', function() {
    return view('home');
});

Route::get('contato', array('as' => 'contato', 'uses' =>'ContatoController@contato'));

Route::post('contato', 'ContatoController@postContato');

Route::get('portifolio', function () {
    return view('portifolio');
});

Route::get('parceiros', function () {
    return view('parceiros');
});

Route::get('quemsomos', function () {
    return view('quemsomos');
});

Route::get('mej', function () {
    return view('mej');
});

Route::get('gestao', function () {
    return view('gestao');
});

Route::get('email', function () {
    return view('email');
});