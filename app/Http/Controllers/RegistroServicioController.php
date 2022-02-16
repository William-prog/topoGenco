<?php

namespace App\Http\Controllers;

use App\Models\registroServicio;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class RegistroServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroServicio = registroServicio::all();
        return view('registroServicio.index', compact('registroServicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroServicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ultimoId = registroServicio::latest('id')->first();

        if (empty($ultimoId)) {
            $idForanea = 1;
        } else {
            $idForanea = $ultimoId->id + 1;
        }

        $cantidadUsuarios = count($request->numeroEmpleado);

        for ($i = 0; $i < $cantidadUsuarios; $i++) {
            $registroServicio = new registroServicio();

            $registroServicio->idForanea = $idForanea;

            $registroServicio->codigoIdentificador = $request->fechaRegistro[$i] . '-' . $request->turno[$i];
            $registroServicio->fechaRegistro = $request->fechaRegistro[$i];
            $registroServicio->turno = $request->turno[$i];
            $registroServicio->horometroIni = $request->horometroIni[$i];
            $registroServicio->horometroFin = '000';
            $registroServicio->horometroRes = '0';


            if ($request->tipoServicio[$i] == 'Entrada') {
                $registroServicio->horaEntrada = $request->horaEntrada[$i];
                $registroServicio->nivelTrabajo = $request->nivelTrabajo[$i];
                $registroServicio->horaSalida = "---";
                $registroServicio->nivelTrabajoS = "---";
            }

            if ($request->tipoServicio[$i] == 'Salida') {
                $registroServicio->horaEntrada = "---";
                $registroServicio->nivelTrabajo = "---";
                $registroServicio->horaSalida = $request->horaEntrada[$i];
                $registroServicio->nivelTrabajoS = $request->nivelTrabajo[$i];
            }

            $registroServicio->tipoServicio = $request->tipoServicio[$i];

            $registroServicio->numeroEmpleado = $request->numeroEmpleado[$i];
            $registroServicio->nombre = $request->nombre[$i];

            $registroServicio->observaciones = "Inicio Turno";
            $registroServicio->encargado = $request->encargado[$i];
            $registroServicio->numOperador = $request->numOperador[$i];
            $registroServicio->nomOperador = $request->nomOperador[$i];


            $registroServicio->save();
        }

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function show(registroServicio $registroServicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function edit($idForanea)
    {
        $datos['registros'] = registroServicio::where('idForanea', $idForanea)->get();
        return view('registroServicio.edit', $datos, compact('idForanea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idForanea)
    {
        $cantidadUsuarios = count($request->numeroEmpleado);

        $ultimoId = registroServicio::latest('id')->first();

        if (empty($ultimoId)) {
            $idForaneaRegistroSalida = 1;
        } else {
            $idForaneaRegistroSalida = $ultimoId->id + 1;
        }

        for ($i = 0; $i < $cantidadUsuarios; $i++) {
            $registroServicio = new registroServicio();

            $registroServicio->idForanea = $idForaneaRegistroSalida;

            $registroServicio->codigoIdentificador = $request->fechaRegistro[$i] . '-' . $request->turno[$i];
            $registroServicio->fechaRegistro = $request->fechaRegistro[$i];
            $registroServicio->turno = $request->turno[$i];
            $registroServicio->horometroIni = $request->horometroIni[$i];
            $registroServicio->horometroFin = $request->horometroFin[$i];
            $registroServicio->horometroRes =  $request->horometroFin[$i] - $request->horometroIni[$i];

            $registroServicio->horaEntrada = $request->horaEntrada[$i];
            $registroServicio->nivelTrabajo = $request->nivelTrabajo[$i];

            $registroServicio->horaSalida = $request->horaSalida[$i];
            $registroServicio->nivelTrabajoS = $request->nivelTrabajoS[$i];

            $registroServicio->tipoServicio = $request->tipoServicio[$i];

            $registroServicio->numeroEmpleado = $request->numeroEmpleado[$i];
            $registroServicio->nombre = $request->nombre[$i];

            $registroServicio->observaciones = $request->observaciones_Form;
            $registroServicio->encargado = $request->encargado[$i];
            $registroServicio->numOperador = $request->numOperador[$i];
            $registroServicio->nomOperador = $request->nomOperador[$i];

            $registroServicio->save();
        }

        registroServicio::where('idForanea', $idForanea)->delete();


        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroServicio $registroServicio)
    {
        //
    }
}
