<?php

session_start();

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

function selectPaises()
{
    $conexion = openBD();

    $sentenciaText = "select * from colleccions.paises order by id_Pais;";

    $sentencia = $conexion->prepare("$sentenciaText");
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBD();

    return $resultado;
}

function insertCantante($id_Cantante, $nameCant, $edadCant, $paisCant, $imgCant)
{
    try {
        $conexion = openBD();

        $sentenciaText = "insert into colleccions.cantantes (id_Cantante, nameCant, edadCant, paisCant, imgCant) values (:id_Cantante, :nameCant, :edadCant, :paisCant, :imgCant)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':id_Cantante', $id_Cantante);
        $sentencia->bindParam(':nameCant', $nameCant);
        $sentencia->bindParam(':edadCant', $edadCant);
        $sentencia->bindParam(':paisCant', $paisCant);
        $sentencia->bindParam(':imgCant', $imgCant);
        $sentencia->execute();

        $conexion = closeBD();
    } catch (PDOException $einsertCantante) {
        $_SESSION['error'] = $einsertCantante->getCode() . ' - ' . $einsertCantante->getMessage();
    }
}

// catch (PDOException $einsertCantante) {
//         $_SESSION['errorinsertCantante'] = $einsertCantante->getCode() . ' - ' . $einsertCantante->getMessage();

function selectCantantes()
{
    $conexion = openBD();

    $sentenciaText = "select * from colleccions.cantantes;";

    $sentencia = $conexion->prepare("$sentenciaText");
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBD();

    return $resultado;
}

function insertCancion($id_Cancion, $nameCanc, $albumCanc, $paisCant, $imgCant)
{
    try {
        $conexion = openBD();

        $sentenciaText = "insert into colleccions.cantantes (id_Cantante, nameCant, edadCant, paisCant, imgCant) values (:id_Cantante, :nameCant, :edadCant, :paisCant, :imgCant)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':id_Cantante', $id_Cantante);
        $sentencia->bindParam(':nameCant', $nameCant);
        $sentencia->bindParam(':edadCant', $edadCant);
        $sentencia->bindParam(':paisCant', $paisCant);
        $sentencia->bindParam(':imgCant', $imgCant);
        $sentencia->execute();

        $conexion = closeBD();
    } catch (PDOException $einsertCantante) {
        $_SESSION['error'] = $einsertCantante->getCode() . ' - ' . $einsertCantante->getMessage();
    }
}