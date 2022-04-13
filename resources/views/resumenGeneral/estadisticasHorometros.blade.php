<div class="row m-3">
    <div class="col">
        <label for="Fecha_Form">Desde: </label>
        <input onchange="mostrarGraficoHorometro();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Desde_Horometro" id="Fecha_Desde_Horometro">
    </div>
    <div class="col">
        <label for="Fecha_Form">Hasta: </label>
        <input onchange="mostrarGraficoHorometro();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Hasta_Horometro" id="Fecha_Hasta_Horometro">
    </div>
</div>

<div>
    <canvas id="graficoHorometro"></canvas>
</div>

<script>
    var graficoHorometro = document.getElementById("graficoHorometro");
    window.chart = null;

    function mostrarGraficoHorometro() {
        if (window.chart) {
            window.chart.clear();
            window.chart.destroy();
        }

        var fecha_Desde_Entrada_Horometro = $('#Fecha_Desde_Horometro').val();
        var fecha_Hasta_Entrada_Horometro = $('#Fecha_Hasta_Horometro').val();

        if (fecha_Desde_Entrada_Horometro != '' && fecha_Hasta_Entrada_Horometro != '') {

            const jsonTopoHorometro = <?php echo json_encode($registroHorometro) ?>;

            let cantTopoEntradaHorometro = jsonTopoHorometro.filter(function(type, index) {
                return type.turnoHorometro == 'Primera' && type.fechaHorometro >= fecha_Desde_Entrada_Horometro && type.fechaHorometro <= fecha_Hasta_Entrada_Horometro
            });


            console.log(' - - - - - - - - - - -');
            console.log(cantTopoEntradaHorometro);

            let cantTopoSalidaHorometro = jsonTopoHorometro.filter(function(type, index) {
                return type.turnoHorometro == 'Segunda' && type.fechaHorometro >= fecha_Desde_Entrada_Horometro && type.fechaHorometro <= fecha_Hasta_Entrada_Horometro
            });

            console.log(' - - - - - - - - - - -');
            console.log(cantTopoSalidaHorometro);

            var HorometroEntrada = cantTopoEntradaHorometro.map(function(e) {
                if (e.fechaHorometro >= fecha_Desde_Entrada_Horometro && e.fechaHorometro <= fecha_Hasta_Entrada_Horometro) {
                    let valoresHorometroEntrada = (e.totalHorometro);
                    return valoresHorometroEntrada;
                }
            });

            console.log(' - - - - - - - - - - -');
            console.log(HorometroEntrada);

            var HorometroSalida = cantTopoSalidaHorometro.map(function(e) {
                if (e.fechaHorometro >= fecha_Desde_Entrada_Horometro && e.fechaHorometro <= fecha_Hasta_Entrada_Horometro) {
                    let valoresHorometroSalida = (e.totalHorometro);
                    return valoresHorometroSalida;
                }
            });

            console.log(' - - - - - - - - - - -');
            console.log(HorometroSalida);

            var labels = cantTopoEntradaHorometro.map(function(e) {
                moment.locale('es');
                let now = moment(e.fechaHorometro).format('LL');
                return now;
            });

            let labels_Limpios = labels.filter((item, index) => {
                return labels.indexOf(item) === index;
            });

            const HotometroFinal = [];

            for (var HorEntr in HorometroEntrada) {
                for (var HorSali in HorometroSalida) {
                    if (HorEntr == HorSali) {
                        var H_Entr = parseFloat(HorometroEntrada[HorEntr]);
                        var H_Sali = parseFloat(HorometroSalida[HorSali]);
                        var H_Tota = H_Entr + H_Sali;
                        HotometroFinal.push(H_Tota.toFixed(1));
                    }
                }
            }

            var topoHorometro = {
                label: ['Horometro Total'],
                data: HotometroFinal,
                backgroundColor: 'rgba(36, 36, 36, 0.8)',
                fill: false,
                borderColor: 'rgb(254, 119, 31)',
                tension: 0.1
            };

            var topoHorometroPrimera = {
                label: ['Turno Primera'],
                data: HorometroEntrada,
                backgroundColor: 'rgba(36, 36, 36, 0.8)',
                fill: false,
                borderColor: 'rgb(0, 0, 0)',
                tension: 0.1
            };

            var topoHorometroSegunda = {
                label: ['Turno Segunda'],
                data: HorometroSalida,
                backgroundColor: 'rgba(36, 36, 36, 0.8)',
                fill: false,
                borderColor: 'rgb(16, 100, 226)',
                tension: 0.1
            };

            var planetData = {
                labels: labels_Limpios,
                datasets: [topoHorometro, topoHorometroPrimera, topoHorometroSegunda]
            };

            var chartOptions = {
                scales: {
                    yAxes: [{
                        ticks: {
                            max: 10,
                            min: 0
                        }
                    }]
                },
                legend: {
                    boxWidth: 5,
                    display: true,
                    position: 'top',
                    labels: {
                        boxWidth: 140,
                        fontColor: 'black',
                    }
                },
                plugins: {
                    // Change options for ALL labels of THIS CHART
                    datalabels: {
                        align: 'end',
                        anchor: 'end',
                        color: '#000',

                        font: {
                            weight: 'bold'
                        },
                    },
                }
            };

            window.chart = new Chart(graficoHorometro, {
                type: 'line',
                data: planetData,
                options: chartOptions
            });
        }

    }
</script>