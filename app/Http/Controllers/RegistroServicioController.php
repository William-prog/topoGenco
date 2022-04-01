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

        $cantidadUsuarios = count($request->transporteNumeroEmpleado);

        for ($i = 0; $i < $cantidadUsuarios; $i++) {
            $registroServicio = new registroServicio();

            $registroServicio->idForanea = $idForanea;

            $registroServicio->codigoIdentificador = $request->fecha_Form . '-' . $request->turno_Form;


            $registroServicio->transporteNumeroEmpleado = $request->transporteNumeroEmpleado[$i];
            $registroServicio->transporteNombre = $request->transporteNombre[$i];

            if ($request->transporteTipoServicio[$i] == 'Entrada') {
                $registroServicio->transporteHoraEntrada = $request->transporteHoraEntrada[$i];
                $registroServicio->transporteNivelTrabajoEntrada = $request->transporteNivelTrabajoEntrada[$i];
                $registroServicio->transporteHoraSalida = "---";
                $registroServicio->transporteNivelTrabajoSalida = "---";
            }

            if ($request->transporteTipoServicio[$i] == 'Salida') {
                $registroServicio->transporteHoraSalida = "---";
                $registroServicio->transporteNivelTrabajoSalida = "---";
                $registroServicio->transporteHoraEntrada = $request->transporteHoraEntrada[$i];
                $registroServicio->transporteNivelTrabajoEntrada = $request->transporteNivelTrabajoEntrada[$i];
            }



            $registroServicio->transporteTipoServicio = $request->transporteTipoServicio[$i];
            
            $registroServicio->transporteEncargado = $request->encargado_Form;
            $registroServicio->transporteNumOperador = $request->numeroOperador_Form;
            $registroServicio->transporteNomOperador = $request->nombreOperador_Form;



            $registroServicio->transporteFechaRegistro = $request->fecha_Form;
            $registroServicio->transporteTurno = $request->turno_Form;

            $registroServicio->transporteHorometroInicio = $request->horoInicial_Form;
            $registroServicio->transporteHorometroFinal = '0';
            $registroServicio->transporteHorometroResultado = '0';
            $registroServicio->transporteObservaciones = "Inicio Turno";



            $registroServicio->save();
        }

        return redirect('servicio');
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
        $cantidadUsuarios = count($request->transporteNumeroEmpleado);

        $ultimoId = registroServicio::latest('id')->first();

        if (empty($ultimoId)) {
            $idForaneaRegistroSalida = 1;
        } else {
            $idForaneaRegistroSalida = $ultimoId->id + 1;
        }

        for ($i = 0; $i < $cantidadUsuarios; $i++) {
            $registroServicio = new registroServicio();

            $registroServicio->idForanea = $idForaneaRegistroSalida;

            $registroServicio->codigoIdentificador = $request->transporteFechaRegistro[$i] . '-' . $request->transporteTurno[$i];
            $registroServicio->transporteFechaRegistro = $request->transporteFechaRegistro[$i];
            $registroServicio->transporteTurno = $request->transporteTurno[$i];
            $registroServicio->transporteHorometroInicio = $request->transporteHorometroInicio[$i];
            $registroServicio->transporteHorometroFinal = $request->HorFi;
            $registroServicio->transporteHorometroResultado =  $request->HorFi - $request->transporteHorometroInicio[$i];

            $registroServicio->transporteHoraEntrada = $request->transporteHoraEntrada[$i];
            $registroServicio->transporteNivelTrabajoEntrada = $request->transporteNivelTrabajoEntrada[$i];

            $registroServicio->transporteHoraSalida = $request->transporteHoraSalida[$i];
            $registroServicio->transporteNivelTrabajoSalida = $request->transporteNivelTrabajoSalida[$i];

            $registroServicio->transporteTipoServicio = $request->transporteTipoServicio[$i];

            $registroServicio->transporteNumeroEmpleado = $request->transporteNumeroEmpleado[$i];
            $registroServicio->transporteNombre = $request->transporteNombre[$i];

            $registroServicio->transporteObservaciones = $request->transporteObservaciones;
            $registroServicio->transporteEncargado = $request->transporteEncargado[$i];
            $registroServicio->transporteNumOperador = $request->transporteNumOperador[$i];
            $registroServicio->transporteNomOperador = $request->transporteNomOperador[$i];

            $registroServicio->save();
        }

        registroServicio::where('idForanea', $idForanea)->delete();


        return redirect('servicio');
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
