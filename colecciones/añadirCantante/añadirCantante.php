<?php
require_once('../BD/php_librarys/bd.php');
$paisCantante = selectPaises();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cantante</title>

    <link rel="icon" type="image/png" href="../c.png">
    
    <script src="https://kit.fontawesome.com/c7334dda94.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="../añadirCantante/añadirCantante.css">
    <script src="index.js"></script>
</head>

<body>
    <header>
        <div class="LogoTitulo">
            <img class="LogoTituloimg" src="/M07/colecciones/LogoTitulo.png" />
        </div>
    </header>
    <section class="formCantante">
        <div class="card">
            <h5 class="card-header">Ficha del cantante</h5>
            <div class="card-body px-5">
                <form action="../BD/php_controllers/cantanteController.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="nameCancion" class="col-sm-2 col-form-label">Nombre del Cantante: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nameCantante" name="nameCantante" placeholder="Cruz Cafuné" required />
                        </div>
                    </div>

                    <div class=" mb-3 row">
                        <label for="edadCant" class="col-sm-2 col-form-label">Edad del Cantante: </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="edadCantante" name="edadCantante" required />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="NacionalidadArtista" class="col-sm-2 col-form-label">Nacionalidad: </label>
                        <div class="col-sm-10">
                            <select name="paisCantante" id="paisCantante" required>
                                <?php foreach ($paisCantante as $pais) { ?>
                                    <option value="<?php echo $pais['idPais']; ?>">
                                        <?php echo $pais['namePais']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="imgCantante" class="col-sm-2 col-form-label">Imagen:</label>
                        <input type="file" class="form-control" id="imgCantante" name="imgCantante" required />
                    </div>

                    <button type="submit" class="btn btn-success" name="insertCantante">Success</button>
                    <button type="button" class="btn btn-danger">
                        <a href="../home/index.php">Cancelar</a>
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>