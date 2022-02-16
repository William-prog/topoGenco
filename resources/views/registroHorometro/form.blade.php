@extends('layouts.app')

@section('content')

<style>
    .btn {
        position: relative;
        display: block;
        color: black;
        font-size: 14px;
        font-family: "Arial";
        text-decoration: none;
        margin: 30px 0;
        border: 2px solid black;
        padding: 14px 60px;
        /* text-transform: uppercase; */
        overflow: hidden;
        transition: 1s all ease;
        border-radius: 3%;
    }

    .btn::before {
        background: #FF771F;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
        transition: all 0.6s ease;
        border-radius: 3%;
        color: black;
    }

    .btn1::before {
        width: 0%;
        height: 100%;
        color: black;
    }

    .btn1:hover::before {
        width: 100%;
        color: black;
    }
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- <img  src="/img/carHead.jpg" alt="Card image cap"> -->
            <h3 class="encabezado">Datos del Horómetro</h3>

            <div class="row mt-1">
                <div class="form-group col-md-3">
                    <label for="fechaHorometro">Fecha: </label>
                    <input type="date" placeholder="00/00/000" class="form-control" name="fechaHorometro" id="fechaHorometro" required>
                </div>

                <div class="form-group col-md-3">
                    <div class="switch-field">
                        <div class="switch-title"> <strong> Turno: </strong> </div>
                        <input type="radio" id="switch_left" name="turnoHorometro" value="Primera" required />
                        <label for="switch_left">Primera</label>
                        <input type="radio" id="switch_right" name="turnoHorometro" value="Segunda" required />
                        <label for="switch_right">Segunda</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inicialHorometro">Horómetro Inicial: </label>
                    <input type="text" placeholder="000" class="form-control" name="inicialHorometro" id="inicialHorometro" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="finalHorometro">Horómetro Final: </label>
                    <input type="text" placeholder="000" class="form-control" name="finalHorometro" id="finalHorometro" required>
                </div>
            </div>

            <div class="row mt-1">
                <div class="form-group col-md-12">
                    <table class="tabla tablaUsuarios round_table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 25%;">Fecha</th>
                                <th style="width: 15%;">Turno</th>
                                <th style="width: 15%; text-align: center;">Horómetro Inicial</th>
                                <th style="width: 15%; text-align: center;">Horómetro Final</th>
                            </tr>
                        </thead>
                        <tbody id="addRow" class="addRow">
                            @foreach($datosHorometro as $horometro)
                            <tr>
                                <td>
                                    <?php
                                    date_default_timezone_set("America/Mexico_City");
                                    setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                                    $data['Fecha'] = $horometro->fechaHorometro;
                                    $marca = strtotime($data['Fecha']);
                                    ?>
                                    <?= strftime('%e/%B/%Y', $marca) ?>
                                </td>
                                <td style="text-align: center;">
                                    {{$horometro->turnoHorometro}}
                                </td>
                                <td style="text-align: center;">
                                    {{$horometro->inicialHorometro}}
                                </td>
                                <td style="text-align: center;">
                                    {{$horometro->finalHorometro}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-1">
                <div class="form-group col">
                    <div class="middle">
                        <button type="submit" style="cursor: pointer" class="btn btn1">
                            {{ __('Guardar Horómetro     ') }}<i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection