<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registroHorometro;
use App\Models\registroMantenimientoCincuenta;
use App\Models\registroMantenimientoCien;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroHorometro = registroHorometro::orderBy('fechaHorometro', 'asc')->get();

        $registroMantenimientoCincuenta = registroMantenimientoCincuenta::all();
        $registroMantenimientoCien = registroMantenimientoCien::all();


        return view('resumenGeneral.index', compact('registroHorometro', 'registroMantenimientoCincuenta', 'registroMantenimientoCien'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
