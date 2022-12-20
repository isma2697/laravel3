<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Usuario;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Usuarios = Usuario::all();
        return view('usuarios.index', compact('Usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsuarioRequest  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        //
    }

    public function restaurar()
    {
        //  cambiar todos los usuarios con deleted_at diferente a null y poner los usuarios a null en la columna delete_at
        Usuario::whereNotNull('deleted_at')->update(['deleted_at' => null]);
        // dd('Usuarios restaurados');
        return redirect()->route('usuarios.index');
    }


    public function destroy($id)
    {
        $usuario=Usuario::find($id);
        
        $usuario->delete();
        // return "hola $id";
    }
}
