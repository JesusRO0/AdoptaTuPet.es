
<?php

        $id = $_GET['id'];
        require_once('apiKey.php');

        $link =  "https://api.pexels.com/v1/photos/".$id;

        $headers = array(
            'Authorization: ' . $key
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $img = json_decode($response, true);

        echo 'Foto titulada: '.$img['alt']. '.<br>Hecha por el increible y maravilloso fotografo: '.$img['photographer']. '.<br>El color que predonima en esta imagen, como se puede apreciar es: '. $img['avg_color'].'.';
    

