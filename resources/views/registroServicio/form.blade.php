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

    <script>
        window.onload = function() {
            var fecha = new Date(); //Fecha actual
            var mes = fecha.getMonth() + 1; //obteniendo mes
            var dia = fecha.getDate(); //obteniendo dia
            var ano = fecha.getFullYear(); //obteniendo año
            if (dia < 10)
                dia = '0' + dia; //agrega cero si el menor de 10
            if (mes < 10)
                mes = '0' + mes //agrega cero si el menor de 10
            document.getElementById('fecha_Form').value = ano + "-" + mes + "-" + dia;
        }
    </script>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- <img  src="/img/carHead.jpg" alt="Card image cap"> -->
            <h3 class="encabezado">Información General </h3>
            <div class="row mt-1">
                <div class="form-group col-md-3">
                    <label for="fecha_Form">Fecha: </label>
                    <input type="date" placeholder="00/00/000" class="form-control" name="fecha_Form" id="fecha_Form" required>
                </div>

                <div class="form-group col-md-3">
                    <div class="switch-field">
                        <div class="switch-title"> <strong> Turno: </strong> </div>
                        <input type="radio" id="switch_left" name="turno_Form" value="Primera" required />
                        <label for="switch_left">Primera</label>
                        <input type="radio" id="switch_right" name="turno_Form" value="Segunda" required />
                        <label for="switch_right">Segunda</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="horoInicial_Form">Horómetro Inicial: </label>
                    <input type="text" placeholder="000" class="form-control" name="horoInicial_Form" id="horoInicial_Form" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="horoFinal_Form">Horómetro Final: </label>
                    <input type="text" placeholder="000" class="form-control" name="horoFinal_Form" id="horoFinal_Form" disabled>
                </div>
            </div>

            <h3 class="encabezado">Operador</h3>
            <div class="row mt-1">
                <div class="form-group col-md-3">
                    <label for="numeroOperador_Form">Num. Empleado: </label>
                    <input type="number" placeholder="000" value="{{ Auth::user()->email }}" class="form-control" name="numeroOperador_Form" id="numeroOperador_Form">
                </div>

                <div class="form-group col-md-6">
                    <label for="nombreOperador_Form">Operador: </label>
                    <input type="text" placeholder="" value="{{ Auth::user()->name }}" class="form-control" name="nombreOperador_Form" id="nombreOperador_Form">
                </div>
                <div class="form-group col-md-3">
                    <label for="encargado_Form">Encargado: </label>
                    <input type="text" placeholder="" value="Adán Eliutt Ruíz Morán" class="form-control" name="encargado_Form" id="encargado_Form">
                </div>
            </div>

            <h3 class="encabezado">Servicio a usuarios </h3>
            <div class="row mt-1">
                <div class="form-group col-md-2">
                    <label for="numeroEmpleado_Form">Número Empleado:</label>
                    <input type="number" placeholder="000" class="form-control" name="numeroEmpleado_Form" id="numeroEmpleado_Form" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="nombreEmpleado_Form">Nombre del empleado: </label>
                    <input type="text" placeholder="Ingrese el nombre del empleado" class="form-control" name="nombreEmpleado_Form" id="nombreEmpleado_Form">
                </div>
                <div class="form-group col-md-2">
                    <label for="tipoServicio_Form">Tipo de servicio:</label>
                    <select class="form-select" aria-label="Default select example" name="tipoServicio_Form" id="tipoServicio_Form">
                        <option value="Entrada">Entrada</option>
                        <option value="Salida">Salida</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="horaEntrada_Form">Hora de servicio: </label>
                    <input type="time" placeholder="" class="form-control" name="horaEntrada_Form" id="horaEntrada_Form" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="nivelTrabajo_Form">Nivel: </label>
                    <select class="form-select" aria-label="Default select example" name="nivelTrabajo_Form" id="nivelTrabajo_Form" required>
                        <option selected>Seleccione Opcion</option>
                        <option value="Superficie">Superficie</option>
                        <option value="530">530</option>
                        <option value="600">600</option>
                        <option value="695">695</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

            </div>

            <div class="row mt-1">
                <div class="form-group col-md-2">
                    <span class="addBut">
                        <a id="addMore"></a>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row" style="margin:auto; margin-top:26px; text-align: center;">
                <table class="tabla tablaUsuarios round_table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Núm</th>
                            <th style="width: 40%;">Nombre</th>
                            <th style="width: 10%;">Servicio</th>
                            <th style="width: 10%;">Entrada</th>
                            <th style="width: 20%;">Nivel</th>
                            <th style="width: 10%;">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="addRow" class="addRow">

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
                                    <!-- <button type="submit" href="" class="btn btn1">Guardar</button> -->
                                    <a style="cursor: pointer" class="btn btn1" data-toggle="modal" data-target="#menuModalSave">{{ __('Guardar Registro     ') }}<i class="fas fa-plus-circle"></i></a>
                                </div>
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
<div class="modal fade card-custom" id="menuModalSave">
    <div class="modal-dialog card-custom">
        <div class="modal-content card-custom">
            <div class="modal-header card-custom">

                <h2 class="modal-title" id="exampleModalLabel"> <i class="fas fa-exclamation" style="color: red;"></i> <strong> Advertencia</strong></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body content-modal">
                <div class="row">
                    <div class="alert alert-danger" role="alert">
                        <strong> Favor de revisar la hora y fecha que corresponda con el dia del registro. </strong>
                    </div>
                    <p>
                        La informacion recabada de esta encuesta es confidencial y unica.<br>
                        El objetivo de esto es establecier los elementos para identificar, analizar y tener
                        los datos necesarios para mostrar metricas, asi como para promover un entorno organizacional
                        favorable en el servicio del transporte Genco.<br>
                    </p>
                    <div class="alert alert-danger" role="alert">
                        <strong> Al momento de guardar este formulario, ya no podras realizar cambios en la informacion. </strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form">
                    <div class="form-group">
                        <div class="row mt-2">
                            <div class="form-group col">
                                <button type="submit" href="" class="btn btn1" target="_blank">Guardar</button>
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

