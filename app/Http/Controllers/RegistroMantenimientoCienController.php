<?php

namespace App\Http\Controllers;

use App\Models\registroMantenimientoCien;
use App\Models\registroHorometroCien;
use Illuminate\Http\Request;

class RegistroMantenimientoCienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroMantenimientoCien = registroMantenimientoCien::all();
        return view('registroCheckList.index', compact('registroMantenimientoCien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cartaMantenimientoCien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroMantenimientoCien = new registroMantenimientoCien();
        $registroMantenimientoCien->mantenimientoEquipo = $request->input('mantenimientoEquipo');
        $registroMantenimientoCien->mantenimientoMarca = $request->input('mantenimientoMarca');
        $registroMantenimientoCien->mantenimientoNumEco = $request->input('mantenimientoNumEco');
        $registroMantenimientoCien->mantenimientoFecha = $request->input('mantenimientoFecha');
        $registroMantenimientoCien->mantenimientoTipo = $request->input('mantenimientoTipo');
        $registroMantenimientoCien->mantenimientoHorometro = $request->input('mantenimientoHorometro');
        $registroMantenimientoCien->mantenimientoHorario = $request->input('mantenimientoHorario');
        $registroMantenimientoCien->mantenimientoTurno = $request->input('mantenimientoTurno');
        $registroMantenimientoCien->mtto_motorDiesel_1 = $request->input('mtto_motorDiesel_1', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_2 = $request->input('mtto_motorDiesel_2', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_3 = $request->input('mtto_motorDiesel_3', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_4 = $request->input('mtto_motorDiesel_4', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_5 = $request->input('mtto_motorDiesel_5', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_6 = $request->input('mtto_motorDiesel_6', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_7 = $request->input('mtto_motorDiesel_7', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_8 = $request->input('mtto_motorDiesel_8', 'No');
        $registroMantenimientoCien->mtto_motorDiesel_9 = $request->input('mtto_motorDiesel_9', 'No');
        $registroMantenimientoCien->mtto_estructura_1 = $request->input('mtto_estructura_1', 'No');
        $registroMantenimientoCien->mtto_estructura_2 = $request->input('mtto_estructura_2', 'No');
        $registroMantenimientoCien->mtto_lubricacion_1 = $request->input('mtto_lubricacion_1', 'No');
        $registroMantenimientoCien->mtto_lubricacion_2 = $request->input('mtto_lubricacion_2', 'No');
        $registroMantenimientoCien->mtto_sistemaHidraulico_1 = $request->input('mtto_sistemaHidraulico_1', 'No');
        $registroMantenimientoCien->mtto_sistemaHidraulico_2 = $request->input('mtto_sistemaHidraulico_2', 'No');
        $registroMantenimientoCien->mtto_frenos_1 = $request->input('mtto_frenos_1', 'No');
        $registroMantenimientoCien->mtto_frenos_2 = $request->input('mtto_frenos_2', 'No');
        $registroMantenimientoCien->mtto_frenos_3 = $request->input('mtto_frenos_3', 'No');
        $registroMantenimientoCien->mtto_frenos_4 = $request->input('mtto_frenos_4', 'No');
        $registroMantenimientoCien->mtto_trenFuerza_1 = $request->input('mtto_trenFuerza_1', 'No');
        $registroMantenimientoCien->mtto_trenFuerza_2 = $request->input('mtto_trenFuerza_2', 'No');
        $registroMantenimientoCien->mtto_trenFuerza_3 = $request->input('mtto_trenFuerza_3', 'No');
        $registroMantenimientoCien->mtto_trenFuerza_4 = $request->input('mtto_trenFuerza_4', 'No');
        $registroMantenimientoCien->mtto_trenFuerza_5 = $request->input('mtto_trenFuerza_5', 'No');
        $registroMantenimientoCien->mtto_trenFuerza_6 = $request->input('mtto_trenFuerza_6', 'No');
        $registroMantenimientoCien->mtto_trenFuerza_7 = $request->input('mtto_trenFuerza_7', 'No');
        $registroMantenimientoCien->mtto_sistemaElectrico_1 = $request->input('mtto_sistemaElectrico_1', 'No');
        $registroMantenimientoCien->mtto_sistemaElectrico_2 = $request->input('mtto_sistemaElectrico_2', 'No');
        $registroMantenimientoCien->mtto_sistemaElectrico_3 = $request->input('mtto_sistemaElectrico_3', 'No');
        $registroMantenimientoCien->mtto_Observaciones = $request->input('mtto_Observaciones');
        $registroMantenimientoCien->mtto_Operador = $request->input('mtto_Operador');
        $registroMantenimientoCien->mtto_Verificador = $request->input('mtto_Verificador');
        $registroMantenimientoCien->mtto_Encargado = $request->input('mtto_Encargado');
        $registroMantenimientoCien->save();

        $sum = registroHorometroCien::sum('totalHorometro');

        DB::table('registro_horometro_ciens')->delete();

        $registroHorometroCien = new registroHorometroCien();
        $registroHorometroCien->fechaHorometro = $request->input('mantenimientoFecha');
        $registroHorometroCien->turnoHorometro = $request->input('mantenimientoTurno');
        $registroHorometroCien->inicialHorometro = $request->input('mantenimientoHorometro');
        $registroHorometroCien->finalHorometro = $request->input('mantenimientoHorometro');
        if ($sum < 50) {
            $registroHorometroCien->totalHorometro = 0;
        }
        if ($sum >= 50) {
            $registroHorometroCien->totalHorometro = $sum - 50;
        }
        $registroHorometroCien->save();


        return redirect('mantenimientoCien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroMantenimientoCien  $registroMantenimientoCien
     * @return \Illuminate\Http\Response
     */
    public function show(registroMantenimientoCien $registroMantenimientoCien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroMantenimientoCien  $registroMantenimientoCien
     * @return \Illuminate\Http\Response
     */
    public function edit(registroMantenimientoCien $registroMantenimientoCien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroMantenimientoCien  $registroMantenimientoCien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroMantenimientoCien $registroMantenimientoCien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroMantenimientoCien  $registroMantenimientoCien
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroMantenimientoCien $registroMantenimientoCien)
    {
        //
    }
}
