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

            estadisticasGeneralServicio();

            estadisticasGeneralHorometro();

            estadisticasGeneralCartas();
        }
    </script>

    <div style="display: none;">
        <div class="row m-3">
            <div class="col">
                <input type="text" class="form-control" name="datoTOPOEntrada" id="datoTOPOEntrada">
            </div>
            <div class="col">
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
            </div>
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

            let cantEntradaTopo = jsonServicioEntradaTopo.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });

            let cantEntradaFercons = jsonServicioEntradaFercons.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });

            let cantEntradaFresnillo = jsonServicioEntradaFresnillo.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });

            let cantEntradaCoymsa = jsonServicioEntradaCoymsa.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });

            let cantEntradaClm = jsonServicioEntradaClm.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });

            let cantEntradaTti = jsonServicioEntradaTti.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });

            let cantEntradaOmytc = jsonServicioEntradaOmytc.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });

            let cantEntradaOssa = jsonServicioEntradaOssa.filter(function(type, index) {
                return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
            });






            let cantSalidaTopo = jsonServicioSalidaTopo.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            let cantSalidaFercons = jsonServicioSalidaFercons.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            let cantSalidaFresnillo = jsonServicioSalidaFresnillo.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            let cantSalidaCoymsa = jsonServicioSalidaCoymsa.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            let cantSalidaClm = jsonServicioSalidaClm.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            let cantSalidaTti = jsonServicioSalidaTti.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            let cantSalidaOmytc = jsonServicioSalidaOmytc.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            let cantSalidaOssa = jsonServicioSalidaOssa.filter(function(type, index) {
                return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
            });

            var total_Salida_Topo = cantSalidaTopo.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
            var total_Salida_Fercons = cantSalidaFercons.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
            var total_Salida_Fresnillo = cantSalidaFresnillo.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
            var total_Salida_Coymsa = cantSalidaCoymsa.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
            var total_Salida_Clm = cantSalidaClm.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
            var total_Salida_Tti = cantSalidaTti.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
            var total_Salida_Omytc = cantSalidaOmytc.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
            var total_Salida_Ossa = cantSalidaOssa.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);


            var total_Entrada_Topo = cantEntradaTopo.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
            var total_Entrada_Fercons = cantEntradaFercons.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
            var total_Entrada_Fresnillo = cantEntradaFresnillo.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
            var total_Entrada_Coymsa = cantEntradaCoymsa.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
            var total_Entrada_Clm = cantEntradaClm.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
            var total_Entrada_Tti = cantEntradaTti.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
            var total_Entrada_Omytc = cantEntradaOmytc.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
            var total_Entrada_Ossa = cantEntradaOssa.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);

            var total_Topo = total_Salida_Topo + total_Entrada_Topo;
            var total_Fercons = total_Salida_Fercons + total_Entrada_Fercons;
            var total_Fresnillo = total_Salida_Fresnillo + total_Entrada_Fresnillo;
            var total_Coymsa = total_Salida_Coymsa + total_Entrada_Coymsa;
            var total_Clm = total_Salida_Clm + total_Entrada_Clm;
            var total_Tti = total_Salida_Tti + total_Entrada_Tti;
            var total_Omytc = total_Salida_Omytc + total_Entrada_Omytc;
            var total_Ossa = total_Salida_Ossa + total_Entrada_Ossa;



            var total = total_Topo + total_Fercons + total_Fresnillo + total_Coymsa + total_Clm + total_Tti + total_Omytc + total_Ossa;
            var totalEntrada = total_Entrada_Topo + total_Entrada_Fercons + total_Entrada_Fresnillo + total_Entrada_Coymsa + total_Entrada_Clm + total_Entrada_Tti + total_Entrada_Omytc + total_Entrada_Ossa;
            var totalSalida = total_Salida_Topo + total_Salida_Fercons + total_Salida_Fresnillo + total_Salida_Coymsa + total_Salida_Clm + total_Salida_Tti + total_Salida_Omytc + total_Salida_Ossa;

            $("#totalEntrada").html(totalEntrada);

            $("#totalSalida").html(totalSalida);

            $("#totalTotales").html(total);


            $("#totalServicio").html(total);

            document.getElementById("datoTOPOTotal").value = total_Topo;
            document.getElementById("datoCOYMSATotal").value = total_Coymsa;
            document.getElementById("datoOMyTCTotal").value = total_Omytc;
            document.getElementById("datoPLCTotal").value = total_Fresnillo;
            document.getElementById("datoFERCONSTotal").value = total_Fercons;
            document.getElementById("datoOSSATotal").value = total_Ossa;
            document.getElementById("datoCLMTotal").value = total_Clm;

            document.getElementById("datoTOPOEntrada").value = total_Entrada_Topo;
            document.getElementById("datoCOYMSAEntrada").value = total_Entrada_Coymsa;
            document.getElementById("datoOMyTCEntrada").value = total_Entrada_Omytc;
            document.getElementById("datoPLCEntrada").value = total_Entrada_Fresnillo;
            document.getElementById("datoFERCONSEntrada").value = total_Entrada_Fercons;
            document.getElementById("datoOSSAEntrada").value = total_Entrada_Ossa;
            document.getElementById("datoCLMEntrada").value = total_Entrada_Clm;

            document.getElementById("datoTOPOSalida").value = total_Salida_Topo;
            document.getElementById("datoCOYMSASalida").value = total_Salida_Coymsa;
            document.getElementById("datoOMyTCSalida").value = total_Salida_Omytc;
            document.getElementById("datoPLCSalida").value = total_Salida_Fresnillo;
            document.getElementById("datoFERCONSSalida").value = total_Salida_Fercons;
            document.getElementById("datoOSSASalida").value = total_Salida_Ossa;
            document.getElementById("datoCLMSalida").value = total_Salida_Clm;

            $("#totalTOPO").html(total_Topo);
            $("#totalCOYMSA").html(total_Coymsa);
            $("#totalOMyTC").html(total_Omytc);
            $("#totalPLC").html(total_Fresnillo);
            $("#totalFERCONS").html(total_Fercons);
            $("#totalOSSA").html(total_Ossa);
            $("#totalCLM").html(total_Clm);

            $("#totalTOPOEntrada").html(total_Entrada_Topo);
            $("#totalCOYMSAEntrada").html(total_Entrada_Coymsa);
            $("#totalOMyTCEntrada").html(total_Entrada_Omytc);
            $("#totalPLCEntrada").html(total_Entrada_Fresnillo);
            $("#totalFERCONSEntrada").html(total_Entrada_Fercons);
            $("#totalOSSAEntrada").html(total_Entrada_Ossa);
            $("#totalCLMEntrada").html(total_Entrada_Clm);

            $("#totalTOPOSalida").html(total_Salida_Topo);
            $("#totalCOYMSASalida").html(total_Salida_Coymsa);
            $("#totalOMyTCSalida").html(total_Salida_Omytc);
            $("#totalPLCSalida").html(total_Salida_Fresnillo);
            $("#totalFERCONSSalida").html(total_Salida_Fercons);
            $("#totalOSSASalida").html(total_Salida_Ossa);
            $("#totalCLMSalida").html(total_Salida_Clm);

            $("#totalMayorTOPO").html(total_Topo);
            $("#totalMayorFresnillo").html(total_Fresnillo);
            $("#totalMayorOMyTC").html(total_Omytc);

        }
    </script>

    <div class="row m-3">
        <div class="col">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Servicio Elevador Alimak</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Resumen</h6>
                    <p class="card-text">El número de servicios no contempla entrada/salida sino el traslado de personal a diferentes niveles, el registro puede obtener de los reportes diarios.</p>
                    <p class="card-text">En el período seleccionado del presente año se presentaron <strong id="totalServicio"> </strong> servicios de entrada y salida.</p>
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
                <h5 class="card-title" style="text-align: center;">Horómetro</h5>
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
        .pricing-table-title {
            text-transform: uppercase;
            font-weight: 700;
            font-size: 2.6em;
            color: #FFF;
            margin-top: 15px;
            text-align: left;
            margin-bottom: 25px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
        }

        .pricing-table-title a {
            font-size: 0.6em;
        }

        .clearfix:after {
            content: '';
            display: block;
            height: 0;
            width: 0;
            clear: both;
        }

        /** ========================
 * Contenedor
 ============================*/
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

        /** ================
 * Responsive
 ===================*/
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
                <h3> <sup id="totalEntrada"> </sup> <sup>/ servicios</sup> </h3>
            </div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li> <span>TOPO</span> <span id="totalTOPOEntrada" class="badge bg-secondary"></span> </li>
                <li> <span>Fresnillo PLC</span> <span id="totalPLCEntrada" class="badge bg-secondary"></span> </li>
                <li> <span>OMyTC</span> <span id="totalOMyTCEntrada" class="badge bg-secondary"></span> </li>
                <li> <span>FERCONS</span> <span id="totalFERCONSEntrada" class="badge bg-secondary"></span> </li>
                <li> <span>COYMSA</span> <span id="totalCOYMSAEntrada" class="badge bg-secondary"></span> </li>
                <li> <span>CLM</span> <span id="totalCLMEntrada" class="badge bg-secondary"></span> </li>
                <li> <span>OSSA</span> <span id="totalOSSAEntrada" class="badge bg-secondary"></span> </li>
                <!-- <li>Cuentas de correo <span class="unlimited">ilimitadas</span></li> -->
            </ul>
        </div>

        <div class="pricing-table recommended">
            <h3 class="pricing-title">Salidas</h3>
            <div class="price"> <sup id="totalSalida"> </sup> <sup>/ servicios</sup></div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li> <span>TOPO</span> <span id="totalTOPOSalida" class="badge bg-secondary"></span> </li>
                <li> <span>Fresnillo PLC</span> <span id="totalPLCSalida" class="badge bg-secondary"></span> </li>
                <li> <span>OMyTC</span> <span id="totalOMyTCSalida" class="badge bg-secondary"></span> </li>
                <li> <span>FERCONS</span> <span id="totalFERCONSSalida" class="badge bg-secondary"></span> </li>
                <li> <span>COYMSA</span> <span id="totalCOYMSASalida" class="badge bg-secondary"></span> </li>
                <li> <span>CLM</span> <span id="totalCLMSalida" class="badge bg-secondary"></span> </li>
                <li> <span>OSSA</span> <span id="totalOSSASalida" class="badge bg-secondary"></span> </li>
            </ul>
        </div>

        <div class="pricing-table">
            <h3 class="pricing-title">Totales</h3>
            <div class="price"> <sup id="totalTotales"> </sup> <sup>/ servicios</sup></div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li> <span>TOPO</span> <span id="totalTOPO" class="badge bg-secondary"></span> </li>
                <li> <span>Fresnillo PLC</span> <span id="totalPLC" class="badge bg-secondary"></span> </li>
                <li> <span>OMyTC</span> <span id="totalOMyTC" class="badge bg-secondary"></span> </li>
                <li> <span>FERCONS</span> <span id="totalFERCONS" class="badge bg-secondary"></span> </li>
                <li> <span>COYMSA</span> <span id="totalCOYMSA" class="badge bg-secondary"></span> </li>
                <li> <span>CLM</span> <span id="totalCLM" class="badge bg-secondary"></span> </li>
                <li> <span>OSSA</span> <span id="totalOSSA" class="badge bg-secondary"></span> </li>
            </ul>
        </div>

    </div>


    <script>
        function estadisticasGeneralCartas() {
            const jsonCartaCuarentaHoras = <?php echo json_encode($registroCartaCuarentaHoras) ?>;
            const jsonCartaCientoVeinteHoras = <?php echo json_encode($registroCartaCientoVeinteHoras) ?>;

            var Fecha_Desde = $('#Fecha_Desde_General').val();
            var Fecha_Hasta = $('#Fecha_Hasta_General').val();


            let cantCartaCuarentaHoras = jsonCartaCuarentaHoras.filter(function(type, index) {
                return type.cuarenta_Fecha >= Fecha_Desde && type.cuarenta_Fecha <= Fecha_Hasta
            });

            let cantCartaCientoVeinteHoras = jsonCartaCientoVeinteHoras.filter(function(type, index) {
                return type.cientoVeinte_Fecha >= Fecha_Desde && type.cientoVeinte_Fecha <= Fecha_Hasta
            });

            console.log(cantCartaCuarentaHoras);
        }
    </script>



    <div class="row m-3">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Cartas de Mantenimiento</h5>
                <div class="row m-3">
                    <div class="col-6">
                        <h6 class="card-subtitle mb-2 text-muted">Cartas de mantenimiento 40Hr</h6>
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
                                @foreach($registroCartaCuarentaHoras as $datoCU)
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
                        <h6 class="card-subtitle mb-2 text-muted">Cartas de mantenimiento 120Hr</h6>
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
                                @foreach($registroCartaCientoVeinteHoras as $datoCV)
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