<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

<script id="document-template" type="text/x-handlebars-template">
    <tr class="delete_add_more_item" id="delete_add_more_item">
      <td>
        <input type="text" class="form-control form-control-sm transporteNumeroEmpleado" name="transporteNumeroEmpleado[]" value="@{{ transporteNumeroEmpleado }}" required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm transporteNombre" name="transporteNombre[]" value="@{{ transporteNombre }}"  required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm transporteTipoServicio" name="transporteTipoServicio[]" value="@{{ transporteTipoServicio }}"  required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm transporteHoraEntrada" name="transporteHoraEntrada[]" value="@{{ transporteHoraEntrada }}"  required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm transporteNivelTrabajoEntrada" name="transporteNivelTrabajoEntrada[]" value="@{{ transporteNivelTrabajoEntrada }}"  required>
      </td>
      <td>
        <i class="removeaddmore" style="cursor:pointer;color:red;font-weight: bold;">Eliminar</i>
      </td>
  </tr>
 </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(document).on('click', '#addMore', function() {

        $('.tabla').show();

        var error = 0;

        var numeroEmpleado = $("#numeroEmpleado_Form").val();
        if (numeroEmpleado == '' || numeroEmpleado == null) {
            error = 1;
        }

        var nombre = $("#nombreEmpleado_Form").val();
        if (nombre == '' || nombre == null) {
            error = 1;
        }

        var tipoServicio = $("#tipoServicio_Form").val();
        if (tipoServicio == '' || tipoServicio == null) {
            error = 1;
        }

        var horaEntrada = $("#horaEntrada_Form").val();
        if (horaEntrada == '' || horaEntrada == null) {
            error = 1;
        }

        var nivelTrabajo = $("#nivelTrabajo_Form").val();
        if (nivelTrabajo == '' || nivelTrabajo == null) {
            error = 1;
        }

        var source = $("#document-template").html();
        var template = Handlebars.compile(source);

        var data = {
            transporteNumeroEmpleado: numeroEmpleado,
            transporteNombre: nombre,
            transporteTipoServicio: tipoServicio,
            transporteHoraEntrada: horaEntrada,
            transporteNivelTrabajoEntrada: nivelTrabajo,
        }

        if (error == 1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'LLena todos los campos',
            })
        } else {
            // Swal.fire({
            //     position: 'center',
            //     icon: 'success',
            //     title: 'Empleado ' + nombre + ' agregado.',
            //     showConfirmButton: false,
            //     timer: 1500
            // })
            var html = template(data);
            $("#addRow").append(html)
        }
    });

    $(document).on('click', '.removeaddmore', function(event) {
        $(this).closest('.delete_add_more_item').remove();
    });
</script>
@include('layouts.footer')
@endsection