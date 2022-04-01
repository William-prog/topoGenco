@extends('layouts.app')

@section('content')
<div class="container py-5">

    <style>
        .cardManteniemito:hover {
            background-color: #3D3D3D;
            -webkit-transition: background-color 500ms linear;
            -ms-transition: background-color 500ms linear;
            transition: background-color 500ms linear;

            border: 4 px solid rgba(255, 119, 31, 80%);

            color: white;
        }
    </style>

    <div class="row">
        <!-- For demo purpose -->
        <div class="col-lg-12 mx-auto mb-5 text-black text-center">
            <h1 class="display-4">Mantenimientos Preventivos</h1>
        </div>
        <!-- END -->

        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">50 Horas</h2>

                @php
                $sumaCincuentaHoras=0;
                @endphp
                @foreach($horometroHorometroCincuenta as $horometroacumulado)
                @php
                $sumaCincuentaHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <!-- Progress bar 1 -->
                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaCincuentaHoras * 100) / 50) }} ; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaCincuentaHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(50 - $sumaCincuentaHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">120 Horas</h2>

                @php
                $sumaCienHoras=0;
                @endphp
                @foreach($horometroHorometroCien as $horometroacumulado)
                @php
                $sumaCienHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <!-- Progress bar 2 -->
                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaCienHoras * 100) / 100) }} ; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info-->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaCienHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(100 - $sumaCienHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">1000 Horas</h2>

                <!-- Progress bar 3 -->
                @php
                $sumaCientoCincuentaHoras=0;
                @endphp
                @foreach($horometroHorometroCientoCincuenta as $horometroacumulado)
                @php
                $sumaCientoCincuentaHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaCientoCincuentaHoras * 100) / 150) }}; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaCientoCincuentaHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(150 - $sumaCientoCincuentaHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">2000 Horas</h2>

                <!-- Progress bar 4 -->
                @php
                $sumaQuinientasHoras=0;
                @endphp
                @foreach($horometroHorometroQuinientos as $horometroacumulado)
                @php
                $sumaQuinientasHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaQuinientasHoras * 100) / 500) }}; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaQuinientasHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(500 - $sumaQuinientasHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection