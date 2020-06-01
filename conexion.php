<?php

function conexion(){
    $servidor = "localhost";
    $usuario = "root";
    $bbdd = "crud_ajax_php";
    $password = "";
    $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
    return $conexion;
}