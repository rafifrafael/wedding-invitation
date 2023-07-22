<?php 
    $host = 'bzj67czgo2m9edugdi2e-mysql.services.clever-cloud.com';
    $username = 'ux3danhhdntu9f7a';
    $password = 'iLkqBIxpvUdxDQIm9gMr';
    $database = 'bzj67czgo2m9edugdi2e';
    
    $connection = mysqli_connect($host, $username, $password, $database);
    
    if (!$connection) {
        die('Connection error: ' . mysqli_connect_error());
    }    
?>