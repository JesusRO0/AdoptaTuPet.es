
<?php
        $cont = 0;
        $array = [];
        $query = $_GET['query'];
        $page = $_GET['page'];
        require_once('apiKey.php');
        $link =  "https://api.pexels.com/v1/search?query=".$query."&page=".$page; 

        $headers = array(
            'Authorization: ' . $key
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $img = json_decode($response, true);

        
        
        foreach ($img['photos'] as $element) {
            $myImg = $element['src']['large'];

            $array[$cont] = "<img class='clickable' src='".$myImg."' value='".$element['id']."' onclick='location.href=`foto.php?id=".$element['id']."`'>";

            $cont++;
        }
        
        for($i = 0; $i < 15; $i++){

            if($i == 5 || $i == 10 || $i == 15){
                echo "</div>";

            }

            if($i == 0 || $i == 5 || $i == 10){
                echo "<div class='col'>";
            }

                echo $array[$i];
        }