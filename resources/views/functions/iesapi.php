
function myiesapi($arg_1, $arg_2,  $arg_n)
{



    $direc = "https://iescities.com:443/IESCities/api/data/query/";
    $direc .= $arg_1;
    echo $direc;
/*
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "https://iescities.com:443/IESCities/api/data/query/268/sql?origin=original",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "select * from wifi",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "postman-token: 1471daf9-329d-e9b4-b144-0383850f4769",
            "Content-Type: text/plain"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        //echo $response;
    }

    $datos = json_decode($response);
    var_dump(json_decode($response, true));
    return $valor_devuelto;
//var_dump($datos);
*/
}
