<?php

    if(!isset($_SESSION)){
	    session_start();
    }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'test_tubes';

    $connect = mysqli_connect($host, $user, $pass, $database);

    if ($connect->connect_error){
        die("Koneksi gagal ".$connect->connect_error);
    }

?>