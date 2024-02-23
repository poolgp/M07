<?php
require_once("/M07/colecciones/BD/php_librarys/bd.php");
    if(isset($_POST["insertCancion"])){
        insertCantante($_POST['idCancion'], $_POST['nameCantante'], $_POST['nameCancion'], $_POST['cantName1'], $_POST['cantName2']);

        header('Location: /M07/colecciones/lista/lista.php');
        // header('Location: ../../../../../M07/colecciones/lista/lista.php');
        exit();
    }
    // elseif(isset($_POST['delete'])){
    //     llamar funcion delete cantante
    // }
?>