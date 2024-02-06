<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Citas::all();
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
        $citas = new Citas();
        $citas->nombreEntrevista = $request->nombreEntrevista;
        $citas->nombre = $request->nombre;
        $citas->apellidos = $request->apellidos;
        $citas->celular = $request->celular;
        $citas->barrio = $request->barrio;
        $citas->tipo = $request->tipo;
        $citas->fecha = $request->fecha;
        $citas->hora = $request->hora;
        $citas->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Citas $id)
    {
        return Citas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $citas = Citas::find($id);
        $citas->nombreEntrevista = $request->nombreEntrevista;
        $citas->nombre = $request->nombre;
        $citas->apellidos = $request->apellidos;
        $citas->celular = $request->celular;
        $citas->barrio = $request->barrio;
        $citas->tipo = $request->tipo;
        $citas->fecha = $request->fecha;
        $citas->hora = $request->hora;
        $citas->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $citas = Citas::find($id);
        $citas->delete();
    }
}
