<?php
require_once('../BD/php_librarys/bd.php');
$selectCant = selectCantantes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cantante.com</title>

    <script src="https://kit.fontawesome.com/c7334dda94.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <link rel="stylesheet" href="añadirCancion.css" />
</head>

<body>
    <div class="containerTitulo">
        <div class="title-container">
            <h1>Cantante.com / Canciones</h1>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="navbar-nav">
                        <li>
                            <a href="../canciones/canciones.php">
                                <span>Home</span>
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="card">
        <h5 class="card-header">Ficha de la canción</h5>
        <div class="card-body">
            <form action="../BD/php_controllers/añadirCantController.php" method="POST">
                <div class="mb-3 row">
                    <label for="nameCancion" class="col-sm-2 col-form-label">Nombre de la Canción: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputnameCancion" placeholder="Sangre y Fe" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nameAlbum" class="col-sm-2 col-form-label">Nombre del Álbum: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputnameAlbum" placeholder="Me Muevo Con Dios" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nameArtista" class="col-sm-2 col-form-label">Nombre del Artista: </label>
                    <div class="col-sm-10">
                        <select name="nameArtista" id="nombreArtista" required>
                            <?php foreach ($selectCant as $cant) { ?>
                                <option value="cantante">
                                    <?php echo $cant['nameCant']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                    <label class="form-check-label" for="flexSwitchCheckDefault">Colaboración</label>
                </div>

                <div id="artista2Container" class="mb-3 row" style="visibility: hidden">
                    <label for="nameArtista2" class="col-sm-2 col-form-label">Nombre del Artista: </label>
                    <div class="col-sm-10">
                        <select name="nameArtista" id="nombreArtista" required>
                            <?php foreach ($selectCant as $cant) { ?>
                                <option value="cantante">
                                    <?php echo $cant['nameCant']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class=" mb-3 row">
                    <label for="anioAlbum" class="col-sm-2 col-form-label">Año del Álbum: </label>
                    <div class="col-sm-10">
                        <select name="anioAlbum">
                            <script>
                                let currentYear = new Date().getFullYear();
                                for (let year = 1900; year <= currentYear; year++) {
                                    document.write('<Option value="' + year + '">' + year + '</option>');
                                }
                            </script>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="imgAlbum" class="col-sm-2 col-form-label">Imagen Álbum:</label>
                    <input type="file" class="form-control" id="imgCanc" name="imgCantc" required />
                </div>

                <button type="submit" class="btn btn-success" name="insertCanc">Success</button>
            </form>
        </div>
    </div>

    <script src="añadirCancion.js"></script>
</body>

</html>