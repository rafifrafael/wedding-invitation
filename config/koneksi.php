<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'wedding';
    
    $connection = mysqli_connect($host, $username, $password, $database);
    
    if (!$connection) {
        die('Connection error: ' . mysqli_connect_error());
    }    
?>