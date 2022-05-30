<?php

/*
* Clase API donde esta toda la configuración de la API FACTS CATS
*
/*

class API{

    public static function APIFacts(){

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://catfact.ninja/fact',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'accept: application/json',
        'X-CSRF-TOKEN: gks8v4tBt9sVXRWba655qchpHmQXwrrs6auqAoOM'
    ),
    ));

    $response = curl_exec($curl);
    $fact = json_decode($response, true);

    return $fact["fact"];
    }
}

?>
