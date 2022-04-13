<form id="generarServicioContratistas" action="{{ url('/generarReporteContratistasFechas/CSV') }}" target="_blank" method="post">
    @csrf
    <div class="row m-3">
        <div class="col">
            <label for="Fecha_Form">Desde: </label>
            <input onchange="generarGrafico();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Desde" id="Fecha_Desde">
        </div>
        <div class="col">
            <label for="Fecha_Form">Hasta: </label>
            <input onchange="generarGrafico();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Hasta" id="Fecha_Hasta">
        </div>
        <div class="col">
            <label for="Ciclo_Servicio">Servicio: </label>
            <select onchange="generarGrafico();" class="form-select" aria-label="Default select example" name="Ciclo_Servicio" id="Ciclo_Servicio" required>
                <option selected>Seleccione Servicio</option>
                <option value="Entrada">Entrada</option>
                <option value="Salida">Salida</option>
                <option value="Ciclo completo">Ciclo completo</option>
            </select>
        </div>
        <div class="col">
            <br>
            <button form="generarServicioContratistas" style="width: 100%; font-size: 0.8vw; font-weight: 400; font-size: 1rem; color: white; background-color: #292C2F;" class="btn btn-warning">
                Exportar
                <i style="color: white;" class="fas fa-file-pdf" aria-hidden="true"></i>
            </button>
        </div>
        <div class="col">
            <!-- <br>
            <button form="generarServicioContratistas" style="width: 100%; font-size: 0.8vw; font-weight: 400; font-size: 1rem; color: white; background-color: #002973;" class="btn btn-info">
                Ver informacion general
                <i style="color: white;" class="fas fa-exclamation-circle" aria-hidden="true"></i>
            </button> -->
        </div>
    </div>
</form>
<script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>

