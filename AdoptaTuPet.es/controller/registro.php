
<?php

    require_once('crud.php');

        $pass = $_GET['pass'];
        $email = $_GET['email'];
        $name = $_GET['name'];

    creaUser($name, $email, $pass); 

    

