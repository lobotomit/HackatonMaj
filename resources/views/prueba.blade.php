@include('functions.iesapi')

<?php
//$datos = myiesapi("268", "Select * from wifi");
//echo $datos => count;
//var_dump($datos->{'rows'});
//var_dump($datos->{'rows'}[0]);

$squr = myiesapi("271", 'Select COUNT(DISTINCT jornada) from calendariodeportivo where competicion = "COPA DE BALONCESTO"');
$i_control = (int)$squr->{'rows'}[0]->{'COUNT(DISTINCT jornada)'};
$datos = myiesapi("271", 'Select * from calendariodeportivo where competicion = "COPA DE BALONCESTO"');

for ($i = 1; $i <= $i_control; $i++) {
    echo $datos->{'rows'}[0]->{'fecha'};
    echo "";
}