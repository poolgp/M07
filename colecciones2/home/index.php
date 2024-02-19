<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cantante.com</title>

    <script src="https://kit.fontawesome.com/c7334dda94.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <style>
        body {
            background-color: #191414;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            width: 100%;
            text-align: center;
        }

        .botones {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            width: 100%;
            max-width: 800px;
        }

        .boton {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: #1ED760;
            border-radius: 30px;
            width: 100%;
            height: 100px;
            margin: 10px;
            padding: 10px;
            cursor: pointer;
        }

        .boton h3 {
            color: #fff;
            margin: 0 10px;
        }

        .boton a {
            display: block;
            width: 100%;
            height: 100%;
        }

        .boton .icono {
            margin-right: 10px;
            color: #fff;
        }
    </style>
    <script src="index.js"></script>
</head>

<header>
    <div class="LogoTitulo">
        <img class="LogoTituloimg" src="../LogoTitulo.png" />
    </div>
</header>

<body>
    <section class="botones">
        <a href="../añadirCantante/añadirCantante.php" class="text-decoration-none text-white boton">
            <i class="fa-solid fa-plus icono"></i>
            <h3>Añadir Cantante</h3>
        </a>

        <a href="../añadirCancion/añadirCancion.php" class="text-decoration-none text-white boton">
            <i class="fa-solid fa-plus icono"></i>
            <h3>Añadir Cancion</h3>
        </a>

        <a href="../lista/lista.php" class="text-decoration-none text-white boton">
            <i class="fa-solid fa-list-ul icono"></i>
            <h3>Mostrar Lista</h3>
        </a>
    </section>
</body>

</html>