<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contato() {
        return View('contato');
    }
    public function postContato() {
        $rules = array( 'nome' => 'required', 'email' => 'required|email', 'mensagem' => 'required' );
        $validation = Validator::make(Input::all(), $rules);
        $data = array();
        $data['nome'] = Input::get("nome");
        $data['telefone'] = Input::get("telefone");
        $data['email'] = Input::get("email");
        $data['mensagem'] = Input::get("mensagem");
        if($validation->passes()) {
            Mail::send('email', $data, function($message) {
                $message->from(Input::get('email'), Input::get('nome'));
                $message->to('lucas_skillo@yahoo.com.br') ->subject('Contato Teste');
            });
            return Redirect::to('contato') ->with('message', 'Mensagem enviada com sucesso!');
        }
        return Redirect::to('contato')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Erro! Preencha todos os campos corretamente.');
    }
}
