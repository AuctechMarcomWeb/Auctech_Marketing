<?php

    $servername = 'localhost';
    $username = 'u622085619_auctech_db';
    $password = 'Auctech@123';
    $database = "u622085619_auctech_db";

    $con = new mysqli($servername, $username, $password, $database);

    if($con->connect_error){
        die("connection failed : " .$con->connect_error);
    }
?>