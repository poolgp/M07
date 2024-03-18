<?php
require_once('../BD/php_librarys/bd.php');
$nameCantantes = selectCantantes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cancion</title>

    <script src="https://kit.fontawesome.com/c7334dda94.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="../añadirCancion/añadirCancion.css">
    <script src="añadirCancion.js"></script>
</head>

<body>
    <header>
        <div class="LogoTitulo">
            <img class="LogoTituloimg" src="/M07/colecciones/LogoTitulo.png" />
        </div>
    </header>
    <section class="formCancion">
        <div class="card">
            <h5 class="card-header">Ficha de la canción</h5>
            <div class="card-body px-5">
                <form action="../BD/php_controllers/cancionController.php" method="POST">
                    <div class="mb-3 row">
                        <label for="nameCancion" class="col-sm-2 col-form-label">Nombre de la Canción: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputnameCancion" placeholder="Sangre y Fe" name="nameCancion"/>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nameArtista" class="col-sm-2 col-form-label">Nombre del Artista: </label>
                        <div class="col-sm-10">
                            <select name="cantName" id="nombreArtista1" required>
                                <?php foreach ($nameCantantes as $cantante) { ?>
                                    <option value="<?php echo $cantante['nameCantante']; ?>">
                                        <?php echo $cantante['nameCantante']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success" name="insertCancion">Success</button>
                    <button type="button" class="btn btn-danger"><a href="../home/index.php">Cancelar</a></button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>