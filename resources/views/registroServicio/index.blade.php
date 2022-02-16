@extends('layouts.app')

@section('content')
<style>
    .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .content-table thead tr {
        background-color: #242424;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .content-table th,
    .content-table td {
        padding: 8px 15px;
    }

    .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .content-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    table.dataTable tbody>tr.selected,
    table.dataTable tbody>tr>.selected {
        background-color: #FF771F !important;
    }

    table.dataTable tbody tr.selected a,
    table.dataTable tbody th.selected a,
    table.dataTable tbody td.selected a {
        color: #000 !important;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
                    <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

                    <script type="70cf02be0b65b144043f4959-text/javascript">
                        $(document).ready(function() {
                            var table = $('#dataTableServicios').DataTable({
                                pagingType: 'full_numbers',
                                pageLength: 10,
                                lengthMenu: [10, 15, 20, 100],
                                select: 'single',
                                "language": {
                                    "search": "Buscar&nbsp;:",
                                    "lengthMenu": "Mostrar _MENU_ Órdenes de Servicios",
                                    "zeroRecords": "Orden no encontrada",
                                    "info": "Página _PAGE_ de _PAGES_",
                                    "infoEmpty": "No hay Órdenes de Servicios disponibles",
                                    "infoFiltered": "(filtrado de _MAX_ Órdenes de Servicios)",
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
                                $("#dataTableServicios").toggleClass('cards')
                                $("#dataTableServicios thead").toggle()
                            })
                        });
                    </script>

                    <table id="dataTableServicios" class="content-table" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="position: sticky; top: 0; width: 5%;">Folio</th>
                                <th style="position: sticky; top: 0; width: 10%;">Fecha</th>
                                <th style="position: sticky; top: 0; width: 25%;">Operador</th>
                                <th style="position: sticky; top: 0; width: 25%;">Encargado</th>
                                <!-- <th style="position: sticky; top: 0; width: 10%;">Empresa</th> -->
                                <th style="position: sticky; top: 0; width: 10%;">Turno</th>
                                <th style="position: sticky; top: 0; width: 10%;">Estado</th>
                                <th style="position: sticky; top: 0; width: 15%;">Reporte</th>
                            </tr>
                        </thead>
                        <p style="display:none;"> {{$contador=0}} </p>
                        <tbody>
                            @foreach($registroServicio as $registro)
                            @if($registro->id == $registro->idForanea)
                            <tr>
                                <td>{{$contador = $contador + 1}}</td>
                                <td>
                                    <?php
                                    date_default_timezone_set("America/Mexico_City");
                                    setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                                    $data['Fecha'] = $registro->fechaRegistro;
                                    $marca = strtotime($data['Fecha']);
                                    ?>
                                    <?= strftime('%e/%B/%Y', $marca) ?>
                                </td>
                                <td> {{$registro->nomOperador}} </td>
                                <td> {{$registro->encargado}} </td>
                                <!-- <td> {{$registro->empresa}} </td> -->
                                <td> {{$registro->turno}} </td>
                                <td>
                                    <div style="margin-bottom: -6%; text-align: center; width: 83%; padding: 4%; font-size: 0.8vw;" class="form-group col">
                                        @if($registro->horaSalida == '---')
                                        <a style="width: 83%; padding-left: 4%; font-size: 0.8vw;" href="{{ url('/servicio/'.$registro->idForanea.'/edit')}}" class="btn btn-danger">
                                            Cerrar
                                        </a>
                                        @endif
                                        @if($registro->horaSalida != '---')
                                        <div style="margin-bottom: -6%; text-align: center; width: 83%; padding: 4%; font-size: 0.8vw;" class="alert alert-success" role="alert">
                                            <strong> Terminado </strong>
                                        </div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div style="margin-left: 5%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                        <a style="width: 80%; font-size: 0.8vw;" href="{{ url('/generarReportePorServicio/PDF/'.$registro->fechaRegistro.'/'.$registro->turno.'/'.$registro->id) }}" target="_blank" class="btn btn-warning">
                                            Reporte
                                            <i style="color: red;" class="fas fa-file-pdf" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                                @endif
                                @endforeach
                        </tbody>
                    </table>
                    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection