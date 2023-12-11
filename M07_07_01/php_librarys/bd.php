<?php

session_start();

function openBD()
{
  $servername = "localhost";
  $username = "root";
  $password = "mysql";

  $conexion = new PDO("mysql:host=$servername;dbname=hoteles_dwes", $username, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->exec("set names utf8");

  return $conexion;
}

function closeBD()
{
  return null;
}

function selectCadenas()
{
  $conexion = openBD();

  $sentenciaText = "select * from cadenas";

  $sentencia = $conexion->prepare($sentenciaText);
  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  $conexion = closeBD();

  return $resultado;
}

function insertCadenas($cif, $nombre, $dir_fis)
{
  try{
    $conexion = openBD();

    $sentenciaText = "insert into cadenas (cif, nombre, dir_fis) values (:cif, :nombre, :dir_fis)";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':cif', $cif);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':dir_fis', $dir_fis);

    $sentencia->execute();

    $conexion = closeBD();
  }
  catch(PDOException $e){
    $_SESSION['error']=  $e->getCode().' - ' . $e->getMessage();
  }  
}

function selectCiudades()
{
  $conexion = openBD();

  $sentenciaText = "select * from ciudades";

  $sentencia = $conexion->prepare($sentenciaText);
  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  $conexion = closeBD();

  return $resultado;
}

function selectHoteles()
{
  $conexion = openBD();

  $sentenciaText = "select * from hoteles";

  $sentencia = $conexion->prepare($sentenciaText);
  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  $conexion = closeBD();

  return $resultado;
}

function insertHoteles($id_ciudad, $nombre, $categoria, $direccion, $cif)
{
  try{
    $conexion = openBD();

    $sentenciaText = "insert into hoteles (id_ciudad,nombre,categoria,direccion, cif) values (:id_ciudad, :nombre, :categoria, :direccion, :cif)";
  
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':id_ciudad', $id_ciudad);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':categoria', $categoria);
    $sentencia->bindParam(':direccion', $direccion);
    $sentencia->bindParam(':cif', $cif);
    $sentencia->execute();
  
    $conexion = closeBD();
  }
  catch(PDOException $e){
    $_SESSION['error']=  $e->getCode().' - ' . $e->getMessage();
  } 
}

function deleteHoteles($id_ciudad, $nombre)
{
  $conexion = openBD();

  $sentenciaText = "DELETE from hoteles where id_ciudad = :id_ciudad and nombre = :nombre";

  $sentencia = $conexion->prepare($sentenciaText);
  $sentencia->bindParam(':id_ciudad', $id_ciudad);
  $sentencia->bindParam(':nombre', $nombre);
  $sentencia->execute();

  $conexion = closeBD();
}

?>