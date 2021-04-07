<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUsuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {


        $usuarios = User::all();


        return view('usuarios.index', compact('usuarios'));
    }
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(StoreUsuario $request)
    {

        //   $usuario=new User();

        //  $usuario->name=$request->name;
        //  $usuario->email=$request->email;
        //  $usuario->password=$request->password;


        //  $usuario->save();

        $usuario = User::create($request->all());
        return redirect()->route('usuarios.show', $usuario);
    }

    public function show(User $usuario)
    {

        return view('usuarios.show', compact('usuario'));
    }

    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }
    public function update(StoreUsuario $request, User $usuario)
    {

        //  $usuario->name = $request->name;
        //  $usuario->email = $request->email;
        //  $usuario->password=$request->password;
        //  $usuario->save();
        $usuario->update($request->all());
        return view('usuarios.show', compact('usuario'));
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
