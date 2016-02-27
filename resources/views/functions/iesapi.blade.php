    <?php
    function myiesapi($dataset, $sqlquery)
    {



        $direc = "https://iescities.com:443/IESCities/api/data/query/";
        $direc .= $dataset;
        $direc .= "/sql?origin=original";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => $direc,
                    //"https://iescities.com:443/IESCities/api/data/query/268/sql?origin=original",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $sqlquery,
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
        return $datos;
    //var_dump($datos);
    }
?>
