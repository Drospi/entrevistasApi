<?php

namespace App\Http\Controllers;

use App\Models\Dias;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $startOfWeek = Carbon::now()->startOfWeek(); // Obtener el comienzo de la semana actual
$endOfMonth = Carbon::now()->addMonth()->endOfMonth(); // Obtener el final del mes siguiente

$currentDate = $startOfWeek->copy(); // Copiar la fecha de inicio

$martesEnElMes = [];

while ($currentDate->lte($endOfMonth)) {
    if ($currentDate->dayOfWeek == Carbon::TUESDAY) {
        $martesEnElMes[] = $currentDate->format('l j \d\e F'); // Formatear la fecha
    }

    $currentDate->addDay(); // Moverse a la siguiente día
}
$martesTraducido = [];
foreach ($martesEnElMes as $martes){
    $martesTraducido[] =  str_replace(['Tuesday','January','February','March','April','May','June','July','August','September','October','November','December'],
    ['Martes','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'], $martes);
}
return $martesTraducido;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dias $dias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dias $dias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dias $dias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dias $dias)
    {
        //
    }
}
