<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Cleinte;
use Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the nerds
        $clientes = Cliente::all();

        // load the view and pass the nerds
        return view('plataforma.clientes.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('plataforma.clientes.create');
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

        $clientes = new Cliente;
        $clientes->name = $request['name'];
        $clientes->email = $request['email'];
        $clientes->departament = $request['departament'];
        $clientes->password = bcrypt($request['password']);
        $clientes->save();

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
        $clientes = Cliente::find($id);
        if(!$clientes)
        {
            abort(503);
        }

        return view ('plataforma.clientes.edit')->with('clientes', $clientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->name = $request['name'];
        $clientes->email = $request['email'];
        $clientes->password = $request['password'];
        $clientes->save();

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
        $clientes = Cliente::find($id);
        $clientes->delete();

        return redirect('admin/clientes')->with('message', 'Cliente apagado com sucesso');
    }


}
