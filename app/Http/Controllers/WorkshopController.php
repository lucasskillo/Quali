<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Workshop;
use Validator;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the nerds
        $workshops = Workshop::all();

        // load the view and pass the nerds
        return view('plataforma.workshop.index')->with('workshops', $workshops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('plataforma.workshop.create');
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

        $workshops = new Workshop;
        $workshops->name = $request['name'];
        $workshops->email = $request['email'];
        $workshops->departament = $request['departament'];
        $workshops->password = bcrypt($request['password']);
        $workshops->save();

        return redirect('admin/workshops')->with('message', 'Workshop criado com Sucesso');

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
        $workshops = Workshop::find($id);
        if(!$workshops)
        {
            abort(503);
        }

        return view ('plataforma.workshop.edit')->with('workshops', $workshops);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $workshops = Workshop::find($id);
        $workshops->name = $request['name'];
        $workshops->email = $request['email'];
        $workshops->password = $request['password'];
        $workshops->save();

        return redirect('admin/workshops')->with('message', 'Workshop editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $workshops = Workshop::find($id);
        $workshops->delete();

        return redirect('admin/workshops')->with('message', 'Workshop apagado com sucesso');
    }
}
