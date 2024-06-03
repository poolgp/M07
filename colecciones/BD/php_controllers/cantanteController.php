<?php
require_once("../php_librarys/bd.php");

if (isset($_POST["insertCantante"])) {
    insertCantante($_POST['idCantante'], $_POST['nameCantante'], $_POST['edadCantante'], $_POST['paisCantante'], $_FILES['imgCantante']);

    header('Location: ../../lista/lista.php');
    exit();
}

// Verifica si se ha enviado el formulario para eliminar un cantante
elseif (isset($_POST['editar'])) {
    // Verifica si se proporcionó un ID de cantante válido
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Obtén el ID del cantante desde el formulario
        $idCantante = $_POST['id'];

        // Llama a la función para eliminar el cantante
        eliminarCantante($idCantante);

        // Redirecciona a la página de lista de cantantes después de eliminar
        header("Location: ../../añadirCantante/añadirCantante.php");
        exit();
    } else {
        // Si no se proporcionó un ID válido, redirecciona a una página de error
        header("Location: ../../lista/lista.php");
        exit();
    }
}

// Verifica si se ha enviado el formulario para eliminar un cantante
elseif (isset($_POST['eliminar'])) {
    // Verifica si se proporcionó un ID de cantante válido
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Obtén el ID del cantante desde el formulario
        $idCantante = $_POST['id'];

        // Llama a la función para eliminar el cantante
        eliminarCantante($idCantante);

        // Redirecciona a la página de lista de cantantes después de eliminar
        header("Location: ../../lista/lista.php");
        exit();
    } else {
        // Si no se proporcionó un ID válido, redirecciona a una página de error
        header("Location: ../../lista/lista.php");
        exit();
    }
}
