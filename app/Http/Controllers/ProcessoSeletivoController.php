<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\ProcessoSeletivo;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Cleinte;
use Validator;

class ProcessoSeletivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the nerds
        $processoseletivos = ProcessoSeletivo::all();

        // load the view and pass the nerds
        return view('plataforma.processoseletivo.index')->with('processo_seletivos', $processoseletivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('plataforma.processoseletivo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'departament' => 'required',
        ]);

        $processoseletivos = new ProcessoSeletivo;
        $processoseletivos->name = $request['name'];
        $processoseletivos->email = $request['email'];
        $processoseletivos->departament = $request['departament'];
        $processoseletivos->password = bcrypt($request['password']);
        $processoseletivos->save();

        return redirect('admin/clientes')->with('message', 'Cliente criado com Sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $processoseletivos = ProcessoSeletivo::find($id);
        if(!$processoseletivos)
        {
            abort(503);
        }

        return view ('plataforma.processoseletivo.edit')->with('clientes', $processoseletivos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $processoseletivos = ProcessoSeletivo::find($id);
        $processoseletivos->name = $request['name'];
        $processoseletivos->email = $request['email'];
        $processoseletivos->password = $request['password'];
        $processoseletivos->save();

        return redirect('admin/clientes')->with('message', 'Cliente editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $processoseletivos = ProcessoSeletivo::find($id);
        $processoseletivos->delete();

        return redirect('admin/clientes')->with('message', 'Cliente apagado com sucesso');
    }
}
