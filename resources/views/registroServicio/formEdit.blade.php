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
            <h3 class="encabezado">Información General </h3>
            <div class="row mt-1">
                <div class="form-group col-md-4">
                    @foreach($registros as $registro)
                    @if($registro->id == $registro->idForanea)
                    <label for="fechaRegistro"> <strong> Horómetro Inicial: </strong> </label>
                    <input type="number" placeholder="" value="{{$registro->horometroIni}}" class="form-control" name="HorIn" id="HorIn" readonly="readonly">
                    @endif
                    @endforeach
                </div>

                <div class="form-group col-md-4">
                    <label for="fechaRegistro"> <strong> Horómetro Final: </strong> </label>
                    <input type="text" placeholder="Numero mayor al horometro inicial" class="form-control" name="HorFi" id="HorFi" required onkeyup="comparacion();">

                    <script>
                        function comparacion() {
                            var hi = $("#HorIn").val();
                            var hf = $("#HorFi").val();

                            var h = parseFloat(hf) - parseFloat(hi);

                            if (h >= 0) {
                                input = document.getElementById('hor');
                                input.style.color = 'black';
                                input.style.fontWeight = '400';
                                input.style.borderColor = 'white';

                                divGuardar = document.getElementById('alertaGuardar');
                                divGuardar.style.display = '';

                                divBoton = document.getElementById('alertaBoton');
                                divBoton.style.display = '';

                                divHor = document.getElementById('alertaHoro');
                                divHor.style.display = 'none';
                            } else {
                                input = document.getElementById('hor');
                                input.style.color = 'red';
                                input.style.fontWeight = '700';
                                input.style.borderColor = 'red';

                                divGuardar = document.getElementById('alertaGuardar');
                                divGuardar.style.display = 'none';

                                divBoton = document.getElementById('alertaBoton');
                                divBoton.style.display = 'none';

                                divHor = document.getElementById('alertaHoro');
                                divHor.style.display = '';
                            }
                            $("#hor").val(h.toFixed(2));
                        }
                    </script>
                </div>
                <div class="form-group col-md-4">
                    <label for=" fechaRegistro"> <strong> Horómetro: </strong> </label>
                    <input type="text" placeholder="" class="form-control" name="hor" id="hor" readonly="readonly">
                </div>
                <div class="form-group col-md-12">
                    <label for="observaciones">Observaciones:</label>
                    <textarea class="form-control" name="observaciones_Form" id="observaciones_Form" rows="5" required></textarea>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="tabla tablaUsuarios round_table" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="display:none;">Numero</th>
                        <th style="width: 25%;">Nombre</th>
                        <th style="width: 10%;">Entrada</th>
                        <th style="display:none;">Nivel</th>
                        <th style="width: 10%;">Salida</th>
                        <th style="width: 20%;">Nivel</th>
                        <th style="display:none;">Horómetro</th>
                        <th style="display:none;">Fecha</th>
                        <th style="display:none;">Encargado</th>
                        <th style="display:none;">NumOperador</th>
                        <th style="display:none;">NomOperador</th>
                        <th style="display:none;">Observaciones</th>
                        <th style="display:none;">horoIni</th>
                        <th style="display:none;">horoRes</th>
                        <th style="display:none;">turno</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td style="display:none;">
                            <input type="text" class="form-control form-control-sm numeroEmpleado" name="numeroEmpleado[]" value="{{$registro->numeroEmpleado }}" readonly="readonly">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm nombre" name="nombre[]" value="{{$registro->nombre }}" readonly="readonly">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm horaEntrada" name="horaEntrada[]" value="{{$registro->horaEntrada }}" readonly="readonly">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="form-control form-control-sm nivelTrabajo" name="nivelTrabajo[]" value="{{$registro->nivelTrabajo }}" readonly="readonly">
                        </td>
                        <td>
                            <input type="time" class="form-control form-control-sm horaSalida" name="horaSalida[]" required>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="nivelTrabajoS[]" required>
                                <option selected>Seleccione</option>
                                <option value="Superficie">Superficie</option>
                                <option value="530">530</option>
                                <option value="600">600</option>
                                <option value="695">695</option>
                            </select>
                        </td>
                        <td style="display:none;">
                            <input type="text" class="form-control form-control-sm horaSalida" id="horometroFin[]" placeholder="{{$registro->horometroIni }}" name="horometroFin[]">
                        </td>
                        <!-- datos que no se muestran :P -->
                        <td style="display:none;">
                            <input type="text" class="tipoServicio" name="tipoServicio[]" value="{{$registro->tipoServicio }}">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="fechaRegistro" name="fechaRegistro[]" value="{{$registro->fechaRegistro }}">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="encargado" name="encargado[]" value="{{$registro->encargado }}">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="numOperador" name="numOperador[]" value="{{$registro->numOperador }}">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="nomOperador" name="nomOperador[]" value="{{$registro->nomOperador }}">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="horometroIni" name="horometroIni[]" value="{{$registro->horometroIni }}">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="horometroRes" name="horometroRes[]" value="{{$registro->horometroRes }}">
                        </td>
                        <td style="display:none;">
                            <input type="text" class="turno" name="turno[]" value="{{$registro->turno}}">
                        </td>
                        @endforeach
                </tbody>
            </table>

            <div class="form">
                <div class="form-group">
                    <div class="row mt-2">
                        <div class="form-group col">
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="middle">
                                <a style="cursor: pointer" class="btn btn1" data-toggle="modal" data-target="#menuModalSaveSalida">{{ __('Cerrar Registro     ') }}<i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!--  -->
<!--  -->


<div class="modal fade" id="menuModalSaveSalida" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog card-custom">
        <div class="modal-content card-custom">
            <div class="modal-header card-custom">
                <h2 class="modal-title" id="exampleModalLabel"> <i class="fas fa-exclamation-triangle" style="color: red;"></i> <strong> Advertencia</strong></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body content-modal">
                <div id="alertaGuardar" class="row">
                    <p>
                        La informacion recabada de esta encuesta es confidencial y unica.<br>
                        El objetivo de esto es establecier los elementos para identificar, analizar y tener
                        los datos necesarios para mostrar metricas, asi como para promover un entorno organizacional
                        favorable en el servicio del Alimak.<br>
                    </p>
                    <div id="alertaGuardar" class="alert alert-danger" role="alert">
                        <strong> Al momento de guardar este formulario, ya no podras realizar cambios en la informacion, cerrando por completo el formulario</strong>
                    </div>
                </div>
                <div id="alertaHoro" class="row">
                    <div class="alert alert-danger" role="alert">
                        <strong> Oh no! Parece que los datos del Horómetro final no tiene coherencia</strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form">
                    <div class="form-group">
                        <div class="row mt-2">
                            <div class="form-group col">
                                <button id="alertaBoton" type="submit" href="" class="btn btn1">Guardar</button>
                            </div>
                            <div class="form-group col">
                                <button type="button" class="btn border shadow" data-dismiss="modal">Cancelar</button>
                            </div>
                            <div class="form-group col">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  -->
<!--  -->
<!--  -->
@include('layouts.footer')
@endsection