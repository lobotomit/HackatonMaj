@extends('layouts.app')
@section('title', 'Hackaton')

@section('content')
@include('functions.iesapi')
<?php

$squr = myiesapi("271", 'Select COUNT(DISTINCT jornada) from calendariodeportivo where competicion = "COPA DE BALONCESTO"');
$i_control = (int)$squr->{'rows'}[0]->{'COUNT(DISTINCT jornada)'};
$datos = myiesapi("271", 'Select * from calendariodeportivo where competicion = "COPA DE BALONCESTO"');
?>
    <div class="cuerpo"  align="center">
        <div class="panel-body">
            <table class="table table-striped task-table">
                <caption>
                    Calendario:
                </caption>
                <thead>
                <tr>
                    <th>Jornada</th>
                    <th>Fecha</th>
                    <th>equipo 1</th>
                    <th>equipo 2</th>
                    <th>recinto</th>
                </tr>
                </thead>
                <tfood></tfood>
                <tbody>
                <!--inicio for-->
                <?php
                for ($i = 1; $i <= $i_control; $i++) {
                    echo "<tr>";
                    //variables
                    //fecha
                    echo "<td>";
                    echo $datos->{'rows'}[$i]->{'fecha'};
                    echo "</td>";
                    //hora
                    echo "<td>";
                    echo $datos->{'rows'}[$i]->{'hora'};
                    echo "</td>";
                    //equipo1
                    echo "<td>";
                    echo $datos->{'rows'}[$i]->{'equipolocal'};
                    echo "</td>";
                    //equipo2
                    echo "<td>";
                    echo $datos->{'rows'}[$i]->{'equipovisitante'};
                    echo "</td>";
                    //recinto.
                    echo "<td>";
                    echo $datos->{'rows'}[$i]->{'recinto'};
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>

            </table>
        </div>
    </div>
    <div class="breadcrumb" id="ba_sup"></div>
@endsection
@section('scripts')
    @include('layouts.scripts')
@endsection