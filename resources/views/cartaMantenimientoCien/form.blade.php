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

                <!-- Motor Diesel -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Motor Diesel.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Inspección de estado de mangueras y abrazaderas (realizar reapriete de ser necesario). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_1" id="mtto_motorDiesel_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Asegurar tensión de banda del alternador se encuentre entre 9mm y 15mm (GMS-10QSB).</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_2" id="mtto_motorDiesel_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>c) Limpiar y revisar en general ensamble de filtro de admisión, sujetadores y alojamiento se encuentren en buen estado.</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_3" id="mtto_motorDiesel_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>d) Asegurar que el filtro de admisión primario está en buenas condiciones (sacarlo y sacudirlo).</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_4" id="mtto_motorDiesel_4" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>e) Comprobar visualmente conductos, mangueras y conexiones del combustible. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_5" id="mtto_motorDiesel_5" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>f) Revisar motor Diesel en general para detectar posibles fugas. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_6" id="mtto_motorDiesel_6" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>g) Asegurar buen estado de guarda de protección de abanico de enfriamiento. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_7" id="mtto_motorDiesel_7" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>h) Verificar nivel correcto de anticongelante en depósito (reponer de ser necesario).</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_8" id="mtto_motorDiesel_8" value="Si">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>i) Verificar nivel de aceite de motor.</label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_motorDiesel_9" id="mtto_motorDiesel_9" value="Si">
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
                            <label>a) Comprobar el estado de la cabina / techo protector y las cerraduras. </label>
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
                            <label>a) Lubricar de tren motriz. (lubricación de crucetas). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_lubricacion_1" id="mtto_lubricacion_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Lubricar de las bisagras de la puerta. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_lubricacion_2" id="mtto_lubricacion_2" value="Si">
                        </div>
                    </div>
                </div>
                <!-- Sistema hidráulico -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Sistema hidráulico.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Verificar nivel adecuado de aceite hidráulico del sistema de estacionamiento. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_sistemaHidraulico_1" id="mtto_sistemaHidraulico_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Comprobación estado de mangueras y conexiones del sistema (no existan fugas). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_sistemaHidraulico_2" id="mtto_sistemaHidraulico_2" value="Si">
                        </div>
                    </div>
                </div>
                <!-- Frenos -->
                <div class="form-group col-md-12">
                    <div class="row mt-1">
                        <div class="divCheckList form-group col">
                            <h4 class="encabezado">Frenos.</h4>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>a) Revisar nivel adecuado de líquido del sistema de frenos de servicio en depósito (reponer de ser necesario). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_frenos_1" id="mtto_frenos_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Realizar pruebas de aplicación y liberación de freno de estacionamiento (de ser posible realizar en rampa). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_frenos_2" id="mtto_frenos_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>c) Revisar nivel de desgaste de balatas traseras y delanteras. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_frenos_3" id="mtto_frenos_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>d) Inspección a líneas de frenos en búsqueda de alguna fuga. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_frenos_4" id="mtto_frenos_4" value="Si">
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
                            <label>a) Verificar nivel de aceite de transmisión (rellenar de ser necesario). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_1" id="mtto_trenFuerza_1" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>b) Verificar nivel de aceite de diferencial delantero (rellenar de ser necesario 75-90 sintéticio). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_2" id="mtto_trenFuerza_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>c) Verificar nivel de aceite de diferencial trasero (rellenar de ser necesario). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_3" id="mtto_trenFuerza_3" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>d) Verificar nivel de aceite en transfer (rellenar de ser necesario). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_4" id="mtto_trenFuerza_4" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>e) Revisar estado de llantas y presión de aire a 40 psi (calibrar de ser necesario). </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_5" id="mtto_trenFuerza_5" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>f) Inspección de tuercas y birlos de llantas. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_6" id="mtto_trenFuerza_6" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>g) Comprobar correcto funcionamiento de sistema 4x4. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_trenFuerza_7" id="mtto_trenFuerza_7" value="Si">
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
                            <label>b) Comprobar el panel de instrumentos y la caja de fusibles. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_sistemaElectrico_2" id="mtto_sistemaElectrico_2" value="Si">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="divCheckList form-group col-10">
                            <label>c) Comprobar carga y funcionamiento de la batería. </label>
                        </div>
                        <div class="divCheckList form-group col-1">
                            <input type="checkbox" class="checkbox" name="mtto_sistemaElectrico_3" id="mtto_sistemaElectrico_3" value="Si">
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