<?php

namespace App\Http\Controllers;

use App\Models\registroHorometro;
use App\Models\registroHorometroMantenimiento;
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

        $horometroMantenimiento = new registroHorometroMantenimiento();
        $horometroMantenimiento->fechaHorometro = $request->fechaHorometro;
        $horometroMantenimiento->turnoHorometro = $request->turnoHorometro;
        $horometroMantenimiento->inicialHorometro = $request->inicialHorometro;
        $horometroMantenimiento->finalHorometro = $request->finalHorometro;
        $horometroMantenimiento->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro, 2);
        $horometroMantenimiento->save();


        return redirect('horometro');
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
