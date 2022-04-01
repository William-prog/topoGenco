<?php

namespace App\Http\Controllers;

use App\Models\registroMantenimientoCincuenta;
use App\Models\registroHorometroCincuenta;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegistroMantenimientoCincuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroMantenimientoCincuenta = registroMantenimientoCincuenta::all();
        return view('cartaMantenimientoCincuenta.index', compact('registroMantenimientoCincuenta'));
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
        $registroMantenimientoCincuenta = new registroMantenimientoCincuenta();

        $registroMantenimientoCincuenta->mantenimientoEquipo = $request->input('mantenimientoEquipo');
        $registroMantenimientoCincuenta->mantenimientoMarca = $request->input('mantenimientoMarca');
        $registroMantenimientoCincuenta->mantenimientoNumEco = $request->input('mantenimientoNumEco');
        $registroMantenimientoCincuenta->mantenimientoFecha = $request->input('mantenimientoFecha');
        $registroMantenimientoCincuenta->mantenimientoTipo = $request->input('mantenimientoTipo');
        $registroMantenimientoCincuenta->mantenimientoHorometro = $request->input('mantenimientoHorometro');
        $registroMantenimientoCincuenta->mantenimientoHorario = $request->input('mantenimientoHorario');
        $registroMantenimientoCincuenta->mantenimientoTurno = $request->input('mantenimientoTurno');
        $registroMantenimientoCincuenta->mtto_motorDiesel_1 = $request->input('mtto_motorDiesel_1', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_2 = $request->input('mtto_motorDiesel_2', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_3 = $request->input('mtto_motorDiesel_3', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_4 = $request->input('mtto_motorDiesel_4', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_5 = $request->input('mtto_motorDiesel_5', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_6 = $request->input('mtto_motorDiesel_6', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_7 = $request->input('mtto_motorDiesel_7', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_8 = $request->input('mtto_motorDiesel_8', 'No');
        $registroMantenimientoCincuenta->mtto_motorDiesel_9 = $request->input('mtto_motorDiesel_9', 'No');
        $registroMantenimientoCincuenta->mtto_estructura_1 = $request->input('mtto_estructura_1', 'No');
        $registroMantenimientoCincuenta->mtto_estructura_2 = $request->input('mtto_estructura_2', 'No');
        $registroMantenimientoCincuenta->mtto_estructura_3 = $request->input('mtto_estructura_3', 'No');
        $registroMantenimientoCincuenta->mtto_lubricacion_1 = $request->input('mtto_lubricacion_1', 'No');
        $registroMantenimientoCincuenta->mtto_lubricacion_2 = $request->input('mtto_lubricacion_2', 'No');
        $registroMantenimientoCincuenta->mtto_sistemaHidraulico_1 = $request->input('mtto_sistemaHidraulico_1', 'No');
        $registroMantenimientoCincuenta->mtto_sistemaHidraulico_2 = $request->input('mtto_sistemaHidraulico_2', 'No');
        $registroMantenimientoCincuenta->mtto_frenos_1 = $request->input('mtto_frenos_1', 'No');
        $registroMantenimientoCincuenta->mtto_frenos_2 = $request->input('mtto_frenos_2', 'No');
        $registroMantenimientoCincuenta->mtto_frenos_3 = $request->input('mtto_frenos_3', 'No');
        $registroMantenimientoCincuenta->mtto_frenos_4 = $request->input('mtto_frenos_4', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_1 = $request->input('mtto_trenFuerza_1', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_2 = $request->input('mtto_trenFuerza_2', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_3 = $request->input('mtto_trenFuerza_3', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_4 = $request->input('mtto_trenFuerza_4', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_5 = $request->input('mtto_trenFuerza_5', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_6 = $request->input('mtto_trenFuerza_6', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_7 = $request->input('mtto_trenFuerza_7', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_8 = $request->input('mtto_trenFuerza_8', 'No');
        $registroMantenimientoCincuenta->mtto_trenFuerza_9 = $request->input('mtto_trenFuerza_9', 'No');
        $registroMantenimientoCincuenta->mtto_sistemaElectrico_1 = $request->input('mtto_sistemaElectrico_1', 'No');
        $registroMantenimientoCincuenta->mtto_sistemaElectrico_2 = $request->input('mtto_sistemaElectrico_2', 'No');
        $registroMantenimientoCincuenta->mtto_sistemaElectrico_3 = $request->input('mtto_sistemaElectrico_3', 'No');
        $registroMantenimientoCincuenta->mtto_Observaciones = $request->input('mtto_Observaciones');
        $registroMantenimientoCincuenta->mtto_Operador = $request->input('mtto_Operador');
        $registroMantenimientoCincuenta->mtto_Verificador = $request->input('mtto_Verificador');
        $registroMantenimientoCincuenta->mtto_Encargado = $request->input('mtto_Encargado');

        $registroMantenimientoCincuenta->save();

        $sum = registroHorometroCincuenta::sum('totalHorometro');

        DB::table('registro_horometro_cincuentas')->delete();

        $registroHorometroCincuenta = new registroHorometroCincuenta();
        $registroHorometroCincuenta->fechaHorometro = $request->input('mantenimientoFecha');
        $registroHorometroCincuenta->turnoHorometro = $request->input('mantenimientoTurno');
        $registroHorometroCincuenta->inicialHorometro = $request->input('mantenimientoHorometro');
        $registroHorometroCincuenta->finalHorometro = $request->input('mantenimientoHorometro');

        if($sum < 50){
            $registroHorometroCincuenta->totalHorometro = 0;
        }
    
        if($sum >= 50){
            $registroHorometroCincuenta->totalHorometro = $sum - 50;
        }
        
        $registroHorometroCincuenta->save();

        return redirect('mantenimientoCincuenta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroMantenimientoCincuenta  $registroMantenimientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function show(registroMantenimientoCincuenta $registroMantenimientoCincuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroMantenimientoCincuenta  $registroMantenimientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(registroMantenimientoCincuenta $registroMantenimientoCincuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroMantenimientoCincuenta  $registroMantenimientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroMantenimientoCincuenta $registroMantenimientoCincuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroMantenimientoCincuenta  $registroMantenimientoCincuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroMantenimientoCincuenta $registroMantenimientoCincuenta)
    {
        //
    }
}
