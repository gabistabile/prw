<?php

    $hostname = "localhost";
    $port     = 3307;
    $username = "root";
    $password = "";
    $database = "projeto02";
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno()){
        printf("ERRO AO CONECTAR AO BANCO DE DADOS: %s\n", mysqli_connect_error());
        exit;
    }
?>