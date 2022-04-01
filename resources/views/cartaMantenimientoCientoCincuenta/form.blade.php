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
                    <label for="mantenimientoEquipo">Equipo: </label>
                    <input type="text" placeholder="000" class="form-control" name="mantenimientoEquipo" id="mantenimientoEquipo" value="Genco" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="mantenimientoMarca">Marca: </label>
                    <input type="text" placeholder="000" class="form-control" name="mantenimientoMarca" id="mantenimientoMarca" value="Genco" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="mantenimientoNumEco">Núm. Eco.: </label>
                    <input type="text" placeholder="000" class="form-control" name="mantenimientoNumEco" id="mantenimientoNumEco" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="mantenimientoFecha">Fecha: </label>
                    <input type="date" placeholder="000" class="form-control" name="mantenimientoFecha" id="mantenimientoFecha" required>
                </div>
            </div>

            <div class="row mt-1">
                <div class="form-group col-md-3">
                    <label for="mantenimientoTipo">Tipo de Mantenimiento: </label>
                    <input type="text" placeholder="000" class="form-control" name="mantenimientoTipo" id="mantenimientoTipo" value="Preventivo" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="mantenimientoHorometro">Horómetro: </label>
                    <input type="text" placeholder="000" class="form-control" name="mantenimientoHorometro" id="mantenimientoHorometro" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="mantenimientoHorario">Horario: </label>
                    <input type="text" placeholder="000" class="form-control" name="mantenimientoHorario" id="mantenimientoHorario" required>
                </div>
                <div class="form-group col-md-3">
                    <div class="switch-field">
                        <div class="switch-title"> <strong> Turno: </strong> </div>
                        <input type="radio" id="switch_left" name="mantenimientoTurno" value="Primera" required />
                        <label for="switch_left">Primera</label>
                        <input type="radio" id="switch_right" name="mantenimientoTurno" value="Segunda" required />
                        <label for="switch_right">Segunda</label>
                    </div>
                </div>
            </div>

            <div class="row mt-1">

                <!-- Limpieza general -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Limpieza general.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Comprobar que todas las señales aplicables estén en los lugares establecidos. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_limpiezaGeneral_1" id="mtto_limpiezaGeneral_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Comprobar orden y limpieza dentro del elemento. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_limpiezaGeneral_2" id="mtto_limpiezaGeneral_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>c) Realizar limpieza en el exterior del elemento. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_limpiezaGeneral_3" id="mtto_limpiezaGeneral_3" value="Si">
                        </div>
                    </div>
                </div>
                <!-- Estructura -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Estructura.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Comprobar el estado de la cabina/techo protector y las cerraduras. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_estructura_1" id="mtto_estructura_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Comprobar el sistema de supresión de incendios. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_estructura_2" id="mtto_estructura_2" value="Si">
                        </div>
                    </div>
                </div>
                <!-- Lubricación -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Lubricación.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Lubricación de tren motriz. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_lubricacion_1" id="mtto_lubricacion_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Lubricación de las bisagras de la puerta. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_lubricacion_2" id="mtto_lubricacion_2" value="Si">
                        </div>
                    </div>
                </div>
                <!-- Grupo de accionamiento -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Grupo de accionamiento.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Cambio de los filtros ( GMS-28F) y el aceite del motor (8.5 lts 15W40). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_accionamiento_1" id="mtto_accionamiento_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Cambiar filtros de admisión (filtro primario GMS-4F y filtro secundario GMS-3F). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_accionamiento_2" id="mtto_accionamiento_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>c) Cambiar filtros de combustible (GMS-16F). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_accionamiento_3" id="mtto_accionamiento_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>d) Cambiar elemento del filtro separador (GMS-15F). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_accionamiento_4" id="mtto_accionamiento_4" value="Si">
                        </div>
                    </div>
                </div>
                <!-- Tren de fuerza -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Tren de fuerza.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Comprobar presión de los neumáticos. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_1" id="mtto_trenFuerza_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Comprobar apriete y estado de crucetas, flechas y yugos. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_2" id="mtto_trenFuerza_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>c) Verificar estado de masa-balero. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_3" id="mtto_trenFuerza_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>d) Reemplazar balatas y herrajes. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_4" id="mtto_trenFuerza_4" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>e) Verificar estado de discos de freno. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_5" id="mtto_trenFuerza_5" value="Si">
                        </div>
                    </div>
                </div>
                <!-- Sistema eléctrico -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Sistema eléctrico.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Comprobar funcionamiento de luces en general. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_sistemaElectrico_1" id="mtto_sistemaElectrico_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Comprobar carga y funcionamiento de la batería. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_sistemaElectrico_2" id="mtto_sistemaElectrico_2" value="Si">
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <label for="mtto_Observaciones">Observaciones:</label>
                    <textarea class="form-control" name="mtto_Observaciones" id="mtto_Observaciones" rows="5" required></textarea>
                </div>

                <div class="form-group col-md-4">
                    <label for="mtto_Operador">Operador: </label>
                    <input type="text" placeholder="Nombre Completo" class="form-control" name="mtto_Operador" id="mtto_Operador" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="mtto_Verificador">Verificador: </label>
                    <input type="text" placeholder="Nombre Completo" class="form-control" name="mtto_Verificador" id="mtto_Verificador" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="mtto_Encargado">Encargado: </label>
                    <input type="text" placeholder="Nombre Completo" class="form-control" name="mtto_Encargado" id="mtto_Encargado" required>
                </div>
            </div>


            <div class="row mt-1">
                <div class="form-group col">
                    <div class="middle">
                        <button type="submit" style="cursor: pointer" class="btn btn1">
                            {{ __('Guardar Carta     ') }}<i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection