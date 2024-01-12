<?php
session_start();

require_once('../php_librarys/bd.php');

if (isset($_POST['insertCant'])) {
    insertCantante($_POST['id_Cantante'], $_POST['nameCant'], $_POST['edadCant'], $_POST['paisCant'], $_FILES['imgCant']);

    if (isset($_SESSION['error'])) {
        header('Location: ../../../../../Col·leccions/añadirCantante/añadirCantante.php');
        exit();
    } else {
        header('Location: ../.././../../../Col·leccions/cantantes/cantantes.php');
        exit();
    }
}
// elseif(isset($_POST['deleteCant'])){
//     insertCantante($_POST['id_Cantante'], $_POST['nameCant'], $_POST['edadCant'], $_POST['paisCant'], $_POST['imgCant']);

//     header('Location: ../../../../añadirCantante/añadirCantante.php');
//     exit();
// }