<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuarios::all();
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $usuarios = Usuarios::where('email', $email)->where('password', $password)->get();
        if(count($usuarios) > 0){
            return $usuarios;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new Usuarios();
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        $usuarios->nombre = $request->nombre;
        $usuarios->apellidos = $request->apellidos;
        if(Usuarios::count() == 0){
            $usuarios->rol = 'administrador';
        }else{
            $usuarios->rol = 'invitado';
        }
        $usuarios->save();
    }

    public function show(Usuarios $id)
    {
        return Usuarios::find($id);
    }



    public function update($id, Request $request)
    {
        $usuario = Usuarios::find($id);
        $usuario->rol = $request->rol;
        $usuario->save();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->delete();
    }
}
