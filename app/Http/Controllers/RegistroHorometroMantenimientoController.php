<?php

namespace App\Http\Controllers;

use App\Models\registroHorometroMantenimiento;
use Illuminate\Http\Request;

class RegistroHorometroMantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroHorometroMantenimiento = registroHorometroMantenimiento::all();
        return view('registroHorometro.index', compact('registroHorometroMantenimiento'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroHorometroMantenimiento  $registroHorometroMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(registroHorometroMantenimiento $registroHorometroMantenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroHorometroMantenimiento  $registroHorometroMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(registroHorometroMantenimiento $registroHorometroMantenimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroHorometroMantenimiento  $registroHorometroMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroHorometroMantenimiento $registroHorometroMantenimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroHorometroMantenimiento  $registroHorometroMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroHorometroMantenimiento $registroHorometroMantenimiento)
    {
        //
    }
}
