<?php

namespace App\Http\Controllers;

use App\Models\registroHorometro;

use App\Models\registroHorometroCincuenta;
use App\Models\registroHorometroCien;
use App\Models\registroHorometroCientoCincuenta;
use App\Models\registroHorometroQuinientos;


use Illuminate\Http\Request;

class RegistroHorometroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroHorometro = registroHorometro::all();
        return view('registroHorometro.index', compact('registroHorometro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosHorometro = registroHorometro::orderBy('fechaHorometro', 'desc')->take(5)->get();
        return view('registroHorometro.create', compact('datosHorometro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horometro = new registroHorometro();
        $horometro->fechaHorometro = $request->fechaHorometro;
        $horometro->turnoHorometro = $request->turnoHorometro;
        $horometro->inicialHorometro = $request->inicialHorometro;
        $horometro->finalHorometro = $request->finalHorometro;
        $horometro->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro, 2);
        $horometro->save();

        $registroHorometroCincuenta = new registroHorometroCincuenta();
        $registroHorometroCincuenta->fechaHorometro = $request->fechaHorometro;
        $registroHorometroCincuenta->turnoHorometro = $request->turnoHorometro;
        $registroHorometroCincuenta->inicialHorometro = $request->inicialHorometro;
        $registroHorometroCincuenta->finalHorometro = $request->finalHorometro;
        $registroHorometroCincuenta->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro, 2);
        $registroHorometroCincuenta->save();

        $registroHorometroCien = new registroHorometroCien();
        $registroHorometroCien->fechaHorometro = $request->fechaHorometro;
        $registroHorometroCien->turnoHorometro = $request->turnoHorometro;
        $registroHorometroCien->inicialHorometro = $request->inicialHorometro;
        $registroHorometroCien->finalHorometro = $request->finalHorometro;
        $registroHorometroCien->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro, 2);
        $registroHorometroCien->save();

        $registroHorometroCientoCincuenta = new registroHorometroCientoCincuenta();
        $registroHorometroCientoCincuenta->fechaHorometro = $request->fechaHorometro;
        $registroHorometroCientoCincuenta->turnoHorometro = $request->turnoHorometro;
        $registroHorometroCientoCincuenta->inicialHorometro = $request->inicialHorometro;
        $registroHorometroCientoCincuenta->finalHorometro = $request->finalHorometro;
        $registroHorometroCientoCincuenta->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro, 2);
        $registroHorometroCientoCincuenta->save();

        $registroHorometroQuinientos = new registroHorometroQuinientos();
        $registroHorometroQuinientos->fechaHorometro = $request->fechaHorometro;
        $registroHorometroQuinientos->turnoHorometro = $request->turnoHorometro;
        $registroHorometroQuinientos->inicialHorometro = $request->inicialHorometro;
        $registroHorometroQuinientos->finalHorometro = $request->finalHorometro;
        $registroHorometroQuinientos->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro, 2);
        $registroHorometroQuinientos->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroHorometro  $registroHorometro
     * @return \Illuminate\Http\Response
     */
    public function show(registroHorometro $registroHorometro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroHorometro  $registroHorometro
     * @return \Illuminate\Http\Response
     */
    public function edit(registroHorometro $registroHorometro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroHorometro  $registroHorometro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroHorometro $registroHorometro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroHorometro  $registroHorometro
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroHorometro $registroHorometro)
    {
        //
    }
}
