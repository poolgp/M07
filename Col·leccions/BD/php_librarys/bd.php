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

        $rutaImg = "/Col·leccions/img/imgCant/";
        // $imagen = "../../img/imgCant/" . $_FILES['imgCant']['name'];

        $fechaActual = date("Ymd_His");

        $nombreArchivo = $fechaActual . "-" . $_FILES['imgCant']['name'];
        $imgSubida = $rutaImg . $nombreArchivo;

        move_uploaded_file($_FILES['imgCant']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $imgSubida);

        $sentenciaText = "insert into colleccions.cantantes (id_Cantante, nameCant, edadCant, paisCant, imgCant) values (:id_Cantante, :nameCant, :edadCant, :paisCant, :imgCant)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':id_Cantante', $id_Cantante);
        $sentencia->bindParam(':nameCant', $nameCant);
        $sentencia->bindParam(':edadCant', $edadCant);
        $sentencia->bindParam(':paisCant', $paisCant);
        $sentencia->bindParam(':imgCant', $imgSubida);
        $sentencia->execute();

        $conexion = closeBD();
    } catch (PDOException $einsertCantante) {
        $_SESSION['error'] = $einsertCantante->getCode() . ' - ' . $einsertCantante->getMessage();
    }
}

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

function jointPais()
{
    try {
        $conexion = openBD();

        $sentenciaText = "SELECT cantantes.id_Cantante, cantantes.nameCant, cantantes.edadCant, paises.nombrePais as nombrePaisCantante, cantantes.imgCant
                            FROM colleccions.cantantes
                            INNER JOIN colleccions.paises ON paises.id_Pais = cantantes.paisCant;";

        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $conexion = closeBD();

        return $resultado;
    } catch (\Throwable $th) {
        return array();
    }
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