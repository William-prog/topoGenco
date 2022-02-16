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
            Check List
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

<table width="100%" cellpadding="0" cellspacing="1" bordercolor="#000000" style=" vertical-align: text-top; border: 0px solid #fff">
    <tr>
        <td style="width: 49%;">
            @foreach($registros as $registro)
            <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <strong>Extintores:</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <strong></strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: center;">
                        <strong>Requisito:</strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>Si</strong> Cumple
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>No</strong> Cumple
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>Capacidad 6 KG. PQS</strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_1 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_1 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            El manómetro indica cargado "zona verde".
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_2 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_2 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Manguera libre de obstáculos.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_3 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_3 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Cilindro sin golpes deformaciones.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_4 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_4 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Etiqueta de carga visible.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_4 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_4 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Etiqueta de carga visible.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_5 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_5 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Pasador y cintilla en buen estado.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_6 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_6 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Palanca de acarreo y manija de activación en buen estado.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_7 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_7 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            "PQ2" Collarín.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_8 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Extintores_8 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
            </table>
            <br>
            <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">

                <tr>
                    <td colspan="3" style="text-align: center;">
                        <strong>Neumáticos:</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: center;">
                        <strong>Requisito:</strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>Si</strong> Cumple
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>No</strong> Cumple
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Llantas en buen estado.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Neumaticos_1 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Neumaticos_1 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Haro de rin con seguro.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Neumaticos_2 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Neumaticos_2 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Apriete de Birlos.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Neumaticos_3 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Neumaticos_3 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
            </table>
            <br>
            <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">

                <tr>
                    <td colspan="3" style="text-align: center;">
                        <strong>Niveles de operación.</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: center;">
                        <strong>Requisito:</strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>Si</strong> Cumple
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>No</strong> Cumple
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Nivel de aceite de motor.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_1 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_1 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Nivel anticongelante.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_2 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_2 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Nivel de hidráulico.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_3 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_3 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Nivel de diesel.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_4 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_4 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Líquido de frenos.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_5 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_5 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Fugas de aceite.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_6 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Niveles_6 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
            </table>
            @endforeach
        </td>
        <td style="width: 2%;">
            
        </td>
        <td style="width: 49%; vertical-align: text-top;">
            @foreach($registros as $registro)
            <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <strong>Neumáticos:</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: center;">
                        <strong>Requisito:</strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>Si</strong> Cumple
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>No</strong> Cumple
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Luces delanteras y traseras.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_1 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_1 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Luces de reversa.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_2 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_2 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Luces direccionales e intermitentes.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_3 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_3 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Faros auxiliares delanteros y traseros.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_4 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_4 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Bandera luminiscente (1m sobre Rol bar superior a la altura de la cabina).
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_5 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_5 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Alarma de reversa.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_6 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_6 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Leyenda de 30m de distancia.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_7 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_7 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Burrera delantera y defensa trasera.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_8 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_8 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Traba tuercas.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_9 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_9 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            2 calzas para bloqueo(metal).
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_10 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_10 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Cintas reflejantes.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_11 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_11 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Parabrisas y cristales.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_12 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_12 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Cinturones de seguridad.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_13 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_13 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Torreta Ámbar.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_14 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_14 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Frenos de estacionamiento.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_15 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_15 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Limpiaparabrisas.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_16 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_16 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Espejos.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_17 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_17 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Claxon.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_18 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_18 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Orden y limpieza.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_19 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_19 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Asientos en buen estado.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_20 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_20 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="width: 60%; text-align: justify;">
                        <strong>
                            Barra amacice de fibra de vidrio.
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_21 == 'Si')
                            X
                            @endif
                        </strong>
                    </td>
                    <td colspan="1" style="width: 20%; text-align: center;">
                        <strong>
                            @if($registro->cl_Elementos_21 == 'No')
                            X
                            @endif
                        </strong>
                    </td>
                </tr>

            </table>
            @endforeach
        </td>
    </tr>
</table>

<br>
@foreach($registros as $registro)
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top; border: 1px solid #000">
    <tr>
        <td colspan="3" style="text-align: left;">
            <strong>Observaciones:</strong>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center;">
            {{$registro->checkListObservaciones}}
        </td>
    </tr>
</table>
@endforeach