<?php
require_once("../php_librarys/bd.php");
    if(isset($_POST["insertCantante"])){
        insertCantante($_POST['idCantante'], $_POST['nameCantante'], $_POST['edadCantante'], $_POST['paisCantante'], $_FILES['imgCantante']);

        // header('Location: /M07/colecciones/lista/lista.php');
        header('Location: ../../../../../M07/colecciones/lista/lista.php');
        exit();
    }
    // elseif(isset($_POST['delete'])){
    //     llamar funcion delete cantante
    // }
?>