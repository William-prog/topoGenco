<?php

namespace App\Http\Controllers;
use App\Models\registroServicio;
use App\Models\registroHorometro;
use App\Models\registroCheckListVehiculo;
use Illuminate\Http\Request;

class ReportesController extends Controller
{

    public function generarReportePorServicio($fechaRegistro, $turno, $id)
    {
        $datos['registros'] = registroServicio::where('fechaRegistro', $fechaRegistro)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteServicio', $datos, compact('fechaRegistro', 'turno', 'id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }

    public function generarReporteHorometro(Request $request)
    {
        $fechaD = $request->Fecha_Desde_Horometro;
        $fechaH = $request->Fecha_Hasta_Horometro;

        $datosHorometros = registroHorometro::where('fechaHorometro', '>=', $fechaD)
            ->where('fechaHorometro', '<=', $fechaH)
            ->orderBy('fechaHorometro', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteHorometro', compact('datosHorometros'));

        return $pdf->stream('reportesPDF.reporteHorometro', array("Attachment" => true));
    }

    public function generarReporteCheckList($id)
    {
        $registroCheckListOperativa = new registroCheckListVehiculo();

        $datos['registros'] = $registroCheckListOperativa::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteCheckListOperativa', $datos, compact('id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }
}
