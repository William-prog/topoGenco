<?php

namespace App\Http\Controllers;

use App\Models\registroMantenimientoCientoCincuenta;
use Illuminate\Http\Request;

class RegistroMantenimientoCientoCincuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroMantenimientoCientoCincuenta = registroMantenimientoCientoCincuenta::all();
        return view('registroCheckList.index', compact('registroMantenimientoCientoCincuenta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cartaMantenimientoCincuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroMantenimientoCientoCincuenta = new registroMantenimientoCientoCincuenta();
        $registroMantenimientoCientoCincuenta->mantenimientoEquipo = $request->input('mantenimientoEquipo', 'No');
        $registroMantenimientoCientoCincuenta->mantenimientoMarca = $request->input('mantenimientoMarca', 'No');
        $registroMantenimientoCientoCincuenta->mantenimientoNumEco = $request->input('mantenimientoNumEco', 'No');
        $registroMantenimientoCientoCincuenta->mantenimientoFecha = $request->input('mantenimientoFecha', 'No');
        $registroMantenimientoCientoCincuenta->mantenimientoTipo = $request->input('mantenimientoTipo', 'No');
        $registroMantenimientoCientoCincuenta->mantenimientoHorometro = $request->input('mantenimientoHorometro', 'No');
        $registroMantenimientoCientoCincuenta->mantenimientoHorario = $request->input('mantenimientoHorario', 'No');
        $registroMantenimientoCientoCincuenta->mantenimientoTurno = $request->input('mantenimientoTurno', 'No');
        $registroMantenimientoCientoCincuenta->mtto_limpiezaGeneral_1 = $request->input('mtto_limpiezaGeneral_1', 'No');
        $registroMantenimientoCientoCincuenta->mtto_limpiezaGeneral_2 = $request->input('mtto_limpiezaGeneral_2', 'No');
        $registroMantenimientoCientoCincuenta->mtto_limpiezaGeneral_3 = $request->input('mtto_limpiezaGeneral_3', 'No');
        $registroMantenimientoCientoCincuenta->mtto_estructura_1 = $request->input('mtto_estructura_1', 'No');
        $registroMantenimientoCientoCincuenta->mtto_estructura_2 = $request->input('mtto_estructura_2', 'No');
        $registroMantenimientoCientoCincuenta->mtto_lubricacion_1 = $request->input('mtto_lubricacion_1', 'No');
        $registroMantenimientoCientoCincuenta->mtto_lubricacion_2 = $request->input('mtto_lubricacion_2', 'No');
        $registroMantenimientoCientoCincuenta->mtto_accionamiento_1 = $request->input('mtto_accionamiento_1', 'No');
        $registroMantenimientoCientoCincuenta->mtto_accionamiento_2 = $request->input('mtto_accionamiento_2', 'No');
        $registroMantenimientoCientoCincuenta->mtto_accionamiento_3 = $request->input('mtto_accionamiento_3', 'No');
        $registroMantenimientoCientoCincuenta->mtto_accionamiento_4 = $request->input('mtto_accionamiento_4', 'No');
        $registroMantenimientoCientoCincuenta->mtto_trenFuerza_1 = $request->input('mtto_trenFuerza_1', 'No');
        $registroMantenimientoCientoCincuenta->mtto_trenFuerza_2 = $request->input('mtto_trenFuerza_2', 'No');
        $registroMantenimientoCientoCincuenta->mtto_trenFuerza_3 = $request->input('mtto_trenFuerza_3', 'No');
        $registroMantenimientoCientoCincuenta->mtto_trenFuerza_4 = $request->input('mtto_trenFuerza_4', 'No');
        $registroMantenimientoCientoCincuenta->mtto_trenFuerza_5 = $request->input('mtto_trenFuerza_5', 'No');
        $registroMantenimientoCientoCincuenta->mtto_sistemaElectrico_1 = $request->input('mtto_sistemaElectrico_1', 'No');
        $registroMantenimientoCientoCincuenta->mtto_sistemaElectrico_2 = $request->input('mtto_sistemaElectrico_2', 'No');
        $registroMantenimientoCientoCincuenta->mtto_Observaciones = $request->input('mtto_Observaciones', 'No');
        $registroMantenimientoCientoCincuenta->mtto_Operador = $request->input('mtto_Operador', 'No');
        $registroMantenimientoCientoCincuenta->mtto_Verificador = $request->input('mtto_Verificador', 'No');
        $registroMantenimientoCientoCincuenta->mtto_Encargado = $request->input('mtto_Encargado', 'No');
        $registroMantenimientoCientoCincuenta->save();

        return redirect('mantenimientoCientoCincuenta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroMantenimientoCientoCincuenta  $registroMantenimientoCientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function show(registroMantenimientoCientoCincuenta $registroMantenimientoCientoCincuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroMantenimientoCientoCincuenta  $registroMantenimientoCientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(registroMantenimientoCientoCincuenta $registroMantenimientoCientoCincuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroMantenimientoCientoCincuenta  $registroMantenimientoCientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroMantenimientoCientoCincuenta $registroMantenimientoCientoCincuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroMantenimientoCientoCincuenta  $registroMantenimientoCientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroMantenimientoCientoCincuenta $registroMantenimientoCientoCincuenta)
    {
        //
    }
}
