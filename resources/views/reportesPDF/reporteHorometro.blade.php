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

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
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
            Lista de Horómetro
        </td>
        <td colspan="3">
            <strong>Fecha de emisión: </strong> {{date('d-m-Y')}}
        </td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td style="width: 33%;">
            <strong>Equipo:</strong> Elevador Scando SE 1500
        </td>
        <td style="width: 33%;">
            <strong>Marca:</strong> ALIMAK
        </td>
        <td style="width: 33%;">
            <strong>Modelo:</strong> SCANDO SE 1500
        </td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <!--  -->
    <!--  -->
    <!--  -->
    <tr>
        <td style="width: 3%;" class="encabezado">
            No.
        </td>
        <td style="width: 7%;" class="encabezado">
            Fecha
        </td>
        <td style="width: 30%;" class="encabezado">
            Turno
        </td>
        <td style="width: 10%;" class="encabezado">
            H. Inicial
        </td>
        <td style="width: 10%;" class="encabezado">
            H. Final
        </td>
        <td style="width: 10%;" class="encabezado">
            Horas Trabajadas
        </td>
    </tr>
    {{$contador=0}}
    @foreach($datosHorometros as $registro)
    <tr>
        <td class="centrar">
            {{$contador= $contador + 1;}}
        </td>
        <td class="centrar">
            <?php
            date_default_timezone_set("America/Mexico_City");
            setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
            $data['Fecha'] = $registro->fechaHorometro;
            $marca = strtotime($data['Fecha']);
            ?>
            <?= strftime('%e/%B/%Y', $marca) ?>
        </td>
        <td class="centrar">
            {{$registro->turnoHorometro;}}
        </td>
        <td class="centrar">
            {{$registro->inicialHorometro;}}
        </td>
        <td class="centrar">
            {{$registro->finalHorometro;}}
        </td>
        <td class="centrar">
            {{$registro->totalHorometro;}}
        </td>
    </tr>
    @endforeach
</table>