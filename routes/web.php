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
    return view('site/home');
});

Route::get('contato', function () {
    return view('site/contato');
});

Route::post('contato', 'ContatoController@postContato');

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
    return view('site/email');
});