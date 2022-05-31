<?php
session_start();

/*
*Este archivo solo tiene como mision subir una imagen
*
*/

$email = $_SESSION['email'];

if(isset($_POST["subirImagen"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'administrador';
        $dbPassword = '123456';
        $dbName     = 'adoptatupet';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
    
        
        //Insert image content into database
        $insert = $db->query("UPDATE usuario SET fotoPerfil = '$imgContent' WHERE email = '$email'");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../views/perfil.php" method="POST">

    </form>

    <script>

        window.onload = function (){

            document.forms[0].submit();
        }

    </script>
</body>
</html>
