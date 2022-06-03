<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'test_tubes';

    $con = mysqli_connect($host, $user, $pass, $database);
?>