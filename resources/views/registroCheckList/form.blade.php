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
            <h3 class="encabezado">Datos del Generales</h3>

            <div class="row mt-1">
                <div class="form-group col-md-3">
                    <label for="checkListFecha">Fecha: </label>
                    <input type="date" placeholder="00/00/000" class="form-control" name="checkListFecha" id="checkListFecha" required>
                </div>
                <div class="form-group col-md-3">
                    <div class="switch-field">
                        <div class="switch-title"> <strong> Turno: </strong> </div>
                        <input type="radio" id="switch_left" name="checkListTurno" value="Primera" required />
                        <label for="switch_left">Primera</label>
                        <input type="radio" id="switch_right" name="checkListTurno" value="Segunda" required />
                        <label for="switch_right">Segunda</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="checkListHorometro">Horómetro Inicial: </label>
                    <input type="text" placeholder="000" class="form-control" name="checkListHorometro" id="checkListHorometro" required>
                </div>
            </div>

            <div class="row mt-1">
                <div class="form-group col-md-6">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Extintores.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Capacidad 6 KG. PQS </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_1" id="cl_Extintores_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>El manómetro indica cargado "zona verde".</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_2" id="cl_Extintores_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Manguera libre de obstáculos. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_3" id="cl_Extintores_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Cilindro sin golpes deformaciones. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_4" id="cl_Extintores_4" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Etiqueta de carga visible. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_5" id="cl_Extintores_5" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Pasador y cintilla en buen estado. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_6" id="cl_Extintores_6" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Palanca de acarreo y manija de activación en buen estado. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_7" id="cl_Extintores_7" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>"PQ2" Collarín.</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Extintores_8" id="cl_Extintores_8" value="Si">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Neumáticos.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Llantas en buen estado. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Neumaticos_1" id="cl_Neumaticos_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Haro de rin con seguro. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Neumaticos_2" id="cl_Neumaticos_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Apriete de Birlos. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Neumaticos_3" id="cl_Neumaticos_3" value="Si">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Niveles de operación.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Nivel de aceite de motor. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Niveles_1" id="cl_Niveles_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Nivel anticongelante. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Niveles_2" id="cl_Niveles_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Nivel de hidráulico. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Niveles_3" id="cl_Niveles_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Nivel de diesel. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Niveles_4" id="cl_Niveles_4" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Líquido de frenos.</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Niveles_5" id="cl_Niveles_5" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Fugas de aceite. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Niveles_6" id="cl_Niveles_6" value="Si">
                        </div>
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Elementos Generales.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Luces delanteras y traseras. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_1" id="cl_Elementos_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Luces de reversa. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_2" id="cl_Elementos_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Luces direccionales e intermitentes. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_3" id="cl_Elementos_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Faros auxiliares delanteros y traseros. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_4" id="cl_Elementos_4" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Bandera luminiscente (1m sobre Rol bar superior a la altura de la cabina). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_5" id="cl_Elementos_5" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Alarma de reversa. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_6" id="cl_Elementos_6" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Leyenda de 30m de distancia. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_7" id="cl_Elementos_7" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Burrera delantera y defensa trasera.</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_8" id="cl_Elementos_8" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Traba tuercas. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_9" id="cl_Elementos_9" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>2 calzas para bloqueo(metal). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_10" id="cl_Elementos_10" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Cintas reflejantes. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_11" id="cl_Elementos_11" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Parabrisas y cristales. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_12" id="cl_Elementos_12" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Cinturones de seguridad. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_13" id="cl_Elementos_13" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Torreta Ámbar. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_14" id="cl_Elementos_14" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Frenos de estacionamiento. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_15" id="cl_Elementos_15" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Limpiaparabrisas.</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_16" id="cl_Elementos_16" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Espejos. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_17" id="cl_Elementos_17" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Claxon. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_18" id="cl_Elementos_18" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Orden y limpieza. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_19" id="cl_Elementos_19" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Asientos en buen estado. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_20" id="cl_Elementos_20" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>Barra amacice de fibra de vidrio. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="cl_Elementos_21" id="cl_Elementos_21" value="Si">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="checkListObservaciones">Observaciones:</label>
                    <textarea class="form-control" name="checkListObservaciones" id="checkListObservaciones" rows="5" required></textarea>
                </div>
            </div>


            <div class="row mt-1">
                <div class="form-group col">
                    <div class="middle">
                        <button type="submit" style="cursor: pointer" class="btn btn1">
                            {{ __('Guardar CheckList     ') }}<i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection