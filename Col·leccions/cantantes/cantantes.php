<?php
require_once('../BD/php_librarys/bd.php');
$cardCant = selectCantantes();
?>

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

    <link rel="stylesheet" href="cantantes.css">
</head>

<body>
    <div class="containerTitulo">
        <div class="title-container">
            <h1>Cantante.com / Cantantes</h1>
        </div>
        <div class="button-container">
            <a href="../canciones/canciones.php">
                <button class="btn btn-outline-success">Ir a Canciones</button>
            </a>
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
                            <a href="../añadirCantante/añadirCantante.php">
                                <span>Añadir</span>
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Modificar</span>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Eliminar</span>
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Ordenar</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Título</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Artista</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Álbum</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="container-fluid">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php foreach ($cardCant as $card) { ?>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $card['imgCant'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $card['nameCant'] ?>
                            </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <?php echo $card['edadCant'] ?>
                            </li>
                            <?php
                            $paises = jointPais();
                            foreach ($paises as $pais) {
                                if ($pais['id_Cantante'] == $card['id_Cantante']) {
                                    echo '<li class="list-group-item">' . $pais['nombrePaisCantante'] . '</li>';
                                    break;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- <div class="containerCartas">
        <div><p>asf</p></div>
    </div> -->


</body>

</html>



<?php foreach ($cardCant as $index => $card) { ?>
    <?php if ($index % 4 == 0) { ?>
        <!-- Inicia una nueva fila después de cada 4 cantantes -->
        <div class="row mb-3">
    <?php } ?>

    <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $card['imgCant'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $card['nameCant'] ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $card['edadCant'] ?></li>
                <?php
                $paises = jointPais();
                foreach ($paises as $pais) {
                    if ($pais['id_Cantante'] == $card['id_Cantante']) {
                        echo '<li class="list-group-item">' . $pais['nombrePaisCantante'] . '</li>';
                        break;
                    }
                }
                ?>
            </ul>
        </div>
    </div>

    <?php if (($index + 1) % 4 == 0 || ($index + 1) == count($cardCant)) { ?>
        <!-- Cierra la fila después de cada 4 cantantes o al final del bucle -->
        </div>
    <?php } ?>
<?php } ?>
