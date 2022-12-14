<form id="generarReporteGeneral" action="{{ url('/generarReporteGeneral/CSV') }}" target="_blank" method="post">
    @csrf
    <div class="row m-3">
        <div class="col">
            <label for="Fecha_Desde_General">Desde: </label>
            <input onchange="mostrarEstadisticasGenerales();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Desde_General" id="Fecha_Desde_General">
        </div>
        <div class="col">
            <label for="Fecha_Hasta_General">Hasta: </label>
            <input onchange="mostrarEstadisticasGenerales();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Hasta_General" id="Fecha_Hasta_General">
        </div>
        <div class="col">
            <label for=""></label>
            <button form="generarReporteGeneral" style="width: 100%; font-size: 0.8vw; font-weight: 400; font-size: 1rem; color: white; background-color: #292C2F;" class="btn btn-warning">
                Exportar CSV
                <i style="color: white;" class="fas fa-file-csv" aria-hidden="true"></i>
            </button>
        </div>
        <div class="col">
            <label for=""></label>
            <button form="generarReporteGeneral" style="width: 100%; font-size: 0.8vw; font-weight: 400; font-size: 1rem; color: white; background-color: #292C2F;" class="btn btn-warning">
                Aplicacion Excel
                <i style="color: white;" class="fas fa-file-csv" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    <script>
        function mostrarEstadisticasGenerales() {
            var Fecha_Desde = $('#Fecha_Desde_General').val();
            var Fecha_Hasta = $('#Fecha_Hasta_General').val();

            
        }
    </script>

    <div style="display: none;">
        <div class="row m-3">
            <div class="col">
                <input type="text" class="form-control" name="datoTOPOEntrada" id="datoTOPOEntrada">
            </div>
            <!-- <div class="col">
                <input type="text" class="form-control" name="datoCOYMSAEntrada" id="datoCOYMSAEntrada">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoOMyTCEntrada" id="datoOMyTCEntrada">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoPLCEntrada" id="datoPLCEntrada">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoFERCONSEntrada" id="datoFERCONSEntrada">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoOSSAEntrada" id="datoOSSAEntrada">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoCLMEntrada" id="datoCLMEntrada">
            </div> -->
        </div>

        <div class="row m-3">
            <div class="col">
                <input type="text" class="form-control" name="datoTOPOSalida" id="datoTOPOSalida">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoCOYMSASalida" id="datoCOYMSASalida">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoOMyTCSalida" id="datoOMyTCSalida">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoPLCSalida" id="datoPLCSalida">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoFERCONSSalida" id="datoFERCONSSalida">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoOSSASalida" id="datoOSSASalida">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoCLMSalida" id="datoCLMSalida">
            </div>
        </div>


        <div class="row m-3">
            <div class="col">
                <input type="text" class="form-control" name="datoTOPOTotal" id="datoTOPOTotal">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoCOYMSATotal" id="datoCOYMSATotal">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoOMyTCTotal" id="datoOMyTCTotal">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoPLCTotal" id="datoPLCTotal">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoFERCONSTotal" id="datoFERCONSTotal">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoOSSATotal" id="datoOSSATotal">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="datoCLMTotal" id="datoCLMTotal">
            </div>
        </div>
    </div>



    <script>
        function estadisticasGeneralServicio() {

            var Fecha_Desde = $('#Fecha_Desde_General').val();
            var Fecha_Hasta = $('#Fecha_Hasta_General').val();

            

        }
    </script>

    <div class="row m-3">
        <div class="col">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Servicio Genco</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Resumen</h6>
                    <p class="card-text">El n??mero de servicios no contempla entrada/salida sino el traslado de personal a diferentes niveles, el registro puede obtener de los reportes diarios.</p>
                    <p class="card-text">En el per??odo seleccionado del presente a??o se presentaron <strong id="totalServicio"> </strong> servicios de entrada y salida.</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card:hover {

            background-color: #3D3D3D;
            -webkit-transition: background-color 500ms linear;
            -ms-transition: background-color 500ms linear;
            transition: background-color 500ms linear;

            border: 4 px solid rgba(255, 119, 31, 80%);

            color: white;
        }

        .btn:hover {
            background-color: #FF771F;
            -webkit-transition: background-color 500ms linear;
            -ms-transition: background-color 500ms linear;
            transition: background-color 500ms linear;

        }
    </style>

    <div class="row m-3">
        <script>
            function estadisticasGeneralHorometro() {
                const jsonTopoHorometro = <?php echo json_encode($registroHorometro) ?>;
                var fecha_Desde_General = $('#Fecha_Desde_General').val();
                var fecha_Hasta_General = $('#Fecha_Hasta_General').val();

                let cantTopoEntradaHorometro = jsonTopoHorometro.filter(function(type, index) {
                    return type.turnoHorometro == 'Primera' && type.fechaHorometro >= fecha_Desde_General && type.fechaHorometro <= fecha_Hasta_General
                });

                let cantTopoSalidaHorometro = jsonTopoHorometro.filter(function(type, index) {
                    return type.turnoHorometro == 'Segunda' && type.fechaHorometro >= fecha_Desde_General && type.fechaHorometro <= fecha_Hasta_General
                });

                var Horometro = jsonTopoHorometro.map(function(e) {
                    let valoresHorometroCuarenta = (e.totalHorometro);
                    return valoresHorometroCuarenta;
                });

                var HorometroPrimera = cantTopoEntradaHorometro.map(function(e) {
                    let valoresHorometroCuarentaPrimera = (e.totalHorometro);
                    return valoresHorometroCuarentaPrimera;
                });

                var HorometroSegunda = cantTopoSalidaHorometro.map(function(e) {
                    let valoresHorometroCuarentaSegunda = (e.totalHorometro);
                    return valoresHorometroCuarentaSegunda;
                });

                // Suma Horometro
                var summed = 0;
                for (var key in Horometro) {
                    summed = parseFloat(Horometro[key]) + summed;
                };

                var summedP = 0;
                console.log(HorometroPrimera);
                for (var key in HorometroPrimera) {
                    summedP = parseFloat(Horometro[key]) + summedP;
                };

                var summedS = 0;
                console.log(HorometroSegunda);
                for (var key in HorometroSegunda) {
                    summedS = parseFloat(Horometro[key]) + summedS;
                };

                $("#horometroTotal").html(summed.toFixed(2));

                $("#horometroPrimera").html(summedP.toFixed(2));
                $("#horometroSegunda").html(summedS.toFixed(2));

            }
        </script>
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Hor??metro</h5>
                <div class="row m-3">
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary">
                            Turno Primera <span id="horometroPrimera" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Turno Segunda <span id="horometroSegunda" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Horometro Acumulado <span id="horometroTotal" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .pricing-wrapper {
            width: 960px;
            margin: 40px auto 0;
        }

        .pricing-table {
            border-top-left-radius: 38px;
            border-top-right-radius: 38px;
            margin: 0 10px;
            text-align: center;
            width: 300px;
            float: left;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }

        .pricing-table:hover {
            -webkit-transform: scale(1.06);
            -ms-transform: scale(1.06);
            -o-transform: scale(1.06);
            transform: scale(1.06);
        }

        .pricing-title {
            border-radius: 80px;
            color: #FFF;
            background: #e95846;
            padding: 20px 0;
            font-size: 2em;
            text-transform: uppercase;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
        }

        .pricing-table.recommended .pricing-title {
            background: #2db3cb;
        }

        .pricing-table.recommended .pricing-action {
            background: #2db3cb;
        }

        .pricing-table.entrada .pricing-title {
            background: #1C9741;
        }

        .pricing-table .price {
            background: #403e3d;
            color: white;
            font-size: 20px;
            font-weight: 700;
            padding: 20px 0;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
        }

        .pricing-table .price sup {
            font-size: 10px;
            position: relative;
            left: 5px;
        }

        .table-list {
            background: #FFF;
            color: #403d3a;
        }

        .table-list li {
            font-size: 1em;
            font-weight: 700;
            padding: 12px 8px;
        }

        .table-list li:before {
            content: "\f00c";
            font-family: 'FontAwesome';
            color: #3fab91;
            display: inline-block;
            position: relative;
            right: 5px;
            font-size: 16px;
        }

        .table-list li span {
            font-weight: 400;
        }

        .table-list li span.unlimited {
            color: #FFF;
            background: #e95846;
            font-size: 0.9em;
            padding: 5px 7px;
            display: inline-block;
            -webkit-border-radius: 38px;
            -moz-border-radius: 38px;
            border-radius: 38px;
        }


        .table-list li:nth-child(2n) {
            background: #F0F0F0;
        }

        .table-buy {
            background: #FFF;
            padding: 15px;
            text-align: left;
            overflow: hidden;
        }

        .table-buy p {
            float: left;
            color: #37353a;
            font-weight: 700;
            font-size: 2.4em;
        }

        .table-buy p sup {
            font-size: 0.5em;
            position: relative;
            left: 5px;
        }

        .table-buy .pricing-action {
            float: right;
            color: #FFF;
            background: #e95846;
            padding: 10px 16px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-weight: 700;
            font-size: 1.4em;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }

        .table-buy .pricing-action:hover {
            background: #cf4f3e;
        }

        .recommended .table-buy .pricing-action:hover {
            background: #228799;
        }

        
        @media only screen and (min-width: 768px) and (max-width: 959px) {
            .pricing-wrapper {
                width: 768px;
            }

            .pricing-table {
                width: 236px;
            }

            .table-list li {
                font-size: 1.3em;
            }

        }

        @media only screen and (max-width: 767px) {
            .pricing-wrapper {
                width: 420px;
            }

            .pricing-table {
                display: block;
                float: none;
                margin: 0 0 20px 0;
                width: 100%;
            }
        }

        @media only screen and (max-width: 479px) {
            .pricing-wrapper {
                width: 300px;
            }
        }
    </style>



    <!-- Contenedor -->
    <div class="pricing-wrapper clearfix">
        <div class="pricing-table entrada">
            <h3 class="pricing-title">Entradas</h3>
            <div class="price">
                 <sup id="totalEntrada"> </sup> <sup>/ servicios</sup>
            </div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li> <span>TOPO</span> <span id="totalTOPOEntrada" class="badge bg-secondary"></span> </li>
                <!-- <li>Cuentas de correo <span class="unlimited">ilimitadas</span></li> -->
            </ul>
        </div>

        <div class="pricing-table recommended">
            <h3 class="pricing-title">Salidas</h3>
            <div class="price"> <sup id="totalSalida"> </sup> <sup>/ servicios</sup></div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li> <span>TOPO</span> <span id="totalTOPOSalida" class="badge bg-secondary"></span> </li>
            </ul>
        </div>

        <div class="pricing-table">
            <h3 class="pricing-title">Totales</h3>
            <div class="price"> <sup id="totalTotales"> </sup> <sup>/ servicios</sup></div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li> <span>TOPO</span> <span id="totalTOPO" class="badge bg-secondary"></span> </li>
            </ul>
        </div>

    </div>


    <script>
        function estadisticasGeneralCartas() {
            const registroMantenimientoCincuenta = <?php echo json_encode($registroMantenimientoCincuenta) ?>;
            const jsonCartaMantenimientoCien = <?php echo json_encode($registroMantenimientoCien) ?>;

            var Fecha_Desde = $('#Fecha_Desde_General').val();
            var Fecha_Hasta = $('#Fecha_Hasta_General').val();


            let cantCartaCuarentaHoras = registroMantenimientoCien.filter(function(type, index) {
                return type.cuarenta_Fecha >= Fecha_Desde && type.cuarenta_Fecha <= Fecha_Hasta
            });

            let cantCartaCientoVeinteHoras = jsonCartaMantenimientoCien.filter(function(type, index) {
                return type.cientoVeinte_Fecha >= Fecha_Desde && type.cientoVeinte_Fecha <= Fecha_Hasta
            });

        }
    </script>



    <div class="row m-3">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Cartas de Mantenimiento</h5>
                <div class="row m-3">
                    <div class="col-6">
                        <h6 class="card-subtitle mb-2 text-muted">Cartas de mantenimiento 100Hr</h6>
                        <table id="cuarenta" class="table table-sm table-hover" style="background-color: white; border-collapse: collapse; border-radius: 1em; overflow: hidden;" cellspacing="0">
                            <thead class="">
                                <tr>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">No.</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Fecha</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Turno</th>
                                </tr>
                            </thead>
                            <p style="display:none;"> {{$contador=0}} </p>
                            <tbody>
                                @foreach($registroMantenimientoCien as $datoCU)
                                <tr>
                                    <td>{{$contador = $contador + 1}}</td>
                                    <td>
                                        <?php
                                        date_default_timezone_set("America/Mexico_City");
                                        setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                                        $data['Fecha'] = $datoCU->cuarenta_Fecha;
                                        $marca = strtotime($data['Fecha']);
                                        ?>
                                        <?= strftime('%e/%B/%Y', $marca) ?>

                                    </td>
                                    <td> {{$datoCU->cuarenta_Turno}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="col-6">
                        <h6 class="card-subtitle mb-2 text-muted">Cartas de mantenimiento 50Hr</h6>
                        <table id="cientoveinte" class="table table-sm table-hover" style="background-color: white; border-collapse: collapse; border-radius: 1em; overflow: hidden;" cellspacing="0">
                            <thead class="">
                                <tr>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">No.</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Fecha</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 20%;">Turno</th>
                                </tr>
                            </thead>
                            <p style="display:none;"> {{$contador=0}} </p>
                            <tbody>
                                @foreach($registroMantenimientoCincuenta as $datoCV)
                                <tr>
                                    <td>{{$contador = $contador + 1}}</td>
                                    <td>
                                        <?php
                                        date_default_timezone_set("America/Mexico_City");
                                        setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                                        $data['Fecha'] = $datoCV->cientoVeinte_Fecha;
                                        $marca = strtotime($data['Fecha']);
                                        ?>
                                        <?= strftime('%e/%B/%Y', $marca) ?>
                                    </td>
                                    <td>{{$datoCV->cientoVeinte_Turno}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>