<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
    }
</style>

<style>
    .encabezado {
        font-weight: bold;
        background-color: gainsboro;
        text-align: center;
    }

    .centrar {
        text-align: center;
    }

    .izq {
        text-align: left;
    }
</style>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top; border: 1px solid #000">
    <tr>
        <td class="" style="width: 10%; padding-left: 10px; padding-top: 1px; padding-right: 10px; border-right: 1px solid white;">
            <img src="img/topo-logo.jpg" width="50" height="">
        </td>
        <td colspan="9" style="border-left: 1px solid white;" class="image-container">
            <strong>Servicios y Equipos TOPO S.A de C.V</strong>
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Procedimientos Administrativos
        </td>
        <td colspan="3">
            <strong>Código:</strong> LI-ADM-001-Rev.04
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Lista de Asistencia
        </td>
        <td colspan="3">
            <strong>Fecha de emisión: </strong> {{date('d-m-Y')}}
        </td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">
    <tr>
        <td colspan="8">
            <strong>Equipo:</strong> Genco
        </td>
        <td style="width: 25%;">
            <strong>Horómetro Inicial: </strong>
            @foreach($registros as $registro)
            @if($id== $registro->id)
            {{$registro->horometroIni}}
            @endif
            @endforeach
        </td>
        <td style="width: 30%;">
            <strong>No. Eco:</strong> 17
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <strong>Marca:</strong> Mine Service	
        </td>
        <td>
            <strong>Horómetro Final: </strong>
            @foreach($registros as $registro)
            @if($id== $registro->id)
            {{$registro->horometroFin}}
            @endif
            @endforeach
        </td>
        <td>
            <strong>Fecha: </strong>
            @foreach($registros as $registro)
            @if($id == $registro->id)
            <?php
            date_default_timezone_set("America/Mexico_City");
            setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
            $data['Fecha'] = $registro->fechaRegistro;
            $marca = strtotime($data['Fecha']);
            ?>
            <?= strftime('%e/%B/%Y', $marca) ?>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <strong>Modelo:</strong> GMS069
        </td>
        <td colspan="2">
            <strong>Horómetro: </strong>
            @foreach($registros as $registro)
            @if($id== $registro->id)
            {{$registro->horometroRes}}
            @endif
            @endforeach
        </td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">
    <!--  -->
    <!--  -->
    <!--  -->
    <tr>
        <td style="width: 3%;" class="encabezado">
            No.
        </td>
        <td style="width: 7%;" class="encabezado">
            No.Emp.
        </td>
        <td style="width: 50%;" class="encabezado">
            Nombre del Usuario
        </td>
        <td style="width: 10%;" class="encabezado">
            Hora de Entrada
        </td>
        <td style="width: 10%;" class="encabezado">
            Nivel de Servicio
        </td>
        <td style="width: 10%;" class="encabezado">
            Hora de Salida
        </td>
        <td style="width: 10%;" class="encabezado">
            Nivel de Servicio
        </td>
    </tr>
    {{$contador=0}}

    @foreach($registros as $registro)

    @if($registro->turno == $turno)
    <tr>
        <td class="centrar">
            {{$contador = $contador + 1}}
        </td>
        <td class="centrar">
            {{$registro->numeroEmpleado}}
        </td>
        <td class="izq">
            {{$registro->nombre}}
        </td>
        <td class="centrar">
            {{$registro->horaEntrada}}
        </td>
        <td class="centrar">
            {{$registro->nivelTrabajo}}
        </td>
        <td class="centrar">
            {{$registro->horaSalida}}
        </td>
        <td class="centrar">
            @if($registro->nivelTrabajoS == '000-Superficie' )
            Superficie
            @endif
            @if($registro->nivelTrabajoS != '000-Superficie' )
            {{$registro->nivelTrabajoS}}
            @endif

        </td>
    </tr>
    @endif

    @endforeach
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">
    <!-- rowspan para abajo -->
    <!-- colspan para un lado -->
    <tr>
        <td style="width: 5%;" class="encabezado">
            Observaciones
        </td>
    </tr>
    @foreach($registros as $registro)
    @if($id == $registro->id)
    <tr>
        <td class="izq">
            {{$registro->observaciones}}
        </td>
    </tr>
    @endif
    @endforeach
</table>
