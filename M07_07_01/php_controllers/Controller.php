<?php

session_start();

require_once('../php_librarys/bd.php');

if (isset($_POST['insertCadena'])) {
    insertCadenas($_POST['cif'], $_POST['nombre'], $_POST['dir_fis']);

    if (isset($_SESSION['error'])) {
        header('Location: ../cadena.php');
        exit();
    } else {
        header('Location: ../cadenas.php');
        exit();
    }
}

if (isset($_POST['deleteCadena'])) {

    deleteHoteles($_POST['id_ciudad'], $_POST['nombre']);

    if (isset($_SESSION['error'])) {
        header('Location: ../cadena.php');
        exit();
    } else {
        header('Location: ../cadenas.php');
        exit();
    }
}

if (isset($_POST['insertHotel'])) {
    insertHoteles($_POST['id_ciudad'], $_POST['nombre'], $_POST['categoria'], $_POST['direccion'], $_POST['cif']);

    if (isset($_SESSION['error'])) {
        header('Location: ../hotel.php');
        exit();
    } else {
        header('Location: ../hoteles.php');
        exit();
    }
}

if (isset($_POST['deleteHotel'])) {

    deleteHoteles($_POST['id_ciudad'], $_POST['nombre']);

    header('Location: ../hoteles.php');
    exit();
}



?>