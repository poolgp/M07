<?php

function openBD()
{
    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    $conexion = new PDO("mysql:host=$servername; dbname=colleccions", $username, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");

    return $conexion;
}

function closeBD()
{
    return null;
}

function selectCantant(){
    $conexion = openBD();

    $sentenciaText = "select * for cantant";

    $sentencia = $conexion->prepare("$sentenciaText");
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBD();

    return $resultado;
}

?>