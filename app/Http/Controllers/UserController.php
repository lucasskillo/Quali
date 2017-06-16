<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\User;
use Validator;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the nerds
        $users = User::all();

        // load the view and pass the nerds
        return view('plataforma.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('plataforma.users.create');
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

        $users = new User;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->departament = $request['departament'];
        $users->password = bcrypt($request['password']);
        $users->save();

        return redirect('admin/users')->with('message', 'Usuário criado com Sucesso');

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
        $users = User::find($id);
        if(!$users)
        {
            abort(503);
        }

        return view ('plataforma.users.edit')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = $request['password'];
        $users->save();

        return redirect('admin/users')->with('message', 'Usuário editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('admin/users')->with('message', 'Usuário apagado com sucesso');
    }


}
