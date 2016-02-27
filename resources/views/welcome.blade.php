<?php
$url =  "http://url-de-la-peticion.com";
$valor1 = "hola";
$valor2 = "adiós";
//-----------------------------------------------------------------------------------------//
$parametros_post = 'parametro1='.urlencode($valor1).'&parametro2='.urlencode($valor2);
//-----------------------------------------------------------------------------------------//
$sesion = curl_init($url);
// definir tipo de petición a realizar: POST
curl_setopt ($sesion, CURLOPT_POST, true);
// Le pasamos los parámetros definidos anteriormente
curl_setopt ($sesion, CURLOPT_POSTFIELDS, $parametros_post);
// sólo queremos que nos devuelva la respuesta
curl_setopt($sesion, CURLOPT_HEADER, false);
curl_setopt($sesion, CURLOPT_RETURNTRANSFER, true);
// ejecutamos la petición
$respuesta = curl_exec($sesion);
// cerramos conexión
curl_close($sesion);
var_dump($respuesta);
?>