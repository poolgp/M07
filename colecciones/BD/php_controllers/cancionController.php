<?php
require_once("../php_librarys/bd.php");
    if(isset($_POST["insertCancion"])){
        insertCancion($_POST['idCancion'], $_POST['nameCancion'], $_POST['cantName']);

        // header('Location: /M07/colecciones/lista/lista.php');
        header('Location: ../../../../../M07/colecciones/lista/lista.php');
        exit();
    }
    // elseif(isset($_POST['delete'])){
    //     llamar funcion delete cantante
    // }
?>