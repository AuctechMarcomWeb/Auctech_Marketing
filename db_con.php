<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = "auctech_marketing";

    $con = new mysqli($servername, $username, $password, $database);

    if($con->connect_error){
        die("connection failed : " .$con->connect_error);
    }
?>