<!-- Styles -->
<style>
    #chartdivEntrada {
        width: 100%;
        height: 600px;
    }

    #chartdivSalida {
        width: 100%;
        height: 600px;
    }
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
    function generarGrafico() {
        document.getElementById('chartdivEntrada').innerHTML = "";

        var Ciclo_Servicio = $('#Ciclo_Servicio').val();
        
        if (Ciclo_Servicio == 'Entrada') {
            graficoEntrada();
        }

        if (Ciclo_Servicio == 'Salida') {
            graficoSalida();
        }

        if (Ciclo_Servicio == 'Ciclo completo') {
            graficoCicloCompleto();
        }
    }

    const jsonServicioEntradaTopo = <?php echo json_encode($registroServicioEntradaTopo) ?>;
    const jsonServicioEntradaFercons = <?php echo json_encode($registroServicioEntradaFercons) ?>;
    const jsonServicioEntradaFresnillo = <?php echo json_encode($registroServicioEntradaFresnillo) ?>;
    const jsonServicioEntradaCoymsa = <?php echo json_encode($registroServicioEntradaCoymsa) ?>;
    const jsonServicioEntradaClm = <?php echo json_encode($registroServicioEntradaClm) ?>;
    const jsonServicioEntradaTti = <?php echo json_encode($registroServicioEntradaTti) ?>;
    const jsonServicioEntradaOmytc = <?php echo json_encode($registroServicioEntradaOmytc) ?>;
    const jsonServicioEntradaOssa = <?php echo json_encode($registroServicioEntradaOssa) ?>;

    const jsonServicioSalidaTopo = <?php echo json_encode($registroServicioSalidaTopo) ?>;
    const jsonServicioSalidaFercons = <?php echo json_encode($registroServicioSalidaFercons) ?>;
    const jsonServicioSalidaFresnillo = <?php echo json_encode($registroServicioSalidaFresnillo) ?>;
    const jsonServicioSalidaCoymsa = <?php echo json_encode($registroServicioSalidaCoymsa) ?>;
    const jsonServicioSalidaClm = <?php echo json_encode($registroServicioSalidaClm) ?>;
    const jsonServicioSalidaTti = <?php echo json_encode($registroServicioSalidaTti) ?>;
    const jsonServicioSalidaOmytc = <?php echo json_encode($registroServicioSalidaOmytc) ?>;
    const jsonServicioSalidaOssa = <?php echo json_encode($registroServicioSalidaOssa) ?>;





    function graficoEntrada() {
        var Fecha_Desde = $('#Fecha_Desde').val();
        var Fecha_Hasta = $('#Fecha_Hasta').val();

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

        var total_Topo = cantEntradaTopo.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Fercons = cantEntradaFercons.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Fresnillo = cantEntradaFresnillo.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Coymsa = cantEntradaCoymsa.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Clm = cantEntradaClm.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Tti = cantEntradaTti.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Omytc = cantEntradaOmytc.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Ossa = cantEntradaOssa.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);

        graficoServicioContratista(total_Topo, total_Fercons, total_Fresnillo, total_Coymsa, total_Clm, total_Tti, total_Omytc, total_Ossa);
    }

    function graficoSalida() {
        var Fecha_Desde = $('#Fecha_Desde').val();
        var Fecha_Hasta = $('#Fecha_Hasta').val();

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


        var total_Topo = cantSalidaTopo.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Fercons = cantSalidaFercons.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Fresnillo = cantSalidaFresnillo.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Coymsa = cantSalidaCoymsa.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Clm = cantSalidaClm.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Tti = cantSalidaTti.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Omytc = cantSalidaOmytc.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Ossa = cantSalidaOssa.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);

        graficoServicioContratista(total_Topo, total_Fercons, total_Fresnillo, total_Coymsa, total_Clm, total_Tti, total_Omytc, total_Ossa);
    }

    function graficoCicloCompleto() {
        var Fecha_Desde = $('#Fecha_Desde').val();
        var Fecha_Hasta = $('#Fecha_Hasta').val();

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

        graficoServicioContratista(total_Topo, total_Fercons, total_Fresnillo, total_Coymsa, total_Clm, total_Tti, total_Omytc, total_Ossa);
    }

    function graficoServicioContratista(total_Topo, total_Fercons, total_Fresnillo, total_Coymsa, total_Clm, total_Tti, total_Omytc, total_Ossa) {

        am5.ready(function() {
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element

            var root = am5.Root.new("chartdivEntrada");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            var data = [
                {
                    name: "CLM",
                    steps: total_Clm,
                    pictureSettings: {
                        src: "/img/phoebe.jpg"
                    }
                },
                {
                    name: "TTI",
                    steps: total_Tti,
                    pictureSettings: {
                        src: "/img/phoebe.jpg"
                    }
                },
                {
                    name: "Ossa",
                    steps: total_Ossa,
                    pictureSettings: {
                        src: "/img/phoebe.jpg"
                    }
                },
                {
                    name: "Fercons",
                    steps: total_Fercons,
                    pictureSettings: {
                        src: "/img/phoebe.jpg"
                    }
                },
                {
                    name: "Fresnillo",
                    steps: total_Fresnillo,
                    pictureSettings: {
                        src: "/img/phoebe.jpg"
                    }
                },
                {
                    name: "Omytc",
                    steps: total_Omytc,
                    pictureSettings: {
                        src: "/img/phoebe.jpg"
                    }
                },
                {
                    name: "Coymsa",
                    steps: total_Coymsa,
                    pictureSettings: {
                        src: "/img/phoebe.jpg"
                    }
                },
                {
                    name: "Topo",
                    steps: total_Topo,
                    pictureSettings: {
                        src: "/img/happyUser.JPG"
                    }
                }
            ];

            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(
                am5xy.XYChart.new(root, {
                    panX: false,
                    panY: false,
                    wheelX: "none",
                    wheelY: "none",
                    paddingLeft: 50,
                    paddingRight: 40
                })
            );

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/

            var yRenderer = am5xy.AxisRendererY.new(root, {});
            yRenderer.grid.template.set("visible", false);

            var yAxis = chart.yAxes.push(
                am5xy.CategoryAxis.new(root, {
                    categoryField: "name",
                    renderer: yRenderer,
                    paddingRight: 40
                })
            );

            var xRenderer = am5xy.AxisRendererX.new(root, {});
            xRenderer.grid.template.set("strokeDasharray", [3]);

            var xAxis = chart.xAxes.push(
                am5xy.ValueAxis.new(root, {
                    min: 0,
                    renderer: xRenderer
                })
            );

            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(
                am5xy.ColumnSeries.new(root, {
                    name: "Income",
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueXField: "steps",
                    categoryYField: "name",
                    sequencedInterpolation: true,
                    calculateAggregates: true,
                    maskBullets: false,
                    tooltip: am5.Tooltip.new(root, {
                        dy: -30,
                        pointerOrientation: "vertical",
                        labelText: "{valueX}"
                    })
                })
            );

            series.columns.template.setAll({
                strokeOpacity: 0,
                cornerRadiusBR: 10,
                cornerRadiusTR: 10,
                cornerRadiusBL: 10,
                cornerRadiusTL: 10,
                maxHeight: 50,
                fillOpacity: 0.8
            });

            var currentlyHovered;

            series.columns.template.events.on("pointerover", function(e) {
                handleHover(e.target.dataItem);
            });

            series.columns.template.events.on("pointerout", function(e) {
                handleOut();
            });

            function handleHover(dataItem) {
                if (dataItem && currentlyHovered != dataItem) {
                    handleOut();
                    currentlyHovered = dataItem;
                    var bullet = dataItem.bullets[0];
                    bullet.animate({
                        key: "locationX",
                        to: 1,
                        duration: 600,
                        easing: am5.ease.out(am5.ease.cubic)
                    });
                }
            }

            function handleOut() {
                if (currentlyHovered) {
                    var bullet = currentlyHovered.bullets[0];
                    bullet.animate({
                        key: "locationX",
                        to: 0,
                        duration: 600,
                        easing: am5.ease.out(am5.ease.cubic)
                    });
                }
            }


            var circleTemplate = am5.Template.new({});

            series.bullets.push(function(root, series, dataItem) {
                var bulletContainer = am5.Container.new(root, {});
                var circle = bulletContainer.children.push(
                    am5.Circle.new(
                        root, {
                            radius: 34
                        },
                        circleTemplate
                    )
                );

                var maskCircle = bulletContainer.children.push(
                    am5.Circle.new(root, {
                        radius: 27
                    })
                );

                // only containers can be masked, so we add image to another container
                var imageContainer = bulletContainer.children.push(
                    am5.Container.new(root, {
                        mask: maskCircle
                    })
                );

                // not working
                var image = imageContainer.children.push(
                    am5.Picture.new(root, {
                        templateField: "pictureSettings",
                        centerX: am5.p50,
                        centerY: am5.p50,
                        width: 60,
                        height: 60
                    })
                );

                return am5.Bullet.new(root, {
                    locationX: 0,
                    sprite: bulletContainer
                });
            });

            // heatrule
            series.set("heatRules", [{
                    dataField: "valueX",
                    min: am5.color(0xe5dc36),
                    max: am5.color(0x5faa46),
                    target: series.columns.template,
                    key: "fill"
                },
                {
                    dataField: "valueX",
                    min: am5.color(0xe5dc36),
                    max: am5.color(0x5faa46),
                    target: circleTemplate,
                    key: "fill"
                }
            ]);

            series.data.setAll(data);
            yAxis.data.setAll(data);

            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
            cursor.lineX.set("visible", false);
            cursor.lineY.set("visible", false);

            cursor.events.on("cursormoved", function() {
                var dataItem = series.get("tooltip").dataItem;
                if (dataItem) {
                    handleHover(dataItem)
                } else {
                    handleOut();
                }
            })

            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear();
            chart.appear(1000, 100);

        }); // end am5.ready()
    }
</script>

<!-- HTML -->
<div id="chartdivEntrada"></div>