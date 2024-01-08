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

    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
</head>

<body>
    <div class="containerTitulo">
        <h1>Cantante.com</h1>
    </div>

    <div class="containerC">
        <div class="containerCancion" id="containerCancion" onclick="toggleVisibility('containerD2')">
            <a href="../canciones/canciones.php">
                <h3>CANCIONES</h3>
            </a>
        </div>

        <div class="containerCantante" id="containerCantante" onclick="toggleVisibility('containerD2')">
            <a href="../cantantes/cantantes.php">
                <h3>CANTANTES</h3>
            </a>
        </div>
    </div>

</body>

</html>