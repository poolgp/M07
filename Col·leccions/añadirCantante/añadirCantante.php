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

    <link rel="stylesheet" href="añadirCantante.css" />
</head>

<body>
    <div class="containerTitulo">
        <div class="title-container">
            <h1>Cantante.com / Cantantes</h1>
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
                            <a href="../cantantes/cantantes.php">
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
        <h5 class="card-header">Ficha del cantante</h5>
        <div class="card-body">
            <div class="mb-3 row">
                <label for="nameCancion" class="col-sm-2 col-form-label">Nombre del Cantante: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputnameCantante" placeholder="Cruz Cafuné" />
                </div>
            </div>

            <div class=" mb-3 row">
                <label for="nameAlbum" class="col-sm-2 col-form-label">Edad del Cantante: </label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="dateEdad" placeholder="#" />
                </div>
            </div>

            <div class="mb-3 row">
                <label for="NacionalidadArtista" class="col-sm-2 col-form-label">Nacionalidad: </label>
                <div class="col-sm-10">
                    <select name="NArtista" id="NacionalidadArtista">
                        <option value="None" select>---</option>
                        <option value="España">España</option>
                        <option value="Canarias">Islas Canarias</option>
                </div>
            </div>
            <div>
                <label for="UploadImg" class="col-sm-2 col-form-label">Imagen: </label>

            </div>
            <button type="button" class="btn btn-success">Success</button>
        </div>
    </div>

    <script src="añadirCancion.js"></script>
</body>

</html>