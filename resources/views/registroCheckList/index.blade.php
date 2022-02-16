@extends('layouts.app')
@section('content')
<div class="container">
    <form id="generarReporteH" action="{{ url('/generarReporteHorometro/PDF') }}" target="_blank" method="post">
        @csrf
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
        <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

        <script type="70cf02be0b65b144043f4959-text/javascript">
            $(document).ready(function() {
                var table = $('#dataTableHorometros').DataTable({
                    pagingType: 'full_numbers',
                    pageLength: 10,
                    lengthMenu: [10, 15, 20, 100],
                    select: 'single',
                    "language": {
                        "search": "Buscar&nbsp;:",
                        "lengthMenu": "Mostrar _MENU_ Horómetros",
                        "zeroRecords": "Dato no encontrado",
                        "info": "Pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay Horómetros disponibles",
                        "infoFiltered": "(filtrado de _MAX_ Horómetros)",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "previous": "Anterior",
                            "next": "Siguiente"
                        },
                        select: {
                            rows: {
                                _: ""
                            }
                        }
                    }
                })

                $('#btToggleDisplay').on('click', function() {
                    $("#dataTableHorometros").toggleClass('cards')
                    $("#dataTableHorometros thead").toggle()
                })
            });
        </script>

        <style>
            .progress-bar span {

                color: black;
                background-color: white;
                font-weight: 700;
                border: 2px solid black;
                border-radius: 20%;
                margin: auto;
                padding-top: 2%;
                height: 60%;
                text-align: center;

            }
        </style>

        <table id="dataTableHorometros" class="table table-sm table-hover" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 10%;">Fecha</th>
                    <th style="width: 10%;">Turno</th>
                    <th style="width: 20%;">Horómetro Inicial</th>
                    <th style="width: 40%;">Cumplimiento</th>
                    <th style="width: 20%;">Reporte</th>
                </tr>
            </thead>
            <tbody id="addRow" class="addRow">
                @foreach($registroCheckListVehiculo as $checkList)
                <tr>
                    <td>
                        <?php
                        date_default_timezone_set("America/Mexico_City");
                        setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                        $data['Fecha'] = $checkList->checkListFecha;
                        $marca = strtotime($data['Fecha']);
                        ?>
                        <?= strftime('%e/%B/%Y', $marca) ?>
                    </td>
                    <td>
                        {{$checkList->checkListTurno}}
                    </td>
                    <td>
                        {{$checkList->checkListHorometro}}
                    </td>
                    <td>
                        <div class="progress" style="height: 2rem;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: green;">
                                <span>75%</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a style="width: 100%; font-size: 0.8vw;" href="{{ url('/generarReportePorServicio/PDF/'.$checkList->id) }}" target="_blank" class="btn btn-warning">
                            Generar Reporte
                            <i style="color: red;" class="fas fa-file-pdf" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>

@include('layouts.footer')
@endsection