<?php
require_once('../BD/php_librarys/bd.php');
$cardCant = selectCantantes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de canciones</title>

    <script src="https://kit.fontawesome.com/c7334dda94.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="lista.css">
    <script src="index.js"></script>
</head>

<body>
    <header>
        <div class="LogoTitulo">
            <img class="LogoTituloimg" src="../LogoTitulo.png" />
        </div>
    </header>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="navbar-nav">
                        <li>
                            <a href="../home/index.php">
                                <i class="fa-solid fa-house"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-top btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php foreach ($cardCant as $index => $card) { ?>
        <?php if ($index % 4 == 0) { ?>
            <div class="row mb-3">
            <?php } ?>

            <div class="col-sm-3">
                <div class="card" style="width: 19rem;  margin: 50px; background-color: #cccccc;">
                    <img src="<?php echo $card['imgCantante'] ?>" class="card-img-top" alt="..."
                        style="width: 300px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $card['nameCantante'] ?>
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <?php echo $card['edadCantante'] ?>
                        </li>
                        <?php
                        $paises = jointPais();
                        foreach ($paises as $pais) {
                            if ($pais['idCantante'] == $card['idCantante']) {
                                echo '<li class="list-group-item">' . $pais['nombrePaisCantante'] . '</li>';
                                break;
                            }
                        }
                        ?>
                        <!-- <li class="list-group-item  d-flex justify-content-between" style="background-color: #cccccc;">
                            <form action="./BD/php_controllers/cantanteController.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $heroe['id']; ?>">
                                <button type="submit" class="btn btn-light mb-2" id="boton" name="editar" title="Editar Cantante">
                                <i class="fa-solid fa-pen-to-square" style="color: #1ED760"></i>
                                </button>
                            </form>

                            <form action="./BD/php_controllers/cantController.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $heroe['id']; ?>">
                                <button type="submit" class="btn btn-light mb-2" id="boton" name="eliminar" title="Eliminar Cantante">
                                    <i class="fa-solid fa-trash-can" style="color: #ff0000;"></i>
                                </button>
                            </form>
                        </li> -->
                    </ul>
                </div>
            </div>

            <?php if (($index + 1) % 4 == 0 || ($index + 1) == count($cardCant)) { ?>
            </div>
        <?php } ?>
    <?php } ?>
    
</body>

</html>