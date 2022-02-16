<?php

namespace App\Http\Controllers;

use App\Models\registroCheckListVehiculo;
use Illuminate\Http\Request;

class RegistroCheckListVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroCheckListVehiculo = registroCheckListVehiculo::all();
        return view('registroCheckList.index', compact('registroCheckListVehiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCheckList.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroCheckListVehiculo = new registroCheckListVehiculo();

        $registroCheckListVehiculo->checkListFecha = $request->input('checkListFecha');
        $registroCheckListVehiculo->checkListTurno = $request->input('checkListTurno');
        $registroCheckListVehiculo->checkListHorometro = $request->input('checkListHorometro');

        $registroCheckListVehiculo->cl_Extintores_1 = $request->input('cl_Extintores_1', 'No');
        $registroCheckListVehiculo->cl_Extintores_2 = $request->input('cl_Extintores_2', 'No');
        $registroCheckListVehiculo->cl_Extintores_3 = $request->input('cl_Extintores_3', 'No');
        $registroCheckListVehiculo->cl_Extintores_4 = $request->input('cl_Extintores_4', 'No');
        $registroCheckListVehiculo->cl_Extintores_5 = $request->input('cl_Extintores_5', 'No');
        $registroCheckListVehiculo->cl_Extintores_6 = $request->input('cl_Extintores_6', 'No');
        $registroCheckListVehiculo->cl_Extintores_7 = $request->input('cl_Extintores_7', 'No');
        $registroCheckListVehiculo->cl_Extintores_8 = $request->input('cl_Extintores_8', 'No');

        $registroCheckListVehiculo->cl_Neumaticos_1 = $request->input('cl_Neumaticos_1', 'No');
        $registroCheckListVehiculo->cl_Neumaticos_2 = $request->input('cl_Neumaticos_2', 'No');
        $registroCheckListVehiculo->cl_Neumaticos_3 = $request->input('cl_Neumaticos_3', 'No');

        $registroCheckListVehiculo->cl_Niveles_1 = $request->input('cl_Niveles_1', 'No');
        $registroCheckListVehiculo->cl_Niveles_2 = $request->input('cl_Niveles_2', 'No');
        $registroCheckListVehiculo->cl_Niveles_3 = $request->input('cl_Niveles_3', 'No');
        $registroCheckListVehiculo->cl_Niveles_4 = $request->input('cl_Niveles_4', 'No');
        $registroCheckListVehiculo->cl_Niveles_5 = $request->input('cl_Niveles_5', 'No');
        $registroCheckListVehiculo->cl_Niveles_6 = $request->input('cl_Niveles_6', 'No');

        $registroCheckListVehiculo->cl_Elementos_1 = $request->input('cl_Elementos_1', 'No');
        $registroCheckListVehiculo->cl_Elementos_2 = $request->input('cl_Elementos_2', 'No');
        $registroCheckListVehiculo->cl_Elementos_3 = $request->input('cl_Elementos_3', 'No');
        $registroCheckListVehiculo->cl_Elementos_4 = $request->input('cl_Elementos_4', 'No');
        $registroCheckListVehiculo->cl_Elementos_5 = $request->input('cl_Elementos_5', 'No');
        $registroCheckListVehiculo->cl_Elementos_6 = $request->input('cl_Elementos_6', 'No');
        $registroCheckListVehiculo->cl_Elementos_7 = $request->input('cl_Elementos_7', 'No');
        $registroCheckListVehiculo->cl_Elementos_8 = $request->input('cl_Elementos_8', 'No');
        $registroCheckListVehiculo->cl_Elementos_9 = $request->input('cl_Elementos_9', 'No');
        $registroCheckListVehiculo->cl_Elementos_10 = $request->input('cl_Elementos_10', 'No');
        $registroCheckListVehiculo->cl_Elementos_11 = $request->input('cl_Elementos_11', 'No');
        $registroCheckListVehiculo->cl_Elementos_12 = $request->input('cl_Elementos_12', 'No');
        $registroCheckListVehiculo->cl_Elementos_13 = $request->input('cl_Elementos_13', 'No');
        $registroCheckListVehiculo->cl_Elementos_14 = $request->input('cl_Elementos_14', 'No');
        $registroCheckListVehiculo->cl_Elementos_15 = $request->input('cl_Elementos_15', 'No');
        $registroCheckListVehiculo->cl_Elementos_16 = $request->input('cl_Elementos_16', 'No');
        $registroCheckListVehiculo->cl_Elementos_17 = $request->input('cl_Elementos_17', 'No');
        $registroCheckListVehiculo->cl_Elementos_18 = $request->input('cl_Elementos_18', 'No');
        $registroCheckListVehiculo->cl_Elementos_19 = $request->input('cl_Elementos_19', 'No');
        $registroCheckListVehiculo->cl_Elementos_20 = $request->input('cl_Elementos_20', 'No');
        $registroCheckListVehiculo->cl_Elementos_21 = $request->input('cl_Elementos_21', 'No');

        $registroCheckListVehiculo->checkListObservaciones = $request->input('checkListObservaciones');

        $registroCheckListVehiculo->save();

        return redirect('checkList');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroCheckListVehiculo  $registroCheckListVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(registroCheckListVehiculo $registroCheckListVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCheckListVehiculo  $registroCheckListVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCheckListVehiculo $registroCheckListVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCheckListVehiculo  $registroCheckListVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCheckListVehiculo $registroCheckListVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCheckListVehiculo  $registroCheckListVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCheckListVehiculo $registroCheckListVehiculo)
    {
        //
    }
}
