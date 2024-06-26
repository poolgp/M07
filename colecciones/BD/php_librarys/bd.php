<?php

function openBD()
{
    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    $conexion = new PDO("mysql:host=$servername;dbname=colecciones", $username, $password);

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

    $sentenciaText = "SELECT * FROM colecciones.pais ORDER BY idPais;";

    $sentencia = $conexion->prepare("$sentenciaText");
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBD();

    return $resultado;
}

function insertCantante($idCantante, $nameCantante, $edadCantante, $paisCantante, $imgCantante)
{
    // try {
    $conexion = openBD();

    $rutaImg = "/M07/colecciones/img/";
    // $rutaImg = "/colecciones/img/";

    $fechaActual = date("Ymd_His");

    // $carpetaDestino=$_SERVER["DOCUMENT_ROOT"]."/oscarArriaza/media/imagenes/";

    $nombreArchivo = $fechaActual . "-" . $_FILES['imgCantante']['name'];
    $imgSubida = $rutaImg . $nombreArchivo;

    move_uploaded_file($_FILES['imgCantante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $imgSubida);

    $sentenciaText = "insert into colecciones.cantante (idCantante, nameCantante, edadCantante, paisCantante, imgCantante) values (:idCantante, :nameCantante, :edadCantante, :paisCantante, :imgCantante)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':idCantante', $idCantante);
    $sentencia->bindParam(':nameCantante', $nameCantante);
    $sentencia->bindParam(':edadCantante', $edadCantante);
    $sentencia->bindParam(':paisCantante', $paisCantante);
    $sentencia->bindParam(':imgCantante', $imgSubida);
    $sentencia->execute();

    $conexion = closeBD();
    // } catch (PDOException $einsertCantante) {
    //     $_SESSION['error'] = $einsertCantante->getCode() . ' - ' . $einsertCantante->getMessage();
    // }
}



function insertCancion($idCancion, $nameCancion, $cantName)
{
    $conexion = openBD();

    $sentenciaText =  "insert into colecciones.cancion (idCancion, nameCancion, cantName) values (:idCancion, :nameCancion, :cantName)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':idCancion', $idCancion);
    $sentencia->bindParam(':nameCancion', $nameCancion);
    $sentencia->bindParam(':cantName', $cantName);
    $sentencia->execute();

    $conexion = closeBD();
}

function selectCantantes()
{
    $conexion = openBD();

    $sentenciaText = "SELECT * FROM colecciones.cantante;";

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

        $sentenciaText = "SELECT cantante.idCantante, cantante.nameCantante,
        cantante.edadCantante, pais.namePais AS nombrePaisCantante, 
        cantante.imgCantante FROM colecciones.cantante INNER JOIN colecciones.pais 
        ON pais.idPais = cantante.paisCantante";

        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $conexion = closeBD();

        return $resultado;
    } catch (\Throwable $th) {
        return array();
    }
}

function jointCancion()
{
    try {
        $conexion = openBD();

        $sentenciaText = "SELECT cantante.idCantante, cantante.nameCantante, cancion.nameCancion
        FROM colecciones.cantante
        LEFT JOIN colecciones.cancion ON cantante.nameCantante = cancion.cantName";

        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $conexion = closeBD();

        return $resultado;
    } catch (\Throwable $th) {
        return array();
    }
}

function selectCanciones()
{
    $conexion = openBD();

    $sentenciaText = "SELECT * FROM colecciones.cancion;";

    $sentencia = $conexion->prepare("$sentenciaText");
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBD();

    return $resultado;
}

function eliminarCantante($idCantante)
{
    try {
        $conexion = openBD();

        $sentenciaText = "DELETE FROM colecciones.cantante WHERE idCantante = :idCantante";

        $sentencia = $conexion->prepare($sentenciaText);

        $sentencia->bindParam(':idCantante', $idCantante);

        $sentencia->execute();

        return true;
    } catch (PDOException $e) {
        return false;
    }
}
