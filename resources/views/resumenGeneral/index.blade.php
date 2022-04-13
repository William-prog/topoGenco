@extends('layouts.app')
@section('content')
<div class="container">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.1.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>


    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>
                            <h3> <i class="fas fa-exclamation-circle fa-2x"></i> Información General </h3>
                        </strong>
                    </button>
                </div>
                <!-- <div class="form-group col">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong>
                            <h3> <i class="fas fa-hard-hat fa-2x"></i> Servicios </h3>
                        </strong>
                    </button>
                </div> -->
                <div class="form-group col">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>
                            <h3> <i class="fas fa-stopwatch fa-2x"></i> Horómetros </h3>
                        </strong>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionExample">
        <!-- <div class="accordion-item">
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                
            </div>
        </div> -->
        <div class="accordion-item">
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                @include('resumenGeneral.estadisticasHorometros')
            </div>
        </div>
        <div class="accordion-item">
            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                @include('resumenGeneral.estadisticasInformacionGeneral')
            </div>
        </div>
    </div>

</div>

@include('layouts.footer')
@endsection