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
    <button type="button" class="btn btn-secondary text-white">
        <a href="./hoteles.php" class="text-white" style="text-decoration: none;">Hoteles</a>
    </button>

    <div class="container">
        <div class="card mt-2">
            <div class="card-header bg-secondary text-white">
                Hotel
            </div>
            <div class="card-body">
                <form action="./php_controllers/Controller.php" method="POST">

                    <div class="form-group row">
                        <label for="id_ciudad" class="col-sm-2 col-form-label">Id Ciudad: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_ciudad" name="id_ciudad"
                                placeholder="Identificador de la ciutat" autofocus />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nom Hotel: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Nom del Hotel" />
                        </div>
                    </div>

                    <div class="float-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-secondary" name="deleteHotel">Acceptar</button>
                            <a href="./hoteles.php" class="btn btn-outline-dark">Cancelar</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>