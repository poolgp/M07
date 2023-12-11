<?php
require_once("./php_librarys/bd.php");

$ciudades = selectCiudades();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./cadenas.php">Cadenas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./ciudades.php">Ciudades</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./hoteles.php">Hoteles</a>
        </li>
    </ul>

    <div class="container">
        <div class="card mt-2">
            <div class="card-header bg-secondary text-white">
                Ciudades
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Identificador</th>
                        <th>Nombre</th>
                    </tr>
                    <?php foreach ($ciudades as $ciudad) { ?>
                        <tr>
                            <td>
                                <?php echo $ciudad['id_ciudad']; ?>
                            </td>
                            <td>
                                <?php echo $ciudad['nombre']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

        <button type="button" class="btn btn-secondary text-white">
            <a href="./ciudad.php" class="text-white" style="text-decoration: none;">Añadir Ciudad</a>
        </button>
        <button type="button" class="btn btn-secondary text-white">
            <a href="./deleteCiudad.php" class="text-white" style="text-decoration: none;">Eliminar Hotel</a>
        </button>
</body>

</html>